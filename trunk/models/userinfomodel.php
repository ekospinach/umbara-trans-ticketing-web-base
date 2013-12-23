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
class UserInfoModel {
    private $mUserName;
    private $mPassword;
    private $mUserGroupCode;
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
    
    public function setUserGroupCode($value) {
        $this->mUserGroupCode = $value;
    }
    
    public function getUserGroupCode() {
        return $this->mUserGroupCode;
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
            'level' => $this->mUserGroupCode
        );
        
        return $data;
    }
}

?>
