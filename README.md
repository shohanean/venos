<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About This Project

This is project is the ultimate Point of Sales (POS) everyone looking for. Built with `Laravel` & various packages included.

Packages List is given below:

- Avatar Generator [laravolt/avatar](https://github.com/laravolt/avatar).
- Number to Words Converter [kwn/number-to-words](https://github.com/kwn/number-to-words).
- Country, City List [khsing/laravel-world](https://github.com/khsing/laravel-world).



## Setup

- First of all we have to `clone` the project at our local machine using below command
```
git clone https://github.com/shohanean/venos.git
```
- Now change the command line present working directory (pwd) by
```
cd venos
```
- Download the `composer` from [here](https://getcomposer.org/download/)
- Now with help of `composer` download all required packages those need to run this laravel project
```
composer install
```
- Now, we need to copy the .env.example file as .env file for our laravel project. Use below command to copy the file
```
cp .env.example .env
```
- Currently our project do not have any key, we have generate it using
```
php artisan key:generate
```
- Basic setup is done at this point, now we have work on `.env`. Below changes should be done at .env file
Variable Name | Description
--- | ---
PROJECT_FAVICON | demo text
PROJECT_LOGO | demo text
APP_NAME | demo text
APP_DESCRIPTION | demo text
APP_DEBUG | demo text


Colons can be used to align columns.

| Tables        | Are           | Cool  |
| ------------- |:-------------:| -----:|
| col 3 is      | right-aligned | $1600 |
| col 2 is      | centered      |   $12 |
| zebra stripes | are neat      |    $1 |

There must be at least 3 dashes separating each header cell.
The outer pipes (|) are optional, and you don't need to make the 
raw Markdown line up prettily. You can also use inline Markdown.

Markdown | Less | Pretty
--- | --- | ---
*Still* | `renders` | **nicely**
1 | 2 | 3
## Tools Used

- **[Laravel Livewire](https://laravel-livewire.com/)**
- **[Alpine.js](https://alpinejs.dev/)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
