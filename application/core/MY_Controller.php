<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

	/**	 
	 * Alta de usuarios o de empresas en su defecto
	 * @Ricardo Alba
	 * 5 Enero 2014
	 */

	function __construct()
    {
        parent::__construct();
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

    public function getData()
    {
        $data = $this->dao->getData();
        
        if(count($data) > 0 ){
            $data[0]['success'] = true;
            echo json_encode($data[0]);
        }else{
            $data[0]['success'] = false;
            echo json_encode($data[0]);
        }
        
    }

}