<?php
/**
* FuelIgniter
*
* @author     Kenji Suzuki https://github.com/kenjis
* @copyright  2012 Kenji Suzuki
* @license    MIT License http://opensource.org/licenses/MIT
* @link       https://github.com/kenjis/FuelIgniter
*/

class Validation extends Fuel\Core\Validation
{
	public function set_rules($field, $label = '', $rules = '')
	{
		return $this->add_field($field, $label, $rules);
	}
}
