<?php

if(!function_exists('views'))
{
    function views($path,$result)
    {   
        $loader = new \Twig\Loader\FilesystemLoader('../app/views/');

		$twig = new \Twig\Environment($loader, [
			//  'cache' => '../storage/framework/views',
		]);
        echo $twig->render($path, ['navigation' => $result]);
    }
}

