<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of usergroupservice
 *
 * @author bayu
 */
class UserGroupService extends Service{
    
    protected $UserGroupService;
    public function __construct() {
        parent::__construct();
        $this->loadClass("UserGroupDao", "dao");
        $this->UserGroupDao = new UserGroupDao;
    }
    
    Public Function InsertUserGroup($data) {
        try {
            return $this->UserGroupDao->insert($data);
        } catch (Exception $exc) {
            $this->addError($exc->getMessage());
            throw new Exception($exc->getMessage());
        }
    }
    
    public function updateUserGroup($id, $data) {
        try {
            return $this->UserGroupDao->update($id, $data);
        } catch (Exception $exc) {
            $this->addError($exc->getMessage());
            throw new Exception($exc->getMessage());
        }
    }
    
    public function deleteUserGroup($id) {
        try {
            return $this->UserGroupDao->delete($id);
        } catch (Exception $exc) {
            $this->addError($exc->getMessage());
            throw new Exception($exc->getMessage());
        }
    }


    public function getUserGroup($id) {
        try {
            return $this->UserGroupDao->getObject($id);
        } catch (Exception $exc) {
            $this->addError($exc->getMessage());
            throw new Exception($exc->getMessage());
        }
    }


    public function getList($filter = null, $orderby = null, $limit = null, $offset = null) {
        try {
            $criteria = null;
            if (!is_null($filter) && count($filter) > 0) $criteria = $this->createCriteria ($filter);
            return $this->UserGroupDao->getList($criteria, $orderby, $limit, $offset);
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
