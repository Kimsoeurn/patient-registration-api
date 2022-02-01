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

## Installation (Local Development)
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
- Seed Factory Data

``
php artisan db:seed
``

- Generate Application key

``
php artisan key:generate
``

- Run your local web server

``
php artisan serve
``

## Installation (Docker Laravel Sail)
### Requirements
- [Install Docker](https://www.docker.com/) (for Window need install WSL2)

``
git clone git@github.com:Kimsoeurn/patient-registration-api.git
``
- Build Docker Image

``
cd project-dir
``
- Copy .env.example to .env

``
docker run --rm \
-u "$(id -u):$(id -g)" \
-v $(pwd):/var/www/html \
-w /var/www/html \
laravelsail/php81-composer:latest \
composer install --ignore-platform-reqs
``

- Run Laravel Sail in Background

``
./vender/bin sail up -d
``

- Generate Application key

``
./vender/bin sail artisan key:generate
``

- Run Database migration and Seed

``
./vender/bin sail artisan migrate --seed
``

- Node Package (Optional)

``
./vender/bin sail npm install
``

``
./vender/bin sail npm run dev
``

## RESTFul API
### User Login and Registration
    HTTP Verb: POST Data({name, email, passowrd})
    http://localhost/api/register

    HTTP Verb: POST Data({usernname, passowrd})
    http://localhost/api/login

### CRUD Operations (Patients)
    [List all patients]
    HTTP Verb: GET
    http://localhost/api/patients

    [Show patient]
    HTTP Verb: GET
    http://localhost/api/patients/{id}

    [Create Patient] data
    {
        health_id_card, 
        name_kh, 
        name_en, 
        date_of_birth, 
        gender, 
        nationality, 
        occupation, 
        phone_number, 
        mental_health_id_card, 
        other_id_card:, 
        is_disabled, 
        province_id,
        district_id,
        commune_id, 
        village_id,
        remark
    }
    HTTP Verb: POST Data(data)
    http://localhost/api/patients

    [Update Patient] data
    {
        health_id_card, 
        name_kh, 
        name_en, 
        date_of_birth, 
        gender, 
        nationality, 
        occupation, 
        phone_number, 
        mental_health_id_card, 
        other_id_card:, 
        is_disabled, 
        province_id,
        district_id,
        commune_id, 
        village_id,
        remark
    }

    HTTP Verb: PUT Data(id, data)
    http://localhost/api/patients/{id}

    [Delete Patient]
    HTTP Verb: DELETE
    http://localhost/api/patients/{id}

### Provinces API
    [All Provinces]
    HTTP Verb: GET
    http://localhost/api/provinces

    [All Districts by province]
    HTTP Verb: GET
    http://localhost/api/provinces/{provinceId}/districts

    [All Communes by district]
    HTTP Verb: GET
    http://localhost/api/districts/{districtId}/communes

    [All Villages by commune]
    HTTP Verb: GET
    http://localhost/api/communes/{communeId}/villages
    
## License

The MIT License (MIT). Please see check for more information. [MIT license](https://opensource.org/licenses/MIT).
