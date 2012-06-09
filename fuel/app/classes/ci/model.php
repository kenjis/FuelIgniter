<?php
/**
* FuelIgniter
*
* @author     Kenji Suzuki https://github.com/kenjis
* @copyright  2012 Kenji Suzuki
* @license    MIT License http://opensource.org/licenses/MIT
* @link       https://github.com/kenjis/FuelIgniter
*/

class CI_Model extends Model
{
	public function __get($key)
	{
		$CI = CI_Controller::get_instance();
		return $CI->$key;
	}
}
