<?php
    $class = null;
    $data = null;
    if (isset($file) && isset($method)) {
        $class_name = $file."Controller";
        $class = new $class_name;
        $data = $class->$method();
    }
?>
