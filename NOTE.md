langkah – Langkah Membuat Crud
1.	Buat project baru
2.	Buka  Xampp, pilih apache dan mysql. Klik Start. Buka Xampp pilih mysql dan klik admin.  Buat Database di localhostmyadmin dengan nama yang sudah ditentukan.
3.	Buka vs code setting .env agar terhubung dengan database
4.	Buat tabel migration php artisan make:migration mahasiswa, lalu buat model php artisan make:model mahasiswa
5.	Buat jenis baris di tabel mahasiswa
6.	Kemudia buka terminal dan jalankan php artisan migrate
7.	Buat Migrasi Buat tabel data. Ketik php artisan make:migration mahasiswa
8.	Buat controller dengan menjalankan php artisan make:controller MahasiswaController
9.	Buat Tampilan Buat Folder di dalam resources-views.
10.	Buat halaman pages layout.blade.php, index.blade.php, create.blade.php, edit.blade.php,show.blade.php
