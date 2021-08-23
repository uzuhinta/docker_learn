(function () {
  'use strict';

  /**
   * @copyright   (C) 2018 Open Source Matters, Inc. <https://www.joomla.org>
   * @license     GNU General Public License version 2 or later; see LICENSE.txt
   */

  /**
   * Keepalive javascript behavior
   *
   * Used for keeping the session alive
   *
   * @package  Joomla.JavaScript
   * @since    3.7.0
   */
  (function (document, Joomla) {
    var keepAlive = function keepAlive(keepAliveUri) {
      Joomla.request({
        url: keepAliveUri
      });
    };

    var onBoot = function onBoot() {
      if (!Joomla || typeof Joomla.getOptions !== 'function' && typeof Joomla.request !== 'function') {
        throw new Error('core.js was not properly initialised');
      }

      var keepAliveOptions = Joomla.getOptions('system.keepalive');
      var keepAliveInterval = keepAliveOptions && keepAliveOptions.interval ? parseInt(keepAliveOptions.interval, 10) : 45 * 1000;
      var keepAliveUri = keepAliveOptions && keepAliveOptions.uri ? keepAliveOptions.uri.replace(/&amp;/g, '&') : ''; // Fallback in case no keepalive uri was found.

      if (keepAliveUri === '') {
        var systemPaths = Joomla.getOptions('system.paths');
        keepAliveUri = (systemPaths ? systemPaths.root + "/index.php" : window.location.pathname) + "?option=com_ajax&format=json";
      }

      setInterval(keepAlive, keepAliveInterval, keepAliveUri); // Cleanup

      document.removeEventListener('DOMContentLoaded', onBoot);
    };

    document.addEventListener('DOMContentLoaded', onBoot, true);
  })(document, Joomla);

}());
