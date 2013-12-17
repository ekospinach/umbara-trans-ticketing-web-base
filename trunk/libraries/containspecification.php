<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ContainSpecification extends BaseSpecification {
	
	function __construct($field_name, $field_value) {
		parent::__construct($field_name, $field_value);
	}
	
	function getSQL() {
		return Specification::containSQL($this->field_name, $this->field_value);
	}
}

?>