<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class IsNotNullSpecification extends BaseSpecification {
	
	function __construct($field_name) {
		parent::__construct($field_name, null);
	}
	
	function getSQL() {
		return Specification::isnotnullSpecificationSQL($this->field_name);
	}
}

?>