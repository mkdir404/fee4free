<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Profile extends MY_Controller {

	/**	 
	 * Alta de usuarios o de empresas en su defecto
	 * @Ricardo Alba
	 * 5 Enero 2014
	 */
	
	function __construct()
    {
        parent::__construct();
        $this->load->model('profiledao');
        $this->dao = $this->profiledao;
    }

    public function insertProfile($data)	
	{
		$this->dao->insertProfile($data);		
	}

	public function updateProfile($data , $id)
	{	
		$this->dao->updateProfile( $data , $id);
	}

	public function setPerfil()
	{
		$data['nombre'] 			= $this->input->post('nombre');
		$data['calle'] 				= $this->input->post('calle');
		$data['colonia'] 			= $this->input->post('colonia');
		$data['delegacion']			= $this->input->post('delegacion');
		$data['codigo_postal'] 		= $this->input->post('codigo_postal');
		$data['rfc'] 				= $this->input->post('rfc');
		$data['telefono'] 			= $this->input->post('telefono');
		$data['activo'] 			= 1;
		$data['fecha_creacion'] 	= date("Y-m-d");
		$data['fecha_modificacion'] = date("Y-m-d");
		$data['leyenda'] 		    = $this->input->post('leyenda');
		$data['concepto_recibos']   = $this->input->post('concepto');

		/* -- Upload file -- */

		$dataUpload = $this->do_upload();	
		
		if($dataUpload['orig_name']!==''){

			$data['ruta_imagen'] = 'uploads/imgSat/'.$dataUpload['orig_name'];
		}

		if($this->input->post('idPerfil') !== false){

			$id = $this->input->post('idPerfil');
			$data['fecha_modificacion'] = date("Y-m-d");
			$this->updateProfile($data,$id);
		
		}else{

			$this->insertProfile($data);
		}
		
		
	
		echo '{ success:true }';
	
	}

}

