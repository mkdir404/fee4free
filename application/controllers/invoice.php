<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Invoice extends MY_Controller {

	/**	 
	 * Alta de usuarios o de empresas en su defecto
	 * @Ricardo Alba
	 * 5 Enero 2014
	 */

	function __construct()
    {
        parent::__construct();
    }

    public function generatePDF()
    {
    	
    	#ejemplo de libreria para generar un PDF

    	require_once(APPPATH."libraries/dompdf/dompdf_config.inc.php");


    	$html =

  			'<html>'.
  			'<head><title></title><meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
			</head><body>';

  		$footer ='</body></html>';

		$htmlView =  $this->load->view('pdfhtml','',true);

		$dompdf = new DOMPDF();
 		//$dompdf->load_html($html);
 		$dompdf->load_html($html.$htmlView.$footer);
		$dompdf->render();
		$dompdf->stream("sample.pdf");
		//echo SELF;
		$this->load->view('welcome_message');

    }

}

