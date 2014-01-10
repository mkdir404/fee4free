<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class InvoiceDAO extends MY_Model {

	/**	 
	 * Alta de usuarios o de empresas en su defecto
	 * @Ricardo Alba
	 * 5 Enero 2014
	 */

	function __construct()
    {
        parent::__construct();    
    }

    public function insertInvoice($data)
	{
		$this->db->insert('fee_invoices',$data);
	}

}	

