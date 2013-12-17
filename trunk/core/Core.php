<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Core
 *
 * @author bayu
 */
class Core {
    
    public function __construct() {
        ;
    }
    
    protected function loadClass($file_name, $type = null, $path = null) {
        global $config;
        $config = $config;
        $class = null;
        $folder_name = null;
        $file_name = strtolower($file_name);
        $type = strtolower($type);
        
        if ($type == 'controller') $folder_name = $config["controller_folder"];
        else if ($type == 'dao') $folder_name = $config["dao_folder"];
        else if ($type == 'service') $folder_name = $config["service_folder"];
        else if ($type == 'model') $folder_name = $config["model_folder"];
        else if (!is_null($path)) $folder_name = $path;
        
        if (isset($file_name) && file_exists($folder_name."/".$file_name.".php")) {
            require_once $folder_name."/".$file_name.".php";
            //$class = new $file_name;
        }
        
        //return $class;
    }
}

?>
