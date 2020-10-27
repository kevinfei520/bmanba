<?php
/**
* HomeController   主页控制器
*/

namespace App\Home\Controllers;

use App\Common\Controllers\BaseController;

class HomeController extends BaseController
{	
	public function index()
	{	
		return views('index.html');
	}

}
