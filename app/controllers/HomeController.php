<?php
/**
* HomeController   主页控制器
*/

namespace App\Controllers;

use App\Models\Article;
use App\Controllers\BaseController;

class HomeController extends BaseController
{	
	public function home()
	{
		$result = Article::updateOrCreate(
			['title' => 'redis的有序集合介绍', 'author' => '成长的小白菜'], 
			['fabulous' => 59, 'is_top' => 69,  'is_hot' => 111]
		);
		return views('article/index.html',Article::all());
	}
	
	public function list()
	{
		$result = Article::findAll();
		return views('index.html',$result);
	}

	public function details($id)
	{	
		$result = Article::findWhereAll($id);
		var_dump($result);die;
	}
    
}
