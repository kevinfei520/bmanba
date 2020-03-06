<?php
/*
|--------------------------------------------------------------------------
| Black Mamba  Framework Helper
|--------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader for
| our application. We just need to utilize it! We'll simply require it
| into the script here so that we don't have to worry about manual
| loading any of our classes later on. It feels great to relax.
|
*/


/**
 * 模版视图
 * @param array $path
 * @param string $result
 */
if(!function_exists('views'))
{
    function views($path,$result='')
    {   
        $loader = new \Twig\Loader\FilesystemLoader('../app/views/');

		$twig = new \Twig\Environment($loader, [
			//  'cache' => '../storage/framework/views',
		]);
        echo $twig->render($path, ['navigation' => $result]);
    }
}



/**
 * 成功响应
 * @param array $data
 * @param string $message
 * @param int $code
 * @param array $headers
 */
if (!function_exists('sendSuccess')) {
    function sendSuccess($message = 'success', $data = [], $count = 0, $code = 200)
    {   
        // get_instance()->output->set_header(getHeaders()); //允许跨域
        $responseData['code']    = $code;
        $responseData['count']   = $count;
        $responseData['message'] = (string) $message;
        if (!empty($data)) {
            $responseData['data'] = $data;
        }
        exit(json_encode($responseData));
    }
}

/**
 * 失败响应
 * @param int $error
 * @param string $message
 * @param int    $code
 * @param array $data
 * @param array $headers
 */
if (!function_exists('sendError')) {
    function sendError($message = '未知错误', $data = [], $count = 0, $code = 400)
    {   
        // get_instance()->output->set_header(getHeaders()); //允许跨域
        $responseData['code']    = $code;
        $responseData['count']   = $count;
        $responseData['message'] = (string) $message;
        if (!empty($data)) {
            $responseData['data'] = $data;
        }
        exit(json_encode($responseData));
    }
}