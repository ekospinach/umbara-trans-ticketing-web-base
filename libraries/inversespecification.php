<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class InverseSpecification implements ISpecification {
	
	private $toBeWrapped;
	
	function __construct($specification) {
		$this->toBeWrapped = $specification;
	}
	
	function getSQL() {
		return "(NOT " . $this->toBeWrapped->getSQL() . ")";
	}
}

?>