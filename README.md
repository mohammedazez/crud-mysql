# crud-mysql

## Buat Database di Phpmyadmin

- Buat tabel users

## Koneksi

- Buat data variabel
- Fungsi SQL untuk mengkoneksikan
- Buat kondisi jika koneksi gagal atau berhasil

## Create

- (Target tombol formnya) Jika tombol formnya di klik, Maka data akan dibuat "isset" "POST"
- ambil variable dari form name
- Ambil SQL INSERT di phpmyadmin dan ganti value dengan variabel
- Eksekusi SQLnya
- Buat kondisi jika gagal dan berhasil
- Buat form inputnya

## View

- Ambil sqlnya di phpmyadmin
- Eksekusi SQLnnya
- Buat Tabelnya (Link bootstrap) dan "fetch_assoc"
- Buat kondisi Jika data yang di input lebih dari 0 maka tampilkan data dengan variabel

## Update

- (update)Function untuk update
- (update)Target tombol update di formnya "isset" "POST'
- (update)Ambil SQL Update di phpmyadmin, ganti valuenya dengan variabel, dan dengan id
- (update)Eksekusi SQLnya
- (update)Buat Kondisi ekseskusi gagal atau berhasil
- (id)Function untuk ambil id
- (id) Jika variabel id di klik dan sudah terlihat di url, maka kita perlu mengedit data berdasarkan id "isset" "GET'
- (id)Ambil SQL Select\* di phpmyadmin dengan id
- (id)Eksekusi SQLnya
- (id)Jika result datanya lebih dari 0 maka eksekusi dan tampilkan datanya
- (id)Buat Table formnya (Ambil varibel idnya untuk value tiap form)
- (id)Jika id tidak valid maka arakan halaman ke view.php

## Delete

- Ambil id "isset" "GET"
- Buat variabel
- Ambil SQL delete di phpmyadmin
- Eksekusi SQLnya
- Buat kondisi jika berhasil dan gagal
