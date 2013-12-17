<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of functioninfoservice
 *
 * @author bayu
 */
class FunctionInfoService extends Service{
    
    protected $FunctionInfoService;
    public function __construct() {
        parent::__construct();
        $this->loadClass("FunctionInfoDao", "dao");
        $this->FunctionInfoDao = new FunctionInfoDao;
        
    }
    
    Public Function InsertFunctionInfo($data) {
        try {
            return $this->FunctionInfoDao->insert($data);
        } catch (Exception $exc) {
            $this->addError($exc->getMessage());
            throw new Exception($exc->getMessage());
        }
    }
    
    public function updateFunctionInfo($id, $data) {
        try {
            return $this->FunctionInfoDao->update($id, $data);
        } catch (Exception $exc) {
            $this->addError($exc->getMessage());
            throw new Exception($exc->getMessage());
        }
    }
    
    public function deleteFunctionInfo($id) {
        try {
            return $this->FunctionInfoDao->delete($id);
        } catch (Exception $exc) {
            $this->addError($exc->getMessage());
            throw new Exception($exc->getMessage());
        }
    }


    public function getFunctionInfo($id) {
        try {
            return $this->FunctionInfoDao->getObject($id);
        } catch (Exception $exc) {
            $this->addError($exc->getMessage());
            throw new Exception($exc->getMessage());
        }
    }


    public function getList($filter = null, $orderby = null, $limit = null, $offset = null) {
        try {
            $criteria = null;
            if (!is_null($filter) && count($filter) > 0) $criteria = $this->createCriteria ($filter);
            return $this->FunctionInfoDao->getList($criteria, $orderby, $limit, $offset);
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
