<?php
/**
* FuelIgniter
*
* @author     Kenji Suzuki https://github.com/kenjis
* @copyright  2012 Kenji Suzuki
* @license    MIT License http://opensource.org/licenses/MIT
* @link       https://github.com/kenjis/FuelIgniter
*/

/**
 * CodeIgniter functions
 */

function show_404()
{
	throw new HttpNotFoundException;
}

function get_microtime($e = 7)
{
	list($u, $s) = explode(' ', microtime());
	return bcadd($u, $s, $e);
}

function h($val)
{
	return e($val);
}

// form helper
function validation_errors()
{
	$val = Validation::instance();
	return $val->show_errors();
}

function set_value($field, $default = '')
{
	$val = Validation::instance();
	return e($val->input($field, $default));
}

function form_open($action = '', $attributes = '', $hidden = array())
{
	if ($attributes === '')
	{
		$attributes = array();
	}
	
	array_unshift($attributes, array('action' => $action));
	return Form::open($attributes, $hidden);
}

function form_close($extra = '')
{
	if ($extra !== '')
	{
		exit(__METHOD__ . ' on line ' . __LINE__ . ': Not yet implemented!');
	}
	
	return Form::close();
}

// url helper
function url_title($str, $separator = 'dash', $lowercase = false)
{
	$sep = $separator === 'dash' ? '-' : '_';
	
	return Inflector::friendly_title($str, $sep, $lowercase);
}
