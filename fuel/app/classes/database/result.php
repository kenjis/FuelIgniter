<?php
/**
* FuelIgniter
*
* @author     Kenji Suzuki https://github.com/kenjis
* @copyright  2012 Kenji Suzuki
* @license    MIT License http://opensource.org/licenses/MIT
* @link       https://github.com/kenjis/FuelIgniter
*/

abstract class Database_Result extends Fuel\Core\Database_Result
{
	public function result_array($key = null, $value = null)
	{
		return $this->as_array($key, $value);
	}
	
	public function row_array($n = 0)
	{
		$result = $this->as_array();
		return $result[$n];
	}
}
