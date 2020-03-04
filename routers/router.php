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

Macaw::get('/', 'HomeController@home');


Macaw::get('admin/list', 'HomeController@list');
Macaw::get('admin/(:num)', 'HomeController@details');



Macaw::get('article/(:num)', 'HomeController@details');

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


// Macaw::get('/', 'app\controllers\demo@index');
// Macaw::get('page', 'app\controllers\demo@page');
// Macaw::get('view/(:num)', 'Controllers\demo@view');
