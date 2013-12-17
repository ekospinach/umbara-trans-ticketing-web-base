<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

interface ISpecificationParameter {
	function getParameterName();
	function getParameterValue();
}
?>