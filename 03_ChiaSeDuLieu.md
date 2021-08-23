# Chia sẻ dữ liệu trong Docker, tạo và quản lý ổ đĩa docker volume

Chia sẻ dữ liệu qua thư mục

```sh
docker -it -v pathHost:pathContainer id_image
```

Muốn container thứ 2 có được volume giống container đã chạy

```sh
docker -it --volumes-from old_container id_image
```

Chia sẻ dữ liệu qua tạo và quản lý ổ đĩa: 

Kiểm tra ổ đĩa:

```sh
docker volume ls
```

Tạo ổ đĩa

```sh
docker volume create name_volume
```

Kiểm tra thông tin volume

```sh
docker volume inspect name_volume
```

Xóa ổ đĩa

```sh
docker volume rm name_volume
```

Gắn volume vào container 

```sh
docker run -it --mount source=name_volume,target=pathContainer id_image
```

Tạo ổ đĩa ánh xạ đến thư mục

```sh
docker volume create --opt devive=pathHost --opt type=none --opt o=bint name_volume
```

Khi sử dụng loại ổ đĩa này ta sử dụng tham số -v

```sh
docker run -it -v name_volume:pathContainer id_image
