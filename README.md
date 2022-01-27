## Patient Registration Management System (Back-end API)

Simple Patient Registration Management System, Build Using VueJs Front-end and Back-end using Laravel

## Requirements

These packages use (no need to install):
* [Laravel 8](http://laravel.com/)
* [Laravel Passport]()
* [laravel-cors]()
* [L5 Repository]()

The current package requirements are:
- NodeJs >= 14.x
- Laravel >= 8.x
- PHP >= 8.0.x
- MySQL >= 8.0.x

## Installation
- Clone repository

``
git clone git@github.com:Kimsoeurn/patient-registration-api.git
``
- Composer

``
composer install
``

- Node Package

``
npm install && npm run dev
``

- Config Database and migrate. (Copy ``env.example and rename .env and config your database connection``)

``
php artisan migrate --seed
``

- Generate Application key

``
php artisan key:generate
``

- Run your local web server

``
php artisan serve
``

- Admin login

``
Email: devgeek@gmail.com
``

``
Password: password
``
## License

The MIT License (MIT). Please see check for more information. [MIT license](https://opensource.org/licenses/MIT).
