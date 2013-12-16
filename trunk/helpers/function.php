<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
function base_url($url = null) {
    global $config;
    if (is_null($url)) return $config["base_url"];
    return $config["base_url"]."/".$url;
}

function redirect($url) {
    
}
?>
