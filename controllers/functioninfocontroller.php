<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of functioninfocontroller
 *
 * @author bayu
 */
class FunctionInfoController extends Controller{
    //put your code here
    protected $data;
    protected $FunctionInfoService;
    
    public function __construct() {
        parent::__construct();
        $this->loadDefaultValue();
        $this->loadDefaultClass();
    }
    
    public function index() {
        $this->data['Model'] = $this->FunctionInfoService->getList();
        $this->data['master'] = "shared/master";
        $this->data['view'] = "index";
        return $this->data;
    }
    
    public function create() {
        $data = null;
        
        if (!empty($_POST)) {
            $data = $this->bindData();
            if ($this->validate($data)) {
                $result = $this->FunctionInfoService->InsertFunctionInfo($data);
                if ($result) redirect (base_url()."/functioninfo/");
                $this->data['errors'] = $this->FunctionInfoService->getErrors();
            } else {
                $this->data['errors'] = $this->mErrors;
            }
        }
        $this->data['url'] = "create";
        $this->createInputView($data);
        return $this->data;
    }
    
    public function edit() {
        $id = $_GET['id'];
       
        if (!empty($_POST)) {
            $data = $this->bindData();
            if ($this->validate($data)) {
                $result = $this->FunctionInfoService->UpdateFunctionInfo($id, $data);
                if ($result) redirect (base_url()."/functioninfo/");
                $this->data['errors'] = $this->FunctionInfoService->getErrors();
            } else {
                $this->data['errors'] = $this->mErrors;
            }
        } else {
            $data = $this->FunctionInfoService->getFunctionInfo($id);
        }
        
        $this->data['url'] = "edit?id=".$id;
        $this->createInputView($data);
        return $this->data;
    }
    
    public function delete() {
        $id = $_GET['id'];
       
        $result = $this->FunctionInfoService->DeleteFunctionInfo($id);
        redirect (base_url()."/functioninfo/");
        
        return $this->data;
    }
    
    private function createInputView($data) {
        $this->data["Model"] = $data;
        $this->data['master'] = "shared/master";
        $this->data['view'] = "input";
    }
    
    private function validate($data) {
        if (is_null($data->getId()) || $data->getId() == "") $this->mErrors[] = "ID is required";
        if (count($this->mErrors) > 0) return false;
        else return true;
    }
    
    private function bindData() {
        $FunctionInfoModel = new FunctionInfoModel;
        $FunctionInfoModel->setId($this->getParam("id"));
        $FunctionInfoModel->setName($this->getParam("name"));
        $FunctionInfoModel->setSequence($this->getParam("sequence"));
        $FunctionInfoModel->setUrl($this->getParam("url"));
        $FunctionInfoModel->setModule($this->getParam("module"));
        $FunctionInfoModel->setIsShow($this->getParam("is_show"));
        $FunctionInfoModel->setIsEnabled($this->getParam("is_enabled"));
        $FunctionInfoModel->setIconModule($this->getParam("module_icon"));
        
        return $FunctionInfoModel;
    }
    
    private function loadDefaultValue() {
        $this->data["_MODULE_ID"] = "Function Info";
        $this->data["_MODULE_DESCRIPTION"] = "";
    }
    
    private function loadDefaultClass() {
        $this->loadClass("FunctionInfoService", "service");
        $this->FunctionInfoService = new FunctionInfoService();
        $this->loadClass("FunctionInfoModel", "model");
    }
}

?>
