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
        $this->load->model('invoicedao');
        $this->dao = $this->invoicedao;
    }

    public function insertInvoice()
    {
    	$this->dao->insertInvoice( $this->getValues() );

    	echo '{ success:true }';
    }

    private function getValues()
    {

 		$data['nombre'] 			= $this->input->post('nombre');
		$data['calle'] 				= $this->input->post('calle');
		$data['colonia'] 			= $this->input->post('colonia');
		$data['delegacion']			= $this->input->post('delegacion');
		$data['codigo_postal'] 		= $this->input->post('codigo_postal');
		$data['rfc'] 				= $this->input->post('rfc');	
		$data['folio'] 				= $this->input->post('folio');
		$data['fecha_factura'] 		= $this->input->post('fecha_factura');
		$data['concepto'] 			= $this->input->post('concepto');
		$data['cantidad'] 			= $this->input->post('cantidad');
		$data['iva'] 				= $this->input->post('iva');
		$data['sub_total'] 			= $this->input->post('sub_total');
		$data['iva_retenido'] 		= $this->input->post('iva_retenido');
		$data['isr'] 				= $this->input->post('isr');
		$data['total_pagado'] 		= $this->input->post('total_pagado');

		#si buscan un cliente se debera registra
		#$data['llave_customer'] 	= $this->input->post('llave_customer');

		$data['activo'] 			= 1;
		$data['fecha_creacion'] 	= date("Y-m-d");
		$data['fecha_modificacion'] = date("Y-m-d");

		return $data;
    	
    }

    /*return invoice generate*/

    private function generateInvoice()
    {
    	
    	$data = $this->getValues();


    	return $this->load->view('pdfhtml',$data,true);
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
 		$dompdf->load_html($html.$this->generateInvoice().$footer);
		$dompdf->render();
		//$dompdf->stream("sample.pdf");
		$pdf = $dompdf->output();

		$filename = 'sample2';
		//echo SELF;
		//$this->load->view('welcome_message');
		 file_put_contents("./invoicepdf/".$filename.".pdf", $pdf);
		 $filepath = "./invoicepdf/".$filename.".pdf";
		 /*$filename = 'sample_impresion';

		 	header('Content-Description: File Transfer');
            header('Content-Type: application/octet-stream');
            header('Content-disposition: attachment; filename='.$filename.'.pdf');
            header('Content-Transfer-Encoding: binary');
            header('Connection: Keep-Alive');
            header('Expires: 0');
            header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
            header('Pragma: public');
            //header('Content-Length: ' . filesize($filepath));
            readfile($filepath);*/

            echo json_encode( array('URL' => $filepath ) );

    }

}

