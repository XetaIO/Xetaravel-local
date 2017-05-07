> <h1 align="center">Xetaravel Local</h1>
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
