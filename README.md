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

- Ambil sqlnya SELECT\* di phpmyadmin (hapus WHERE 1)
- Eksekusi SQLnnya
- Buat Tabelnya (Link bootstrap CSS)
- if resultnya num_rows jika lebih dari 0
- while parameter variabel row = result "fetch_assoc"
- tampilkan data row echo title di phpmyadmin
- buat tombol update dan delete arahkan ke href, variabel id= target id

## Update

- (update)Function untuk update
- (update)Target tombol update bagian name di formnya "isset" "POST'
- (update)Buat variable data name di form "POST" dan tambahkan id
- (update)Ambil SQL Update di phpmyadmin, ganti valuenya dengan variabel, dan dengan id = user id
- (update)Eksekusi SQLnya
- (update)Buat Kondisi ekseskusi gagal atau berhasil
- (id)Function untuk ambil id
- (id) Jika variabel id di klik dan sudah terlihat di url, maka kita perlu mengedit data berdasarkan id "isset" "GET'
- (id) Buat variabe user id
- (id) Ambil SQL Select\* di phpmyadmin dengan id
- (id) Eksekusi SQLnya
- (id) if resultnya num_rows jika lebih dari 0
- (id) while parameter variabel row = result "fetch_assoc"
- (id) buat variabel = row ke title data di phpmyadmin
- (tabel) Buat Table formnya
- (tabel) tambahkan input id
- (tabel) Ambil varibel idnya untuk value tiap form tanpa $row
- (tabel) value menggunakan variabel function ambil id if while result
- (id) Jika id tidak valid maka arakan halaman ke view.php

## Delete

- Ambil id "isset" "GET"
- Buat variabel user id
- Ambil SQL delete di phpmyadmin dan tambahkan id
- Eksekusi SQLnya
- Buat kondisi jika berhasil dan gagal
