<?php
/**
* HomeController   主页控制器
*/

namespace App\Common\Controllers;

use App\Common\Controllers\BaseController;

class HomeController extends BaseController
{	
	public function home()
	{	
		return views('index.html');
	}

}
