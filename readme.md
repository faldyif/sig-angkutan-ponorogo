# SIG-Angkutan-Ponorogo

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

Sistem Informasi Geografis Trayek Angkutan Cerdas Sekolah Kabupaten Ponorogo is made from Laravel 5.4. Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as authentication, routing, sessions, queueing, and caching.

Laravel is accessible, yet powerful, providing tools needed for large, robust applications. A superb inversion of control container, expressive migration system, and tightly integrated unit testing support give you the tools you need to build any application with which you are tasked.

## What needed?

If you are using Windows, the easiest way to manage all is with [Laragon](https://laragon.org/). It's similar to xampp but has all the requirements to run laravel included to the package (cmder, git, composer, php, mysql, etc).

But if you are using another operating system or decide to do it manually on windows, you must have this:

1. [git](https://git-scm.com/) of course!
2. [Composer](https://getcomposer.org/) dependency manager

And add two of thoose with adiition of php binary folder to your PATH system environment variable if you are using windows.

## How to Install

1. Clone this repository with git command on your working directory (C:\xampp\htdocs on xampp or C:\laragon\www on laragon): `git clone https://github.com/faldyif/sig-angkutan-ponorogo.git`
2. Edit the .env.example file. Change the DB_HOST, DB_PORT, DB_DATABASE, DB_USERNAME and DB_PASSWORD parameter as your database configuration.
3. Save the file as .env
4. Install the dependencies: `composer install --no-scripts`
5. Generate a random key with artisan command `php artisan key:generate`
6. Migrate the tables to database `php artisan migrate`
7. For symlinking the storage folder for file uploads, use: `php artisan storage:link`