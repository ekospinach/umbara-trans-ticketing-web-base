<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

abstract class BaseSpecification implements ISpecification {
	
	protected $field_name;
	protected $field_value;
	
	function __construct($property_name, $property_value) {
		$this->field_name = $property_name;
		$this->field_value = $property_value;
	}
	
	public abstract function getSQL();
}
?>