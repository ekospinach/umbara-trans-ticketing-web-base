<?php
    require_once "core/config.php";
    require_once "core/Core.php";
    require_once "helpers/function.php";
    require_once "helpers/database.php";
    
    $file = $config["default_index"];
    if (!isset($_GET["file"]) && $_GET["file"] != "") $file = $_GET["file"];
    $method = "index";
    if (isset($_GET["method"]) && $_GET["method"] != "") $method = $_GET["method"];
    
    $error = null;
    
    if (file_exists("core/Controller.php")) {
        require_once "core/Controller.php";
    } else {
        $error .= "<p class='error'>Core controller is not found</p>";
    }
    
    if (file_exists("core/Service.php")) {
        require_once "core/Service.php";
    } else {
        $error .= "<p class='error'>Core service is not found</p>";
    }
    
    if (file_exists("core/Dao.php")) {
        require_once "core/Dao.php";
    } else {
        $error .= "<p class='error'>Core dao is not found</p>";
    }
    
    if (file_exists($config["model_folder"]."/".$file."model.php")) {
        require_once $config["model_folder"]."/".$file."model.php";
    } else {
        $error .= "<p class='error'>Model for ".$file." is not found</p>";
    }
    
    if (file_exists($config["dao_folder"]."/".$file."dao.php")) {
        require_once $config["dao_folder"]."/".$file."dao.php";
    } else {
        $error .= "<p class='error'>Dao for ".$file." is not found</p>";
    }
    
    if (file_exists($config["service_folder"]."/".$file."service.php")) {
        require_once $config["service_folder"]."/".$file."service.php";
    } else {
        $error .= "<p class='error'>Service for ".$file." is not found</p>";
    }
    
    if (file_exists($config["controller_folder"]."/".$file."controller.php")) {
        require_once $config["controller_folder"]."/".$file."controller.php";
    } else {
        $error .= "<p class='error'>Controller file for ".$file." is not found</p>";
    }
    
    require_once "helpers/render_view.php";
    if (!file_exists($config["view_folder"]."/".$file."/".$data['view'].".php")) {
        $error .= "<p class='error'>View file for ".$config["view_folder"]."/".$file."/".$data['view'].".php"." is not found</p>";
    }
    
    if (!is_null($error)) {
        require_once 'helpers/error.php';
    } else {
        if (file_exists($config["view_folder"]."/".$file."/".$data['view'].".php")) {
            $content = null;
            if (isset($data["master"])) {
                $content = $config["view_folder"]."/".$file."/".$data['view'].".php";
                require_once $config["view_folder"]."/".$data['master'].".php";
            } else {
                require_once $config["view_folder"]."/".$file."/".$data['view'].".php";
            }
        }
    }
    
?>