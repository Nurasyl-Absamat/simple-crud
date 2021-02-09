<p align="center"><h1>Simple CRUD</h1></p>

> ### Example Laravel project (CRUD, auth, validation and more) with mysql.


## Getting Started
## Installation

Please check the official laravel installation guide for server requirements before you start. [Official Documentation](https://laravel.com/docs/5.4/installation#installation)


Clone the repository

    git clone https://github.com/Nurasyl-Absamat/mini-forum.git

Switch to the repo folder
    
    cd mini-forum

Copy the example env file and make the required configuration changes in the .env file

    cp .env.example .env
After that change DB name and user name that you have on your system

    DB_DATABASE=simple-crud
    DB_USERNAME=root
    DB_PASSWORD=
    
Install all the dependencies using composer
    
    composer install
    
Install all the dependencies using npm

    npm install && npm run dev

Generate a new application key

    php artisan key:generate

Run the database migrations (**Set the database connection in .env before migrating**)

    php artisan migrate

Start the local development server

    php artisan serve
    
You can now access the server at http://localhost:8000


**Command list**

    git clone https://github.com/Nurasyl-Absamat/simple-crud.git
    cd laravel-realworld-example-app
    composer install
    npm install && npm run dev
    cp .env.example .env
    php artisan key:generate


***Note*** : It's recommended to have a clean database before seeding. You can refresh your migrations at any point to clean the database by running the following command

    php artisan migrate:refresh
    

## Dependencies

- [toastr-yoeunes](https://github.com/yoeunes/toastr) - For notifications















