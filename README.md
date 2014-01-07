Infusionsoft iSDK for Laravel 4
===============================


Installation :
==============

1. Install the [package](https://packagist.org/packages/saiffil/infusionsoft) via composer

2. Add the following entry to the array of service providers found in app/config/app.php :
`'Saiffil\Infusionsoft\InfusionsoftServiceProvider',`

3. Publish the config file to your app/config/ directory by running the following from command line in your project root :
`php artisan config:publish saiffil/infusionsoft`

4. Setup your Infusionsoft application name and api key at app/config/packages/saiffil/infusionsoft/config.php


Usage
=====

Call any method using Facade alias (Fuse)

Example :

`Fuse::loadCon(1);`

`Fuse::dsQuery('Contact',100,0,['Id' => %],['Id','FirstName'])`