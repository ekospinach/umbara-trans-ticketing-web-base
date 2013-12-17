<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Controller
 *
 * @author bayu
 */
class Controller extends Core {
    //put your code here
    protected $mErrors = array();
    
    public function __construct() {
        
    }
    
    protected function isLogin() {
        return false;
    }
    
    protected function isAllowRead() {
        return false;
    }
    
    protected function isAllowCreate() {
        return false;
    }
    
    protected function isAllowUpdate() {
        return false;
    }
    
    protected function isAllowDelete() {
        return false;
    }
    
    protected function getParam($key = null) {
        if (is_null($key)) return null;
        if(isset($_GET[$key])) return $_GET[$key];
        if(isset($_POST[$key])) return $_POST[$key];
    }
}

?>
