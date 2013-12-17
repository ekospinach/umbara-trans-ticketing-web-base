<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class OrSpecification extends CompositeSpecification {
	
	function __construct($condition1, $condition2) {
		parent::__construct($condition1, $condition2);
	}
	
	function getSQL() {
		return '(' . $this->one->getSQL() . ' OR ' . $this->two->getSQL() . ')';
	}
}
?>