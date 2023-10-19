# Proyek Laravel 10 dengan Vue.js

Proyek ini adalah contoh proyek Laravel 10 dengan integrasi Vue.js. Ini membantu Anda memulai dengan kombinasi Laravel dan Vue.js untuk membangun aplikasi web modern.

## Instalasi

Berikut adalah langkah-langkah untuk menginstal proyek ini di komputer Anda:

1. **Clone Proyek**

    Clone repositori ini ke komputer Anda dengan perintah berikut:

    ```shell
    git clone https://github.com/username/repo-name.git
    ```

2. **Pemasangan Dependensi**

    Pindah ke direktori proyek dan pasang semua dependensi PHP dengan Composer:

    ```shell
    cd repo-name
    composer install
    ```

    Kemudian, pasang semua dependensi JavaScript dengan NPM atau Yarn:

    ```shell
    npm install
    # atau
    yarn install
    ```

3. **Kopi File Konfigurasi**

    Salin file `.env.example` menjadi `.env` dan atur variabel-variabel lingkungan sesuai kebutuhan Anda, seperti pengaturan basis data.

4. **Migrasi dan Penyemaian Database**

    Jalankan migrasi dan penyemaian untuk membuat tabel-tabel database dan mengisi data awal (pengguna, dll.):

    ```shell
    php artisan migrate
    php artisan db:seed
    ```

5. **Buat Kunci Aplikasi**

    Buat kunci aplikasi Laravel:

    ```shell
    php artisan key:generate
    ```

6. **Jalankan Server Pembangun**

    Jalankan server pembangun untuk menguji proyek Anda:

    ```shell
    php artisan serve
    ```

    Proyek akan tersedia di [http://localhost:8000](http://localhost:8000).

## Penggunaan

Panduan pengoperasian, silakan ikuti langkah-langkah berikut:

1. Jika migrate data ada telah benar maka silahkan login dengan
   http://localhost:8000/login
   Username : user
   Password : 12345678
2. Registrasi http://localhost:8000/register (`username uniqe check`).
   jika username telah terdafta maka otomatis tidak bisa digunakan oleh orang lain lagi.
3. Kelola data product http://localhost:8000/products.
4. Kelola data transaksi (no action edit & delete) http://localhost:8000/transaction
5. terhubung dengan Api `https://tes-skill.datautama.com/test-skill/api/v1/transactions` untuk nomor invoice otomatis.

## Lisensi

Proyek ini dilisensikan di bawah Lisensi MIT. Lihat [LICENSE.md](LICENSE.md) untuk detail lebih lanjut.

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

-   [Simple, fast routing engine](https://laravel.com/docs/routing).
-   [Powerful dependency injection container](https://laravel.com/docs/container).
-   Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
-   Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
-   Database agnostic [schema migrations](https://laravel.com/docs/migrations).
-   [Robust background job processing](https://laravel.com/docs/queues).
-   [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 2000 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

-   **[Vehikl](https://vehikl.com/)**
-   **[Tighten Co.](https://tighten.co)**
-   **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
-   **[64 Robots](https://64robots.com)**
-   **[Cubet Techno Labs](https://cubettech.com)**
-   **[Cyber-Duck](https://cyber-duck.co.uk)**
-   **[Many](https://www.many.co.uk)**
-   **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
-   **[DevSquad](https://devsquad.com)**
-   **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
-   **[OP.GG](https://op.gg)**
-   **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**
-   **[Lendio](https://lendio.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
