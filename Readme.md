# Dev tools for PHP/Laravel Framework

## Features


## Requirements

- PHP >=7.4
- Laravel >= 6


## Installation

```bash
composer require karim007/dev-tools
```

### vendor publish (config)

```bash
php artisan vendor:publish --provider="Karim007\DevTools\DevToolServiceProvider"
```

After publish config file setup your credential. you can see this in your config directory devtool.php file

```
"access_code"         => env("DEV_TOOL_ACCESS_CODE", 1111), //using this access code you will be access all routes
"response_type"   => "html" // response type json/html
```


add it in your PreventRequestsDuringMaintenance middle ware
```
'/dev/live/mode/*'

**it will be look like

class PreventRequestsDuringMaintenance extends Middleware
{
    /**
     * The URIs that should be reachable while maintenance mode is enabled.
     *
     * @var array<int, string>
     */
    protected $except = [
        '/dev/live/mode/*'
    ];
}
```

## Usage
```
/* access code which is you used on devtool.php default access code is 1111*/

//clear all cache,config,route,views etc
Route::get("/dev/clear/{access_code}", [DevToolController::class, "clear"]);

//migrate your file
Route::get("/dev/migration/{access_code}", [DevToolController::class, "migration"]);

//passport install
Route::get("/dev/passport/install/{access_code}", [DevToolController::class, "passportInstall"]);

//make your project maintained mode
Route::get("/dev/maintain/mode/{access_code}", [DevToolController::class, "maintainMode"]);

//make your project live mode
Route::get("/dev/live/mode/{access_code}", [DevToolController::class, "liveMode"]);

//storage symbolic link create
Route::get("/dev/storage/link/{access_code}", [DevToolController::class, "storageLink"]);

/*
** Advance dev tool routes
*/
//your controller name pass which you want to remove
Route::get("/dev/remove/controller/{access_code}/{name}", [AdvanceDevToolController::class, "removeController"]);

//your model name pass which you want to remove
Route::get("/dev/remove/model/{access_code}/{name}", [AdvanceDevToolController::class, "removeModel"]);

```

Contributions to the dev tools package you are welcome. Please note the following guidelines before submitting your pull
request.

- Follow [PSR-4](http://www.php-fig.org/psr/psr-4/) coding standards.
- Read Nagad API documentations first. Please contact with Nagad for their api documentation and sandbox access.

## License

This repository is licensed under the [MIT License](http://opensource.org/licenses/MIT).

Copyright 2022 [md abdul karim](https://github.com/karim-007). We are not affiliated with Nagad and don't give any guarantee. 
