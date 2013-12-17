<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

abstract class CompositeSpecification implements ISpecification {
	protected $one;
	protected $two;
	
	function __construct($condition1, $condition2) {
		$this->one = $condition1;
		$this->two = $condition2;
	}
	
	public abstract function getSQL();
}
?>