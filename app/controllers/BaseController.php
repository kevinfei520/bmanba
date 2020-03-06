<?php
/**
* BaseController   基础控制器
*/

namespace App\Controllers;

class BaseController 
{
	function __construct()
	{	
		// echo 'base<br>';
    }

	/**	
	 * 错误报告   errorReporting
	 */
	public static function errorReporting()
	{
		return views('error/index.html');
	}

}
