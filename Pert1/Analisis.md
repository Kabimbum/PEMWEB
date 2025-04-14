# Analisis CODING

# Docker
Apa itu Docker?
Docker adalah alat yang digunakan untuk menjalankan aplikasi dalam container, yaitu sebuah wadah terisolasi yang mencakup semua yang dibutuhkan untuk menjalankan aplikasi tersebut. Dengan menggunakan Docker, aplikasi dapat berjalan dengan konsisten di berbagai tempat, baik itu di komputer lokal, server, atau cloud, tanpa tergantung pada konfigurasi sistem operasi atau perangkat keras yang berbeda.

 Kenapa Menggunakan Docker?
 Lebih flexibel, karena aplikasi yang dijalankan di Docker akan bekerja dengan cara yang sama di berbagai lingkungan / environment. Kedua, Docker memberikan isolasi antara aplikasi yang berjalan. Docker lebih enteng dalam penggunaan sumber daya dibandingkan dengan virtual machine (VM).

 Kekurangan docker :
 Penggunaanya lebih kompleks sehingga terkesan tidak begginer friendly

 Kapan  menggunakan docker? 
 ketika  sedang mengembangkan aplikasi maupun website dan terdapat banyak tim dari berbagai environment.

 Siapa yang menggunakan docker?
 Pengembang / developer website 

 Bagaimana menggunakan docker ?
 - instalasi docker dan dalam kasus saya gunakan wsl
 - buat project baru dalam hal ini saya menggunakan wsl
 -buka software docker untuk mengaktifkannya
 -Buat file .env dam docker compose
 -sesuaikan code yang telah diberikan contohnya lalu pada terminal ketik : docker compose up -d --build
 -cek localhost apabila docker sudah aktif
 -lalu docker compose down untuk kembali mematikan docker;

# Website
Website adalah kumpulan halaman web yang dapat diakses melalui internet. Setiap halaman web biasanya dibangun menggunakan HTML (HyperText Markup Language), yang berisi struktur dan konten halaman, seperti teks, gambar, video, dan fitur interaktif lainnya. Website disimpan di server, dan dapat diakses menggunakan browser seperti Google Chrome.

Kenapa Website Dibutuhkan?
 Pertama, website menyediakan akses informasi, memudahkan orang untuk mengetahui tentang produk, layanan, bisnis, dan lainnya. Website juga sangat penting untuk bisnis, karena memungkinkan perusahaan menjangkau audiens yang lebih luas,  Selain itu, website memungkinkan e-commerce, sehingga orang dapat membeli dan menjual produk atau layanan secara online. Website juga berperan dalam pemasaran dan komunikasi, memungkinkan organisasi berhubungan dengan audiens melalui blog, buletin, atau formulir kontak.

# HTML
HTML (HyperText Markup Language) adalah bahasa pemrograman dasar yang digunakan untuk membuat dan menyusun halaman web. HTML berfungsi untuk memberikan struktur dasar pada halaman web, seperti menentukan bagian mana yang akan menjadi judul, paragraf, daftar, gambar, dan elemen lainnya. HTML menggunakan tag untuk menandai elemen-elemen yang ada di halaman web.

Why : HTML digunakan untuk memberi struktur dan makna pada konten web, s Hal ini memungkinkan pengguna untuk mengakses dan membaca konten web, 

Di mana HTML digunakan?: HTML digunakan di seluruh dunia untuk membangun halaman web, dari blog pribadi hingga aplikasi web 

Kapan menggunakan HTML?: Saat sedang mengembangkan website dan saat baru belajar programming

Siapa yang menggunakan HTML?: Penggunaan HTML melibatkan pengembang web, desainer web, pembuat konten,. Semua pihak ini memerlukan pemahaman HTML untuk memastikan situs web dibangun dengan benar dan baik.

Bagaimana cara menggunakan HTML?: HTML digunakan dengan menulis elemen-elemen markup di dalam file dengan ekstensi .html, yang mencakup tag pembuka dan penutup untuk setiap elemen, seperti <h1> untuk heading dan <p> untuk paragraf, untuk membangun struktur halaman web yang jelas dan terorganisir.

## docker-compose.yml
version: '3'

services:
  web:
    image: nginx:latest
    ports:
      - 80:80
    volumes:
      - ./nginx/nginx.conf:/etc/nginx/conf.d/default.conf
      - ./src/:/usr/share/nginx/html
version: versi file docker yml

image: menggunakan nginx:latest, yaitu menggunakan versi webserver yang terbaru.
Apa itu serverweb / webserver?
(Web server adalah perangkat lunak yang berfungsi menerima permintaan dari klien (seperti browser web) melalui HTTP atau HTTPS dan mengirimkan kembali respons dalam bentuk halaman web (dalam hal ini HTML).)


ports: mengatur pemetaan port dalam container, dalam hal ini menggunakan port 80.

volumes: direktori file yang digunakan dalam container.

Fungsinya:
Berfungsi untuk menampilkan halaman dari file HTML dan berjalan dalam container Docker.
Apa itu container?
(Container adalah cara untuk mengemas dan menjalankan aplikasi atau program beserta semua dependensinya (seperti pustaka, file konfigurasi, dan lainnya) di dalam sebuah wadah/layer yang terisolasi.)

# nginx.conf
nginx


server {
    listen 80;
    server_name localhost;

    root /usr/share/nginx/html;
    index index.html index.htm;

    location / {
        try_files $uri $uri/ =404;
    }
}
Fungsinya: Konfigurasi untuk server Nginx yang mendifinisikan server web seperti port yang digunakan, nama server, dan lokasi file HTML .

# .env
env

COMPOSE_PROJECT_NAME=esgul
REPOSITORY_NAME=pemweb
IMAGE_TAG=latest
COMPOSE_PROJECT_NAME=esgul: Berfungsi sebagai nama proyek di Docker, dalam hal ini bernama esgul.

REPOSITORY_NAME=pemweb: Nama dari repository yang akan digunakan.

IMAGE_TAG=latest: IMAGE_TAG adalah tag untuk menentukan versi image Docker. Dalam hal ini, tag latest menunjukkan bahwa menggunakan versi terbaru dari image yang ada di repository Docker.

# index.html
Apa itu HTML?
HTML (HyperText Markup Language) adalah bahasa standar yang digunakan untuk membuat dan menyusun struktur halaman web.

Fungsinya: Sebagai tampilan utama website yang dapat dikustomisasi sesuai kebutuhan.

html
Copy
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web gibran</title>
</head>
<body>
    <h1>Hello world</h1>
</body>
</html>
div.html
html
Copy
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tag Div</title>
</head>
<body>
    <div>
        this is a div element 
        <p>this is paragraph inside the div</p>
    </div>
</body>
</html>

# Task

User diharapkan bisa mengakses file latihan yang baru dibuat yang berisi file home.html dan profile.html

Solution : 

Menambahkan beberapa file ke dalam file .nginx.conf dan docker-compose.yml
Pada file nginx.conf

location /latihan {
        alias /usr/share/nginx/latihan/;
        index index.html index.htm home.html;
        try_files $uri $uri.html $uri/ =404;
    }

Pada file docker-compose.yml

 - ./latihan:/usr/share/nginx/latihan

 
 Home.html

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="Home">
        <H1> Welcome to my page </H1>
        <p> Hi my name is Muhammad Gibran Hakim </p>
        <p> Im currently learning Teknik informatika at Universitas esa unggul Tangerang </p>
        <p> Now im on the fourth semester on going to my first scholar </p>
        <p> Im looking to colaborate</p>

    </div>
</body>
</html>

ANALISIS : 

<body>: Bagian ini berisi konten yang ditampilkan di halaman web.

<div class="Home">: Membuat sebuah div dengan kelas "Home" yang digunakan untuk mengelompokkan elemen-elemen di dalamnya.

<H1>Welcome to my page</H1>: Menampilkan teks dengan ukuran heading (H1) yang bertuliskan "Welcome to my page".

<p>: Tag paragraf yang digunakan untuk menampilkan teks biasa di bawah heading.

Paragraf pertama berisi nama "Muhammad Gibran Hakim".

Paragraf kedua berisi informasi tentang jurusan yang sedang dipelajari di universitas.

Paragraf ketiga menceritakan tentang status kuliah di semester keempat.

Paragraf keempat berisi informasis ingin berkolaborasi.


Profile.html

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <h1> Biodata </h1>
     <p>Nama : Muhammad Gibran Hakim</p>
     <p>Alamat : Tangerang</p>
     <p>Jenis kelamin : Laki - laki </p>
     <p>Kewarganegaraan : Indonesia</p>
     <p>Usia : 19 Tahun</p>
</body>
</html>

Bagian <body>:

<h1> Biodata </h1>: Menampilkan judul atau heading "Biodata" di halaman web.

Setiap tag <p> digunakan untuk menampilkan informasi dalam bentuk paragraf:

<p> berisi informasi sebagai berikut

Nama: Muhammad Gibran Hakim

Alamat: Tangerang

Jenis kelamin: Laki-laki

Kewarganegaraan: Indonesia

Usia: 19 Tahun

Penutupan Tag:

</html>: Menutup tag HTML.
