<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of usergroupcontroller
 *
 * @author bayu
 */
class UserGroupController extends Controller{
    //put your code here
    protected $data;
    protected $UserGroupService;
    
    public function __construct() {
        parent::__construct();
        $this->loadDefaultValue();
        $this->loadDefaultClass();
    }
    
    public function index() {
        $this->data['Model'] = $this->UserGroupService->getList();
        $this->data['master'] = "shared/master";
        $this->data['view'] = "index";
        return $this->data;
    }
    
    public function create() {
        $data = null;
        
        if (!empty($_POST)) {
            $data = $this->bindData();
            if ($this->validate($data)) {
                $result = $this->UserGroupService->InsertUserGroup($data);
                if ($result) redirect (base_url()."/usergroup/");
                $this->data['errors'] = $this->UserGroupService->getErrors();
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
                $result = $this->UserGroupService->UpdateUserGroup($id, $data);
                if ($result) redirect (base_url()."/usergroup/");
                $this->data['errors'] = $this->UserGroupService->getErrors();
            } else {
                $this->data['errors'] = $this->mErrors;
            }
        } else {
            $data = $this->UserGroupService->getUserGroup($id);
        }
        
        $this->data['url'] = "edit?id=".$id;
        $this->createInputView($data);
        return $this->data;
    }
    
    public function delete() {
        $id = $_GET['id'];
       
        $result = $this->UserGroupService->DeleteUserGroup($id);
        redirect (base_url()."/usergroup/");
        
        return $this->data;
    }
    
    private function createInputView($data) {
        $this->data["Model"] = $data;
        $this->data['master'] = "shared/master";
        $this->data['view'] = "input";
    }
    
    private function validate($data) {
        if (is_null($data->getName()) || $data->getName() == "") $this->mErrors[] = "Name is required";
        if (count($this->mErrors) > 0) return false;
        else return true;
    }
    
    private function bindData() {
        $UserGroupModel = new UserGroupModel;
        $UserGroupModel->setName($this->getParam("name"));
        
        return $UserGroupModel;
    }
    
    private function loadDefaultValue() {
        $this->data["_MODULE_ID"] = "User Group";
        $this->data["_MODULE_DESCRIPTION"] = "";
    }
    
    private function loadDefaultClass() {
        $this->loadClass("UserGroupService", "service");
        $this->UserGroupService = new UserGroupService();
        $this->loadClass("UserGroupModel", "model");
    }
}

?>
