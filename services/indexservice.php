<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of IndexService
 *
 * @author harry
 */
class IndexService extends Service {
    public function __construct() {
        parent::__construct();
    }
    
    public function getList() {
        $this->loadClass("FunctionInfoDao", "Dao");
        $FunctionDao = new FunctionInfoDao();
        return $FunctionDao->getList();
    }
}

?>
