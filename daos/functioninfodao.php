<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of functioninfodao
 *
 * @author bayu
 */
class FunctionInfoDao extends Dao {
    
    public function __construct() {
        parent::__construct();
        $this->mTableName = "function_info";
    }
    
    function getList($criteria = null, $orderby = null, $limit = null, $offset = null) {
        parent::getList($criteria, $orderby, $limit, $offset);
    }
    
    
}

?>
