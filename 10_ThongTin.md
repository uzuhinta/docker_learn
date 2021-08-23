# Tra cứu thông tin image, container và giám sát hoạt động container

Xem image được hình thành từ lệnh nào

```sh
docker image history id_image
```

Liệt kê thông tin image

```sh
docker inspect id_image
```

Muốn kiểm tra từ thời điêm tạo ra đến hiện tại có những thay đổi j

```sh
docker diff id_image
```

Giám sát hoạt động

```sh
docker stats id_image
or docker stats --> container is running
```
