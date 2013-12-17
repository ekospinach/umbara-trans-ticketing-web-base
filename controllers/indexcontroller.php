<?php

Class IndexController extends Controller {
    protected $data = array();
    protected $IndexService = null;
    public function __construct() {
        parent::__construct();
        $this->loadDefaultClass();
    }
    
    public function index() {
        $this->data['master'] = "shared/master";
        $this->data['view'] = 'index';
        $this->IndexService->getList();
        return $this->data;
    }
    
    public function indexJson() {
        
    }

    public function create() {
        $this->createInputView();
        return $this->data;
    }
    
    public function edit() {
        $this->createInputView();
        return $this->data;
    }
    
    public function detail() {
        
        return $this->data;
    }
    
    public function delete() {
        
        return $this->data;
    }
    
    private function createInputView() {
        $this->data['master'] = "shared/master";
        $this->data['view'] = "input";
    }
    
    private function generateFilter() {
        
    }
    
    private function loadDefaultClass() {
        $this->loadClass("IndexService", "service");
        $this->IndexService = new IndexService();
        $this->loadClass("IndexModel", "model");
    }
}
?>
