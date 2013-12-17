<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require_once 'ispecification.php';
require_once 'ispecificationparameter.php';
require_once 'basespecification.php';
require_once 'equalspecification.php';
require_once 'inspecification.php';
require_once 'compositespecification.php';
require_once 'andspecification.php';
require_once 'betweenfulldatespecification.php';
require_once 'betweenspecification.php';
require_once 'compositespecification.php';
require_once 'containspecification.php';
require_once 'endwithspecification.php';
require_once 'greaterthanorequalspecification.php';
require_once 'greaterthanspecification.php';
require_once 'inversespecification.php';
require_once 'lessthanorequalspecification.php';
require_once 'lessthanspecification.php';
require_once 'notequalspecification.php';
require_once 'orspecification.php';
require_once 'startwithspecification.php';
require_once 'isnullspecification.php';
require_once 'isnotnullspecification.php';

class Specification {
	
	public function equalSpecification($field, $value) {
		return new EqualSpecification($field, $value);
	}
	
	public function isnullSpecification($field) {
		return new IsNullSpecification($field);
	}
	
	public function isnotnullSpecification($field) {
		return new IsNotNullSpecification($field);
	}
	
	public function inSpecification($field, $value) {
		return new InSpecification($field, $value);
	}
	
	public function betweenFullDateSpecification($field, $value1, $value2) {
		return new BetweenFullDateSpecification($field, $value1, $value2);
	}
	
	public function betweenSpecification($field, $value1, $value2) {
		return new BetweenSpecification($field, $value1, $value2);
	}
	
	public function containSpecification($field, $value) {
		return new ContainSpecification($field, $value);
	}
	
	public function endWithSpecification($field, $value) {
		return new EndWithSpecification($field, $value);
	}
	
	public function greaterThanSpecification($field, $value) {
		return new GreaterThanSpecification($field, $value);
	}
	
	public function greaterThanOrEqualSpecification($field, $value) {
		return new GreaterThanOrEqualSpecification($field, $value);
	}
	
	public function lessThanSpecification($field, $value) {
		return new LessThanSpecification($field, $value);
	}
	
	public function lessThanOrEqualSpecification($field, $value) {
		return new LessThanOrEqualSpecification($field, $value);
	}
	
	public function notEqualSpecification($field, $value) {
		return new NotEqualSpecification($field, $value);
	}
	
	public function startWithSpecification($field, $value) {
		return new StartWithSpecification($field, $value);
	}
	
	public function inverseSpecification($specification) {
		return new InverseSpecification($specification);
	}
	
	public function andSpecification($criteria1, $criteria2) {
		return new AndSpecification($criteria1, $criteria2);
	}
	
	public function orSpecification($criteria1, $criteria2) {
		return new OrSpecification($criteria1, $criteria2);
	}
	
	/* static methods for generating SQL */
	public static function equalSpecificationSQL($field, $value) {
		if (is_bool($value)) {
			if ($value) {
				return "($field = 1)";
			} else {
				return "($field = 0)";
			}
		}
		
		/*if ((is_float($value)) || (is_int($value)) || (is_numeric($value))) {
			return "($field = $value)";
		}*/
		
		return "($field = '$value')";
	}
	
	public static function isnullSpecificationSQL($field) {
		return "$field is null";
	}
	
	public static function isnotnullSpecificationSQL($field) {
		return "$field is not null";
	}
	
	protected static function formatValueToSQL($value) {
		// boolean
		if (is_bool($value)) {
			if ($value) {
				return "1";
			} else {
				return "0";
			}
		}
		
		 // numeric
		/*if ((is_float($value)) || (is_int($value)) || (is_numeric($value))) {
			return "$value";
		}*/
		
		// string
		return "'$value'";
	}
	
	public static function inSpecificationSQL($field, $value) {
		if ($value == null) return "";
		if (is_array($value)) {
			$values = '';
			foreach($value as $row) {
				if ($values == '') {
					$values = Specification::formatValueToSQL($row);
				} else {
					$values = $values . ',' . Specification::formatValueToSQL($row);
				}
			}
			
			return "($field in ($values))";
		} else {
			return Specification::equalSpecificationSQL($field, $value);
		}
	}
	
	public static function betweenSQL($field_name, $from_date, $until_date) {
		return "(date($field_name) BETWEEN date('$from_date') AND date('$until_date'))";
	}
	
	public static function betweenFullDateSQL($field_name, $from_datetime, $untildatetime) {
		return "($field_name BETWEEN '$from_datetime' AND '$untildatetime')";
	}
	
	public static function containSQL($field_name, $value) {
		return "($field_name LIKE '%$value%')";
	}
	
	public static function endWithSQL($field_name, $value) {
		return "($field_name LIKE '%$value')";
	}
	
	public static function startWithSQL($field_name, $value) {
		return "($field_name LIKE '$value%')";
	}
	
	public static function notEqualSQL($field_name, $value) {
		if (is_bool($value)) {
			if ($value) {
				return "($field_name <> 1)";
			} else {
				return "($field_name <> 0)";
			}
		}
		
		/*if ((is_float($value)) || (is_int($value)) || (is_numeric($value))) {
			return "($field_name <> $value)";
		}*/
		
		return "($field_name <> '$value')";
	}
	
	public static function greaterThanSQL($field_name, $value) {
	if (!is_numeric($value)) {
			$value = "'".$value."'";
		}
		return "($field_name > $value)";
	}
	
	public static function greaterThanOrEqualSQL($field_name, $value) {
		if (!is_numeric($value)) {
			$value = "'".$value."'";
		}
		return "($field_name >= $value)";
	}
	
	public static function lessThanSQL($field_name, $value) {
		if (!is_numeric($value)) {
			$value = "'".$value."'";
		}
		return "($field_name < $value)";
	}
	
	public static function lessThanOrEqualSQL($field_name, $value) {
		if (!is_numeric($value)) {
			$value = "'".$value."'";
		}
		return "($field_name <= $value)";
	}
	
}
?>