# UAS-Pemrograman-Web-2

Charles Phandurand (2010817110006) dan Maulana (2010817310008)

# Ringkasan
Secara garis besar web ini dibangun untuk memenuhi Ulangan Akhir Semester Pemrograman Web II dengan tema "Sistem Informasi Games". Web ini terkoneksi dengan database MySQL, didesain menggunakan Bootstrap, desain tabel menggunakan DataTables, flash messages dengan Sweet Alert, kolom teks dengan Trix Editor, dan MVC menggunakan framework Laravel.

# Instalasi

1. Clone repository. Download sebagai zip atau dengan menjalankan perintah

    ```bash
    git clone https://github.com/charlesphandurand/UAS-Pemrograman-Web-2.git
    ```

2. Import Database games

3. Buka terminal dan pindah ke foder dimana hasil projek di download.

    ```
    # Contoh
    cd C:/xampp/htdocs/UAS-Pemrograman-Web-2
    ```

    Jalankan perintah composer install pada terminal

    ```
    composer install
    ```

4. Buat file `.env` untuk konfigurasi dan generater `APP_KEY`.

    ```
    cp .env.example .env
    php artisan key:generate
    ```

5. Pada file `.env`, sesuaikan perintah dibawah dengan database yang dibuat.

    ```env
    DB_HOST=127.0.0.1 # ganti dengan url anda atau biarkan default
    DB_PORT=3306 # ganti dengan port atau biarkan default
    DB_DATABASE=games # ganti dengan nama database yang telah dibuat yaitu games
    DB_USERNAME=root # sesuaikan dengan username database. biarkan default jika menggunakan database lokal
    DB_PASSWORD= # sesuaikan dengan password database. biarkan default jika menggunakan database lokal
    ```
6. Website siap dijalankan dengan perintah

    ```
     php artisan serve
    ```
