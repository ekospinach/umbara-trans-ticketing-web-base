<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Service
 *
 * @author bayu
 */
class Service extends Core {
    private $mError = array();
    
    public function __construct() {
        parent::__construct();
    }
    
    public function addError($ErrorMessage) {
        $this->mError[] = $ErrorMessage;
    }
    
    public function getErrors() {
        return $this->mError;
    }
    
    public function getServiceState() {
        if (is_null($this->mError) || count($this->mError) <= 0) return true;
        return false;
    }
}

?>
