Manage node

Chạy trên node manager

```sh
docker swarm init --advertise-addr=ip_manager
```

Liệt kê docker node

```sh
docker node ls
```

Xem lại lệnh join

```sh
docker swarm join-token worker
```

Nếu worker muốn rời swarm

```sh
docker swarm leave
```

Ở node manager xóa node đang ở trạng thái down

```sh
docker node rm ID_NODE
```
