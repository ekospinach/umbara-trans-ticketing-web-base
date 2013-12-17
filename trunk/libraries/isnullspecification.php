<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class IsNullSpecification extends BaseSpecification {
	
	function __construct($field_name) {
		parent::__construct($field_name, null);
	}
	
	function getSQL() {
		return Specification::isnullSpecificationSQL($this->field_name);
	}
}

?>