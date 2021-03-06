Infusionsoft Official iSDK Wrapper for Laravel 4
================================================

[![Latest Stable Version](https://poser.pugx.org/sairiz/infusionsoft/v/stable.png)](https://packagist.org/packages/sairiz/infusionsoft) [![Total Downloads](https://poser.pugx.org/sairiz/infusionsoft/downloads.png)](https://packagist.org/packages/sairiz/infusionsoft) [![License](https://poser.pugx.org/sairiz/infusionsoft/license.png)](https://packagist.org/packages/sairiz/infusionsoft)



Installation :
==============

1. Install the [package](https://packagist.org/packages/sairiz/infusionsoft) via composer

2. Add the following entry to the array of service providers found in app/config/app.php :
`'Sairiz\Infusionsoft\InfusionsoftServiceProvider',`

3. Publish the config file to your app/config/ directory by running the following from command line in your project root :
`php artisan config:publish sairiz/infusionsoft`

4. Setup your Infusionsoft application name and api key at app/config/packages/sairiz/infusionsoft/config.php


Usage
=====

Call any method using Facade alias (Fuse)

Example :

`Fuse::loadCon(1);`

`Fuse::dsQuery('Contact',100,0,['Id' => %],['Id','FirstName']);`
