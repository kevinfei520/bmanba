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

Macaw::get('/', 'App\Controllers\HomeController@home');
Macaw::get('article/(:num)', 'App\Controllers\HomeController@details');


Macaw::get('admin/list', 'App\Controllers\HomeController@list');
Macaw::get('admin/(:num)', 'App\Controllers\HomeController@details');


Macaw::get('/(:any)', function($slug) {
      echo 'The slug is: ' . $slug;
});

Macaw::post('/', function() {
      echo "I'm a POST request!";
});
  
// Macaw::any('/', function() {
//      echo "I can be both a GET and a POST request!";
// });

Macaw::error(function() {
     echo '404 :: Not Found';
});

Macaw::dispatch();