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
    }

    public function insertProfile($data)
	{
		$this->db->insert('fee_profile',$data);
	}

}	

