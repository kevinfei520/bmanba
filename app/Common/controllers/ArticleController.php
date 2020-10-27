<?php
/**
* ArticleController   文章控制器
*/

namespace App\Common\Controllers;

use App\Common\Models\Article;
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
