<?php

/** 
 * Framework Name Is Black Manba
 * 
 * auther       Ding JingFei
 * version      V 1.0.0
 * time         2020-03-01 15:52:00
 * 
 * 
 * Welcome Black Manba Framework  欢迎使用黑曼巴框架！ "以99%的准确度用最大的速度，快速连续的打击"
 * 
*/


define("APP_PATH", $_SERVER['DOCUMENT_ROOT'] );

/*
|--------------------------------------------------------------------------
| Register The Auto Loader
|--------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader for
| our application. We just need to utilize it! We'll simply require it
| into the script here so that we don't have to worry about manual
| loading any of our classes later on. It feels great to relax.
|
*/

require __DIR__.'/../vendor/autoload.php';

/*
|--------------------------------------------------------------------------
| Run  Framework Eloquent ORM
|--------------------------------------------------------------------------
|
| We need to illuminate PHP development, so let us turn on the lights.
| This bootstraps the framework and gets it ready for use, then it
| will load up this application so that we can run it and send
| the responses back to the browser and delight our users.
|
*/

require __DIR__.'/../app/config/database.php';

/*
|--------------------------------------------------------------------------
| Run Framework Helper 
|--------------------------------------------------------------------------
|
| We need to illuminate PHP development, so let us turn on the lights.
| This bootstraps the framework and gets it ready for use, then it
| will load up this application so that we can run it and send
| the responses back to the browser and delight our users.
|
*/

require __DIR__.'/../app/helpers/helper.php';

/*
|--------------------------------------------------------------------------
| Run Framework Routing 
|--------------------------------------------------------------------------
|
| We need to illuminate PHP development, so let us turn on the lights.
| This bootstraps the framework and gets it ready for use, then it
| will load up this application so that we can run it and send
| the responses back to the browser and delight our users.
|
*/

require __DIR__.'/../routers/router.php';

/*
|--------------------------------------------------------------------------
| Run The Application
|--------------------------------------------------------------------------
*/

