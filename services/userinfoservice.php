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
            return $this->UserInfoDao->insert($data);
        } catch (Exception $exc) {
            $this->addError($exc->getMessage());
            throw new Exception($exc->getMessage());
        }
    }
    
    public function updateUserInfo($id, $data) {
        try {
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
    }


    private function validate($model) {
        
        return $this->getServiceState();
    }
    
    private function validateOnInsert($model) {
        $this->validate($model);
        return $this->getServiceState();
    }
    
    private function validateOnUpdate($model) {
        $this->validate($model);
        return $this->getServiceState();
    }
        
}

?>
