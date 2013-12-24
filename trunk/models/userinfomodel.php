<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of loginmode
 *
 * @author bayu
 */
class UserInfoModel extends Core {
    private $mUserName;
    private $mPassword;
    private $mUserGroup;
    private $mIsLoaded;
    
    public function setUserName($value) {
        $this->mUserName = $value;
    }
    
    public function getUserName() {
        return $this->mUserName;
    }
    
    public function setPassword($value) {
        $this->mPassword = $value;
    }
    
    public function getPassword() {
        return $this->mPassword;
    }
    
    public function setUserGroup($value) {
        $this->mUserGroup = $value;
    }
    
    public function getUserGroup() {
        if (!is_null($this->mUserGroup) && !$this->mUserGroup->IsLoaded()) {
            $this->loadClass('UserGroupDao','dao');
            $UserGroupDao = new UserGroupDao();
            $this->mUserGroup = $UserGroupDao->getObject($this->mUserGroup->getId());
            if (!is_null($this->mUserGroup)) $this->mUserGroup->setIsLoaded(true);
        }
        return $this->mUserGroup;
    }
    
    public function setIsLoaded($value) {
        $this->mIsLoaded = $value;
    }
    
    public function getIsLoaded() {
        return $this->mIsLoaded;
    }
    
    public function toArray() {
        $data = array(
            'username' => $this->mUserName,
            'password' => $this->mPassword,
            'level' => (!is_null($this->mUserGroup) ? $this->mUserGroup->getId() : null)
        );
        
        return $data;
    }
}

?>
