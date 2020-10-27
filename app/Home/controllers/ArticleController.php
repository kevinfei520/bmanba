<?php
/**
* ArticleController   文章控制器
*/

namespace App\Home\Controllers;

use App\Home\Models\Article;
use App\Common\Controllers\BaseController;

class ArticleController extends BaseController
{	
	public function list()
	{	
		return views('article/index.html',Article::all());
	}

	public function details($id)
	{	
		$result = Article::findWhereAll($id);
		var_dump($result);die;
    }
    
    
}