# Project Title

Mini CRM

## Getting Started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes. 

### Prerequisites

What things you need to install the software and how to install them

```
PHP >= 7.2.5
BCMath PHP Extension
Ctype PHP Extension
Fileinfo PHP extension
JSON PHP Extension
Mbstring PHP Extension
OpenSSL PHP Extension
PDO PHP Extension
Tokenizer PHP Extension
XML PHP Extension

```

### Installing

Install Composer 

then using Composer install Laravel: 
composer global require laravel/installer


### Tips

* You can use the Seeders created to insert random data by running:

php artisan db:seed (This will create one instance of each model).

To create data from a specific model run the command:

php artisan db:seed --class=TheNameOfTheSeeder

* Helpful URLs:

localhost/department ( Shows all department )
localhost/employees ( Shows all employees )


* To start the project run:

php artisan serve

To change the port run:

php artisan serve --port=YourPort

