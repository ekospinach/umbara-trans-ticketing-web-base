<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of functioninfomodel
 *
 * @author bayu
 */
class FunctionInfoModel {
    private $mId;
    private $mName;
    private $mSequence;
    private $mUrl;
    private $mModule;
    private $mIsShow;
    private $mIsEnabled;
    private $mIconModule;
    
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
    
    public function setSequence($value) {
        $this->mSequence = $value;
    }
    
    public function getSequence() {
        return $this->mSequence;
    }
    
    public function setUrl($value) {
        $this->mUrl = $value;
    }
    
    public function getUrl() {
        return $this->mUrl;
    }
    
    public function setModule($value) {
        $this->mModule = $value;
    }
    
    public function getModule() {
        return $this->mModule;
    }
    
    public function setIsShow($value) {
        $this->mIsShow = $value;
    }
    
    public function IsShow() {
        return $this->mIsShow;
    }
    
    public function setIsEnabled($value) {
        $this->mIsEnabled = $value;
    }
    
    public function IsEnabled() {
        return $this->mIsEnabled;
    }
    
    public function setIconModule($value) {
        $this->mIconModule = $value;
    }
    
    public function getIconModule() {
        return $this->mIconModule;
    }
    
    public function toArray() {
        $data = array(
            "id" => $this->mId,
            "name" => $this->mName,
            "sequence" => $this->mSequence,
            "url" => $this->mUrl,
            "module" => $this->mModule,
            "is_show" => $this->mIsShow,
            "is_enabled" => $this->mIsEnabled,
            "icon_module" => $this->mIconModule
        );
        
        return $data;
    }
}

?>
