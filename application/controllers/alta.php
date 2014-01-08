<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Alta extends CI_Controller {

	/**	 
	 * Alta de usuarios o de empresas en su defecto
	 * @Ricardo Alba
	 * 5 Enero 2014
	 */

	function __construct()
    {
        parent::__construct();
        $this->load->model('altadao');
        $this->dao = $this->altadao;
    }

	public function index()
	{
		$this->load->view('alta');
	}

	public function getValues()
	{
	
		$table = 'fee_customer';

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



		if( $this->input->post('leyenda') !== false  ){

			$table = 'fee_profile';
			$data['leyenda'] = $this->input->post('leyenda');
			$dataUpload = $this->do_upload();
			$data['ruta_imagen'] = 'uploads/imgSat/'.$dataUpload['orig_name'];
		
		}
		
				

		/*save info into de table*/
		
		$this->dao->insertValues($data , $table );
		
		echo '{sucess:true}';
	}

	public function do_upload()
	{		
		$this->load->library('upload');
 
            $config['upload_path'] = 'uploads/imgSat';
            $config['allowed_types'] = 'gif|jpg|png';
            //$config['file_name'] = 'unNuevOnOGRE'; // renombrar el file
            $config['overwrite'] = true; // sobre escribe la imagen en caso de que exista
 
            $this->upload->initialize($config);
 
            foreach($_FILES as $field => $file)
            {
                // No problems with the file
                if($file['error'] == 0)
                {
                    // So lets upload
                    if ($this->upload->do_upload($field))
                    {
                        return $this->upload->data();
                    }
                    else
                    {
                        echo $this->upload->display_errors();
                    }
                }
            }		
	}

	public function tryajax()
	{
		//echo json_encode( $this->input->post() );

		//var_dump( $this->input->post() );

		$this->dao->insertValues( $this->input->post() , 'fee_customer' );
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */