<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class AltaDAO extends MY_Model {

	/**	 
	 * Alta de usuarios o de empresas en su defecto
	 * @Ricardo Alba
	 * 5 Enero 2014
	 */

	public function insertValues($data , $table)
	{
		$this->db->insert($table,$data);
	}	
}	

