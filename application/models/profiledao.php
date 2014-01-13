<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ProfileDAO extends MY_Model {

	/**	 
	 * Alta de usuarios o de empresas en su defecto
	 * @Ricardo Alba
	 * 5 Enero 2014
	 */

	function __construct()
    {
        parent::__construct();

        /*Global Variable*/
		
		$this->defaultTable = 'fee_profile';         
    
    }

    public function insertProfile($data)
	{
		$this->db->insert($this->defaultTable,$data);
	}

	public function updateProfile($data,$id)
	{
		$this->db->where('id', $id);
		$this->db->update($this->defaultTable , $data);
	}
	
}	

