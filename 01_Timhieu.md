# Tìm hiểu docker image, chạy container

Image là những phần mềm được đóng gói và quản lý bởi docker. Image chỉ đọc ko thể sửa.

Khi image được docker khởi chạy thì phiên bản thực thi của image là container có thể ghi, ... 

Liệt kê các image

```sh 
docker images
```

Các image được lấy từ image registory. Để tìm hiếm

```sh
docker search image
```

Tải image

```sh
docker pull image_name:tag
```

Xóa image

```sh
docker image rm image:tag
```

Khởi chạy image:

```sh
docker thamso IMAGE command thamsolenh

ex: docker -it centos 

cat /etc/*release // kiem tra thong so container

exit -> stop image
```

Kiểm tra các container

```sh
docker ps -a
```

Nếu docker đang stop, muốn start:

```sh
docker start image || name
```

Vào terminal của container

```sh
docker attach id || name
```

Thoát nhưng muốn container vẫn chạy: **ctrl + P + Q**

Đứng ngoài container muốn ép container stop:

```sh
docker stop id || name
```

Khởi chạy container với 1 số tham số bổ sung:

```sh
docker -it --name "name_container" -h "hostname" image
```

Nếu container đang stop, và chungs ta ko muốn sử dụng lại, ta có thể xóa

```sh
docker rm name || id
```

Đang chạy mà muốn xóa

```sh
docker rm -f name || id
```

