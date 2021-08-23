# Lệnh exec, lưu container thành image với commit, xuất image ra file

Đưngs ngoài conainer muốn thực thi lệnh trong container:

```sh
docker exec name || id 

Lưu conainter thành image

```sh
docker commit name || id name:tag
ex: docker commit U1 ubuntu-vim:version1
```

Lưu image thành file

```sh
docker save --output name_file.tar id || name
ex: docker save --output ubuntu-vim.tar ubuntu-vim:version1
```

Nạp image vào docker từ file

```sh
docker load --input name_file.tar
```

Đặt tên:

```sh
docker tag name:tag
```
