<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
if ( ! function_exists('base_url'))
{
    function base_url($url = null) {
        global $config;
        if (is_null($url)) return $config["base_url"];
        return $config["base_url"]."/".$url;
    }
}

if ( ! function_exists('redirect'))
{
	function redirect($uri = '', $method = 'location', $http_response_code = 302)
	{
		if ( ! preg_match('#^https?://#i', $uri))
		{
			$uri = site_url($uri);
		}

		switch($method)
		{
			case 'refresh'	: 
                            header("Refresh:0;url=".$uri);
                            break;
			default : 
                            header("Location: ".$uri, TRUE, $http_response_code);
                            break;
		}
		exit;
	}
}
?>
