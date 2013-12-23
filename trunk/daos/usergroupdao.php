<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of usergroupdao
 *
 * @author bayu
 */
class UserGroupDao extends Dao {
    
    public function __construct() {
        parent::__construct();
        $this->mTableName = "user_group";
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
        $this->loadClass("UserGroupModel","model");
        $UserGroupModel = new UserGroupModel();
        
        $UserGroupModel->setId($rowset->id);
        $UserGroupModel->setName($rowset->name);
        
        return $UserGroupModel;
    }
    
    
}

?>
