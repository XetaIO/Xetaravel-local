> <h1 align="center">Xetaravel Local</h1>
>
> |Stable Version|Downloads|Laravel|License|
> |:-------:|:------:|:-------:|:-------:|
> |[![Latest Stable Version](https://img.shields.io/packagist/v/XetaIO/Xetaravel-local.svg?style=flat-square)](https://packagist.org/packages/xetaio/xetaravel-local)|[![Total Downloads](https://img.shields.io/packagist/dt/xetaio/xetaravel-local.svg?style=flat-square)](https://packagist.org/packages/xetaio/xetaravel-local)|[![Laravel 5.4](https://img.shields.io/badge/Laravel-5.4-f4645f.svg?style=flat-square)](http://laravel.com)|[![License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](https://github.com/XetaIO/Xetaravel-local/blob/master/LICENSE)|
>
> A  simple package that regroup all tools to work in local environment.
>
> |Packages Included|
> |---|
> |[![barryvdh/laravel-debugbar](https://img.shields.io/badge/barryvdh%2Flaravel.debugbar-^2.3-44CB12.svg?style=flat-square)](https://github.com/barryvdh/laravel-debugbar)<br>[![filp/whoops](https://img.shields.io/badge/filp%2Fwhoops-^2.1-44CB12.svg?style=flat-square)](https://github.com/filp/whoops)|
>
> ## Installation
>
> ```
> composer require xetaio/xetaravel-local
> ```
>
> Import the `LocalEnvironmentServiceProvider` in your `config/app.php`:
> ```
> Xetaio\Local\Providers\LocalEnvironmentServiceProvider::class
> ```
>
> To use `Whoops` (optional), extend your `app\Exceptions\Handler` to `Xetaio\Local\Exceptions\LocalHandler`:
>```php
> <?php
> namespace App\Exceptions;
>
> use Exception;
> use Illuminate\Auth\AuthenticationException;
> use Xetaio\Local\Exceptions\LocalHandler as ExceptionHandler;
>
> class Handler extends ExceptionHandler
> {
>     //
> }
> ```
> If you want to change the `DebugBar` config, you will need to publish the config :
> ```
> php artisan vendor:publish --provider="Barryvdh\Debugbar\ServiceProvider"
> ```
>
> ## Contribute
> If you want to contribute to the project by adding new features or just fix a bug, feel free to do a PR.
