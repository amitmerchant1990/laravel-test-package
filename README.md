Laravel Test Package
==================

I've created this package to understand the workflow of Laravel Packages and how they work. I've kept fairly simplistic to make things clearer.

## Install

`$ composer require amitmerchant/calculator=dev-master`

Then add `Amitmerchant\Calculator\CalculatorServiceProvider::class` in `bootstrap/app.php` under _providers_

## Use

Run `php artisan serve`

And then access following URLs:

http://127.0.0.1:8000/add/2/4

http://127.0.0.1:8000/substract/4/2

## License
MIT