<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Library

This will be a system to control the management of a library made in laravel and postgres
The idea is to control:

-   Book registration
-   Reader registration (customer)
-   Book entries and exits
-   Book in use
-   Book available
-   etc

## How to use

```
git clone https://github.com/lugabrielbueno/library_project.git

cd library_project

git clone https://github.com/laradock/laradock.git

cd laradock

docker-compose up -d nginx postgres pgadmin redis

cd ..

#after the command above remember to configure your .env file following the setup of the project
cp .env.example .env

composer install

npm install

npm run dev
```

If you use docker the HOST of database will be the name of the postgres container
