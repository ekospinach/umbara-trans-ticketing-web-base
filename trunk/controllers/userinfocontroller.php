<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of userinfocontroller
 *
 * @author bayu
 */
class UserInfoController extends Controller{
    //put your code here
    protected $data;
    protected $UserInfoService;
    
    public function __construct() {
        parent::__construct();
        $this->loadDefaultValue();
        $this->loadDefaultClass();
    }
    
    public function index() {
        $this->data['Model'] = $this->UserInfoService->getList();
        $this->data['master'] = "shared/master";
        $this->data['view'] = "index";
        return $this->data;
    }
    
    public function create() {
        $data = null;
        
        if (!empty($_POST)) {
            $data = $this->bindData();
            if ($this->validate($data)) {
                $result = $this->UserInfoService->InsertUserInfo($data);
                if ($result) redirect (base_url()."/userinfo/");
                $this->data['errors'] = $this->UserInfoService->getErrors();
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
                $result = $this->UserInfoService->UpdateUserInfo($id, $data);
                if ($result) redirect (base_url()."/userinfo/");
                $this->data['errors'] = $this->UserInfoService->getErrors();
            } else {
                $this->data['errors'] = $this->mErrors;
            }
        } else {
            $data = $this->UserInfoService->getUserInfo($id);
        }
        
        $this->data['method'] = 'edit';
        $this->data['url'] = "edit?id=".$id;
        $this->createInputView($data);
        return $this->data;
    }
    
    public function delete() {
        $id = $_GET['id'];
       
        $result = $this->UserInfoService->DeleteUserInfo($id);
        redirect (base_url()."/userinfo/");
        
        return $this->data;
    }
    
    private function loadComboUserGroup() {
        $this->loadClass("UserGroupService","service");
        $UserGroupService = new UserGroupService();
        $UserGroupList = $UserGroupService->getList();
        $arr_combo = array();
        if (!is_null($UserGroupList) && count($UserGroupList) > 0) {
            foreach ($UserGroupList as $item) {
                $arr_combo[$item->getId()] = $item->getName();
            }
        }
        
        $this->data['UserGroupList'] = $arr_combo;
    }
    
    private function createInputView($data) {
        $this->loadComboUserGroup();
        
        $this->data["Model"] = $data;
        $this->data['master'] = "shared/master";
        $this->data['view'] = "input";
    }
    
    private function validate($data) {
        if (is_null($data->getUserName()) || $data->getUserName() == "") $this->mErrors[] = "User Name is required";
        if (is_null($data->getPassword()) || $data->getPassword() == "") $this->mErrors[] = "Password is required";
        if (is_null($data->getUserGroup()) || $data->getUserGroup() == "") $this->mErrors[] = "Level is required";
        if (count($this->mErrors) > 0) return false;
        else return true;
    }
    
    private function bindData() {
        $UserInfoModel = new UserInfoModel;
        $UserInfoModel->setUserName($this->getParam("username"));
        $UserInfoModel->setPassword($this->getParam("password"));
        $this->loadClass("UserGroupModel","model");
        $UserGroupModel = new UserGroupModel();
        $UserGroupModel->setId($this->getParam("level"));
        $UserInfoModel->setUserGroup($UserGroupModel);
        
        return $UserInfoModel;
    }
    
    private function loadDefaultValue() {
        $this->data["_MODULE_ID"] = "User Info";
        $this->data["_MODULE_DESCRIPTION"] = "";
    }
    
    private function loadDefaultClass() {
        $this->loadClass("UserInfoService", "service");
        $this->UserInfoService = new UserInfoService();
        $this->loadClass("UserInfoModel", "model");
    }
}

?>
