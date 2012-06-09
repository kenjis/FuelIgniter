<?php
/**
* FuelIgniter
*
* @author     Kenji Suzuki https://github.com/kenjis
* @copyright  2012 Kenji Suzuki
* @license    MIT License http://opensource.org/licenses/MIT
* @link       https://github.com/kenjis/FuelIgniter
*/

class CI_DB
{
	private $db = null;
	
	public function get($table = '', $limit = null, $offset = null)
	{
		if (is_null($this->db))
		{
			$this->db = DB::select();
		}
		
		return $this->db->from($table)->execute();
	}
	
	public function insert($table = '', $set = null)
	{
		if (is_null($this->db))
		{
			$this->db = DB::insert($table);
		}
		
		return $this->db->set($set)->execute();
	}
	
	public function get_where($table = '', $where = null, $limit = null, $offset = null)
	{
		foreach ($where as $column => $val)
		{
			$this->where($column, '=', $val);
		}
		return $this->db->from($table)->execute();
	}
	
	public function where($column, $op = null, $value = null)
	{
		if (is_null($this->db))
		{
			$this->db = DB::select();
		}
		
		$this->db->where($column, $op, $value);
	}
}
