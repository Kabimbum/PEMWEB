# Pemrograman web pertemuan 1 ( Materi )

-Wajib Analisa (Analisis.MD) --> '5W1H DAN SWOT'
-Wajib ngoding 
-Wajib catatan (catatan.MD)

# Note
** ngambil referensi seperti template atau plug in di taro di file readme.md **


# Pembahasan project pra uts
Portofolio / Company profile (edit foto tapi menggunakan user admin jadinya harus di dalam website langsung, jadi ga diganti di html nya)

# pembahasan project akhir / UAS
Kasus kasus  -- (Belum fix) 

 Address website contohnya facebook.com --> sebagai identitas/Domain

 1. kenapa pake docker?
Strength --> dapat berfungsi secara konsisten di os manapun dan lebih enteng dibanding menggunakan virtual machine
weakness --> lebih kompleks

2. Website berfungsi sebagai alat atau media yang dapat digunakan untuk berbagai keperluan contohnya seperti media informasi dan komunikasi

3. Kenapa perlu belajar pemrograman web?
    Sebagai penunjang keterampilan teknikal untuk terjun ke dunia pekerjaan

#   How to run a docker project pert 1;
- instalasi docker dan dalam kasus saya gunakan wsl
 - buat project baru dalam hal ini saya menggunakan wsl
    mkdir (nama project)
 -buka software docker untuk mengaktifkannya
 -Buat file .env, docker-compose.yml dan nginx.conf
 contoh file .env

 COMPOSE_PROJECT_NAME=esgul
 REPOSITORY_NAME=pemweb
 IMAGE_TAG=latest

 contoh file . docker-compose.yml
 
 version: '3'

services: 
  web:
    image: nginx:latest
    ports:
      - 80:80
    volumes:
      - ./nginx/nginx.conf:/etc/nginx/conf.d/default.conf
      - ./src:/usr/share/nginx/html
      - ./latihan:/usr/share/nginx/latihan

contoh fike nginx.conf
 -sesuaikan code yang telah diberikan contohnya lalu pada terminal ketik : docker compose up -d --build
 -cek localhost apabila docker sudah aktif
 -lalu docker compose down untuk kembali mematikan docker;


# Tag-Tag HTML

1. sample umum dalam html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Day 1 - Sample HTML</title>
</head>
<body>
    Sample HTML
</body>
</html>

2. Tag a berfungsi sebagai hyperlink 
3. Tag div berfungsi untuk membungkus atau mengkelompokan elemen html yang lain
4. Tag form berfungsi untuk untuk mendapatkan input dari user
5. Tag h berfungsi sebagai header atau judul
6. Tag img berfungsi untuk menambahkan gambar ke dalam page HTML
7. Tag p berfungsi sebagai elemen paragraf di html
8. Tag ul-li berfungsi sebagai list element di html