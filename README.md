Project ini dibuat dengan tujuan untuk memenuhi tugas mata kuliah Pemrogamman Framework B (Laravel)
Studi Kasus : Sistem Informasi Bioskop

Anggota Kelompok :
1. Shoima Fitra Kumala      (17081010022)
2. Frizal aditya Junitio R. (17081010061)
3. Dicky Giancini Arawindo  (17081010162)
4. Feronika Nur Maghfiro    (17081010067)

Cara menjalankan project:
1. Clone project pada lokal direktori
2. pada terminal arahkan ke folder project yang telah di clode, jalankan "php artisan serve"
3. jalankan "php artisan migrate"

Solusi Error :
1. Clone project
2. Ubah .env.example menjadi .env
3. Copy : TMDB_TOKEN = eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiI5MmZlMjhjNmQwY2NjZjcxNDUzZWU4ZWFjZjQxYTk5NyIsInN1YiI6IjVlOWM0NDFmMzEwMzI1MDAxYWM4NzQxMiIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.ucO0GMirauuE_Yk9qcEnBWIuRSwdGO4eIJq7VTqBl3I

dan masukkan ke dalam file .env
4. Buka terminal sesuai direktori clone
5. Lakukan : composer update
6. jalankan "php artisan serve"
7. jalankan "php artisan migrate"

Jika menjadi user :
jalankan url (/login) dengan ketentuan setelah melakukan login dan telah memiliki akun.

Jika menjadi admin :
jalankan url (/loginadmin) dengan email:admin@admin.com password:12345

Thanks to https://stackoverflow.com/
