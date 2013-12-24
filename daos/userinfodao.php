<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of userinfodao
 *
 * @author bayu
 */
class UserInfoDao extends Dao {
    
    public function __construct() {
        parent::__construct();
        $this->mTableName = "user_info";
    }
    
    public function insert($data) {
        return parent::insert($data);
    }
    
    public function update($id, $data) {
        $arr_id = array("username" => $id);
        return parent::update($arr_id, $data);
    }
    
    public function delete($id) {
        $arr_id = array("username" => $id);
        return parent::delete($arr_id);
    }
    
    public function getObject($id) {
        $arr_id = array("username" => $id);
        return parent::getObject($arr_id);
    }


    public function getList($criteria = null, $orderby = null, $limit = null, $offset = null) {
        return parent::getList($criteria, $orderby, $limit, $offset);
    }
    
    protected function toObject($rowset) {
        $this->loadClass("UserInfoModel","model");
        $UserInfoModel = new UserInfoModel();
        
        $UserInfoModel->setUserName($rowset->username);
        $UserInfoModel->setPassword($rowset->password);
        
        $this->loadClass("UserGroupModel","model");
        
        $UserGroupModel = new UserGroupModel();
        $UserGroupModel->setId($rowset->level);
        $UserGroupModel->setIsLoaded(false);
        
        $UserInfoModel->setUserGroup($UserGroupModel);
        
        return $UserInfoModel;
    }
    
    
}

?>
