<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Model extends CI_Model {

	/**	 
	 * Alta de usuarios o de empresas en su defecto
	 * @Ricardo Alba
	 * 5 Enero 2014
	 */

	 function __construct()
    {
        parent::__construct();
    }

    public function getData()
	{
		$query = $this->db->get($this->defaultTable);
		return $query->result_array();

		//print_r( $query->result_array() );
	}

	public function insertData($data)
	{
		
		return $this->db->insert($this->defaultTable, $data); 

	}

	public function UpdateData($data , $where = null)
	{
		if($where!==null){

			$this->db->where($where);
		}

		return $this->db->update($this->defaultTable, $data); 
	}

	public function DeleteData($data)
	{
		if($where!==null){

			$this->db->where($where);
		}

		return $this->db->delete($this->defaultTable, $data); 
	}
}