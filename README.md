## Setup Application

Enter the folder with the application

`$ cd /path/to/app/`

Copy .env.example file to .env

`$ cp .env.example .env`

Install composer packages
(if you don't have composer installed on your machine follow this [rules](https://getcomposer.org/download/))

`$ composer install`

Generate Application key

`$ php artisan key:generate`

In .env file add DB credentials according to your db setup

`DB_HOST=<HOST_NAME>
 DB_PORT=<PORT>
 DB_DATABASE=<DB_NAME>
 DB_USERNAME=<DB_USERNAME>
 DB_PASSWORD=<DB_PASSWORD>`

 Run migrations and seeders

 `$ php artisan migrate`

 `$ php artisan db:seed`


Your application is ready!
