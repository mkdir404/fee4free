<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class CustomersDAO extends MY_Model {

	/**	 
	 * Alta de usuarios o de empresas en su defecto
	 * @Ricardo Alba
	 * 5 Enero 2014
	 */

	function __construct()
    {
        parent::__construct();
    }

    public function insertCustomer($data)
	{
		$this->db->insert('fee_customer',$data);
	}
}	

