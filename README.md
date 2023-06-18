<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://i.postimg.cc/15QJhZPy/Capture.jpg" width="400"></a></p>

## About This Project

This is project is the ultimate Point of Sales (POS) everyone looking for. Built with `Laravel` & various packages included.

Packages List is given below:

-   Avatar Generator [laravolt/avatar](https://github.com/laravolt/avatar).
-   Number to Words Converter [kwn/number-to-words](https://github.com/kwn/number-to-words).

## Setup

-   First of all we have to `clone` the project at our local machine using below command

```
git clone https://github.com/shohanean/venos.git
```

-   Now change the command line present working directory (pwd) by

```
cd venos
```

-   Download the `composer` from [here](https://getcomposer.org/download/)
-   Now with help of `composer` download all required packages those need to run this laravel project

```
composer install
```

-   Now, we need to copy the .env.example file as .env file for our laravel project. Use below command to copy the file

```
cp .env.example .env
```

-   Currently our project do not have any key, we have generate it using

```
php artisan key:generate
```

-   Basic setup is done at this point, now we have work on `.env`. Below changes should be done at .env file

| Variable Name   | Description                                                                                                                          |
| --------------- | ------------------------------------------------------------------------------------------------------------------------------------ |
| PROJECT_FAVICON | provide a link of favicon image                                                                                                      |
| PROJECT_LOGO    | provide a link of logo link                                                                                                          |
| APP_NAME        | app name for the entire project                                                                                                      |
| APP_DESCRIPTION | provide short description about the project                                                                                          |
| APP_DEBUG       | `true` will show the errors, `false` will hide errors by showing common exception page                                               |
| DB\_\*          | database settings to connect the database with this project                                                                          |
| MAIL\_\*        | database settings to send email via SMTP                                                                                             |
| NOCAPTCHA\_\*   | this project used nocaptcha, credentials can be generated from [here](https://www.google.com/recaptcha/about/), version should be 2. |

-   Now migrate the database using

```
php artisan migrate
```

-   Seed the database using

```
php artisan db:seed
```

-   At last, we can now run the project using

```
php artisan serve
```

## Tools Used

-   **[Laravel Livewire](https://laravel-livewire.com/)**
-   **[Alpine.js](https://alpinejs.dev/)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
