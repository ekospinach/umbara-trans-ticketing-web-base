<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of userinfoservice
 *
 * @author bayu
 */
class UserInfoService extends Service{
    
    protected $UserInfoService;
    public function __construct() {
        parent::__construct();
        $this->loadClass("UserInfoDao", "dao");
        $this->UserInfoDao = new UserInfoDao;
    }
    
    Public Function InsertUserInfo($data) {
        try {
            if (!$this->validateOnInsert($data)) return false;
            return $this->UserInfoDao->insert($data);
        } catch (Exception $exc) {
            $this->addError($exc->getMessage());
            throw new Exception($exc->getMessage());
        }
    }
    
    public function updateUserInfo($id, $data) {
        try {
            if (!$this->validateOnUpdate($data)) return false;
            return $this->UserInfoDao->update($id, $data);
        } catch (Exception $exc) {
            $this->addError($exc->getMessage());
            throw new Exception($exc->getMessage());
        }
    }
    
    public function deleteUserInfo($id) {
        try {
            return $this->UserInfoDao->delete($id);
        } catch (Exception $exc) {
            $this->addError($exc->getMessage());
            throw new Exception($exc->getMessage());
        }
    }


    public function getUserInfo($id) {
        try {
            return $this->UserInfoDao->getObject($id);
        } catch (Exception $exc) {
            $this->addError($exc->getMessage());
            throw new Exception($exc->getMessage());
        }
    }


    public function getList($filter = null, $orderby = null, $limit = null, $offset = null) {
        try {
            $criteria = null;
            if (!is_null($filter) && count($filter) > 0) $criteria = $this->createCriteria ($filter);
            return $this->UserInfoDao->getList($criteria, $orderby, $limit, $offset);
        } catch (Exception $exc) {
            throw new Exception($exc->getMessage());
        }
    }
    
    private function createCriteria($filter) {
        $this->loadClass("specification",null,"libraries");
        $specification = new Specification();
        $criteria = null;
        if (!is_null($filter["username"]) && $filter["username"] != "")  {
            $criteria = $specification->equalSpecification("username", $filter["username"]);
        }
        
        return $criteria;
    }


    private function validate($model) {
        if (!ctype_alnum($model->getUserName())) {
            $this->addError("User Name hanya boleh terdiri dari huruf dan angka");
        }
        
        return $this->getServiceState();
    }
    
    private function validateOnInsert($model) {
        $filter["username"] = $model->getUserName();
        $UserInfoModel = $this->getList($filter);
        
        if (!is_null($UserInfoModel) && count($UserInfoModel) > 0) {
            $this->addError("User Name Sudah Pernah Dimasukkan Silahkan memasukkan User Name yang lain");
        }
        
        $this->validate($model);
        
        return $this->getServiceState();
    }
    
    private function validateOnUpdate($model) {
        $this->validate($model);
        return $this->getServiceState();
    }
        
}

?>
