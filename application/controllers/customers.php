<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Customers extends MY_Controller {

	/**	 
	 * Alta de usuarios o de empresas en su defecto
	 * @Ricardo Alba
	 * 5 Enero 2014
	 */

	function __construct()
    {
        parent::__construct();
        $this->load->model('customersdao');
        $this->dao = $this->customersdao;
    }

    public function insertCustomer()	
	{
		$this->dao->insertCustomer( $this->getValues() );
	}

	private function getValues()
	{
		$data['nombre'] 			= $this->input->post('nombre');
		$data['calle'] 				= $this->input->post('calle');
		$data['colonia'] 			= $this->input->post('colonia');
		$data['delegacion']			= $this->input->post('delegacion');
		$data['codigo_postal'] 		= $this->input->post('codigoPostal');
		$data['rfc'] 				= $this->input->post('rfc');
		$data['telefono'] 			= $this->input->post('telefono');
		$data['activo'] 			= 1;
		$data['fecha_creacion'] 	= date("Y-m-d");
		$data['fecha_modificacion'] = date("Y-m-d");

		return $data;
	
	}

}
