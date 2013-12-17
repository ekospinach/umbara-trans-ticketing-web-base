<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class EqualSpecification extends BaseSpecification {
	
	function __construct($field_name, $field_value) {
		parent::__construct($field_name, $field_value);
	}
	
	function getSQL() {
		return Specification::equalSpecificationSQL($this->field_name, $this->field_value);
	}
}

?>