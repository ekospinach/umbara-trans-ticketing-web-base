<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class GreaterThanSpecification extends BaseSpecification {
	
	function __construct($field_name, $field_value) {
		parent::__construct($field_name, $field_value);
	}
	
	function getSQL() {
		return Specification::greaterThanSQL($this->field_name, $this->field_value);
	}
}

?>