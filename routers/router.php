<?php 

/*
|--------------------------------------------------------------------------
| Framework Router
|--------------------------------------------------------------------------
|
| We need to illuminate PHP development, so let us turn on the lights.
| This bootstraps the framework and gets it ready for use, then it
| will load up this application so that we can run it and send
| the responses back to the browser and delight our users.
|
*/

use NoahBuscher\Macaw\Macaw;

//主页 
Macaw::get('/', 'App\Controllers\HomeController@home');

//文章
Macaw::get('article/list', 'App\Controllers\ArticleController@list');
Macaw::get('article/(:num)', 'App\Controllers\ArticleController@details');


//请求方式
// Macaw::get('/(:any)', function($slug) {   echo 'The slug is: ' . $slug; });
// Macaw::post('/', function() {  echo "I'm a POST request!";  });
// Macaw::any('/', function() {  echo "I can be both a GET and a POST request!";   });

// //请求错误
Macaw::error(function() { 
      $basecontroller = new App\Controllers\BaseController();
      echo $basecontroller::errorReporting();
});

Macaw::dispatch();