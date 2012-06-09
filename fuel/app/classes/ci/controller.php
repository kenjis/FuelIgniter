<?php
/**
* FuelIgniter
*
* @author     Kenji Suzuki https://github.com/kenjis
* @copyright  2012 Kenji Suzuki
* @license    MIT License http://opensource.org/licenses/MIT
* @link       https://github.com/kenjis/FuelIgniter
*/

class CI_Controller extends Controller
{
	private static $instance;
	
	public function __construct()
	{
		self::$instance = $this;
		$this->load = new CI_Loader();
		$this->input = new Input();
	}
	
	public function after($response)
	{
		return '';
	}
	
	public static function get_instance()
	{
		return self::$instance;
	}
}


class CI_Loader
{
	public function view($view, $vars = array(), $return = false)
	{
		if ( ! $return)
		{
			echo View::forge($view, $vars)->render();
		}
		else
		{
			return View::forge($view, $vars)->render();
		}
	}
	
	public function model($model, $name = '', $db_conn = false)
	{
		$model_name = basename($model);
		
		if ($name === '')
		{
			$name = $model_name;
		}
		
		$CI = CI_Controller::get_instance();
		
		if (isset($CI->$name))
		{
			return;
		}
		
		require APPPATH.'classes/model/'.$model.'.php';
		$CI->$name = new $model_name();
		
		if ($db_conn)
		{
			exit(__METHOD__ . ' on line ' . __LINE__ . ': Not yet implemented!');
		}
	}
	
	public function database()
	{
		$CI = CI_Controller::get_instance();
		$CI->db = new CI_DB();
	}
	
	public function helper($helpers = array())
	{
		
	}

	public function library($library = '', $params = null, $object_name = null)
	{
		$CI = CI_Controller::get_instance();
		
		if ($library === 'form_validation')
		{
			$CI->form_validation = Validation::forge();
			return;
		}
	}
}
