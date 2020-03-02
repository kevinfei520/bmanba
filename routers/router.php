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



Macaw::dispatch();


// Macaw::get('/', 'app\controllers\demo@index');
// Macaw::get('page', 'app\controllers\demo@page');
// Macaw::get('view/(:num)', 'Controllers\demo@view');
