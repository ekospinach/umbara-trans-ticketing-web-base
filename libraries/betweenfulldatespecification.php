<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class BetweenFullDateSpecification implements ISpecification {
	
	private $field_name;
	private $value1;
	private $value2;
	
	function __construct($field_name, $value1, $value2) {
		$this->field_name = $field_name;
		$this->value1 = $value1;
		$this->value2 = $value2;
	}
	
	function getSQL() {
		return Specification::betweenFullDateSQL($this->field_name, $this->value1, $this->value2);
	}
}

?>