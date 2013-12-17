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
    
    public function insert($data) {
        return parent::insert($data);
    }
    
    public function update($id, $data) {
        $arr_id = array("id" => $id);
        return parent::update($arr_id, $data);
    }
    
    public function delete($id) {
        $arr_id = array("id" => $id);
        return parent::delete($arr_id);
    }
    
    public function getObject($id) {
        $arr_id = array("id" => $id);
        return parent::getObject($arr_id);
    }


    public function getList($criteria = null, $orderby = null, $limit = null, $offset = null) {
        return parent::getList($criteria, $orderby, $limit, $offset);
    }
    
    protected function toObject($rowset) {
        $FunctionInfoModel = new FunctionInfoModel;
        $FunctionInfoModel->setId($rowset->id);
        $FunctionInfoModel->setName($rowset->name);
        $FunctionInfoModel->setSequence($rowset->sequence);
        $FunctionInfoModel->setUrl($rowset->url);
        $FunctionInfoModel->setModule($rowset->module);
        $FunctionInfoModel->setIsShow($rowset->is_show);
        $FunctionInfoModel->setIsEnabled($rowset->is_enabled);
        $FunctionInfoModel->setIconModule($rowset->icon_module);
        
        return $FunctionInfoModel;
    }
    
    
}

?>
