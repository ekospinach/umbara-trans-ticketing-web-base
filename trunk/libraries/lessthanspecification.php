<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class LessThanSpecification extends BaseSpecification {
	
	function __construct($field_name, $field_value) {
		parent::__construct($field_name, $field_value);
	}
	
	function getSQL() {
		return Specification::lessThanSQL($this->field_name, $this->field_value);
	}
}

?>