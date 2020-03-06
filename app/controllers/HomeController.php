<?php
/**
* HomeController   主页控制器
*/

namespace App\Controllers;

use App\Controllers\BaseController;

class HomeController extends BaseController
{	
	public function home()
	{	
		return views('index.html');
	}

}
