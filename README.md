## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## How to start?

Follow this procedures to install this project on your device:

### 1. Clone project to your computer
```command
git clone https://github.com/DnG-E-Commerce/e-commerce.git
```
### 2. Install composer on the project
```command
composer install
```
### 3. Setup .env and generate key
```command
cp .env.example .env
```

after that..

```command
php artisan key:generate
```
### 4. Setup .env file and change database configuration
```env
DB_CONNECTION=pgsql ##change it to mysql if u're using MySQLi
DB_HOST=127.0.0.1
DB_PORT=5432 ##change it to 3306 if u're using MySQLi
DB_DATABASE=e_commerce ##this is your database name
DB_USERNAME=postgres ##default username for MySQLi is root
DB_PASSWORD=admin ## and there's no password in MySQLi
```

### 5. Run Migration
```command
php artisan migrate
```