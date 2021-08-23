# Networking trong docker, tạo và quản lý network trong container docker

Muốn container sau khi kết thúc sẽ tự xóa container, dùng trong trường hợp container dùng đúng 1 lần.

```sh
docker run -it --rm 
```

docker có hệ thống tạo và quản lý network được container kết nối vào để tạo liên kết mạng giữa container với nhau và mạng ra bên ngoài. Tự đọng docker sẽ tạo 3 mạng bridge, local, none. Khi tạo container thì tự động kết nối vào bridge.

liệt kê các mạng

```sh
docker network ls
```

Tạo container có ánh xạ cổng mạng

```sh
docker run -it --name name_Container -p 8888:80 name_image
```

Có thể tạo mạng bridge khác để ko muốn container cùng kết nối vào 1 mạng (Cách ly container"

```sh
docker network create --driver bridge name_network
```

Xóa network

```sh
docker network rm name_network
```

Tạo container kết nối với mạng tự tạo

```sh 
docker run -it --name name_container --network name_network name_image
```

Nối container đang chạy vào network

```sh
docker network connect name_network name_container
```
