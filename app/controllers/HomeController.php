<?php
/**
* HomeController
*/

use App\Models\Article;

class HomeController extends BaseController
{
	public function home(){

		$result = Article::updateOrCreate(
			['title' => 'Redis的存储机制', 'author' => '成长的小白菜'], 
			['fabulous' => 79, 'is_top' => 89]
		);
		
		var_dump($result);die;
    }

	
    
}
