<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class AndSpecification extends CompositeSpecification {
	
	function __construct($condition1, $condition2) {
		parent::__construct($condition1, $condition2);
	}
	
	function getSQL() {
		return '(' . $this->one->getSQL() . ' AND ' . $this->two->getSQL() . ')';
	}
}
?>