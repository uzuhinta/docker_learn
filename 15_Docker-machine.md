# Sử dụng docker-machine tạo docker host

Là công cụ của docker cho phép tạo ra máy ảo, trên máy ảo này đã cài đặt docker. mục đích: tạo ra hệ thống dockẻ khác nhau chạy trên máy ảo khau. Sau này khi sử dụng docker swarm có thể kết nối với nhau.

Tạo docker machine

```sh
docker-machine create -driver vitualbox | hyperv dk_mc_name
```

Liệt kê

```sh
docker-machine ls
```

Dừng

```sh
docker-machine stop dk_mc_name
```

Chạy lại

```sh
docker-machine start dk_mc_name
```

Xóa

```sh
docker-machine rm dk_mc_name
```

SSH vào 

```sh
docker-machine ssh dk_mc_name
```

Copy dữ liệu từ host vào machine hoặc ngược lại

```sh
docker-machine scp -r source dk_mc_name:/des
```

Xem ip

```sh
docker-machine ip dk_mc_name
```
