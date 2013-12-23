<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of usergroupmodel
 *
 * @author bayu
 */
class UserGroupModel {
    private $mId;
    private $mName;
    private $mIsLoaded;
    
    public function setId($value) {
        $this->mId = $value;
    }
    
    public function getId() {
        return $this->mId;
    }
    
    public function setName($value) {
        $this->mName = $value;
    }
    
    public function getName() {
        return $this->mName;
    }
    
    public function setIsLoaded($value) {
        $this->mIsLoaded = $value;
    }
    
    public function getIsLoaded() {
        return $this->mIsLoaded;
    }
    
    public function toArray() {
        $data = array(
            'name' => $this->mName,
        );
        
        return $data;
    }
}

?>
