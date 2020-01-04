<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class pdf extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->library('pdf'); // 
		$this->pdf->fontpath = 'fonts/'; // Create folder fonts at Codeigniter
	}

	public function index()
	{
		echo anchor(base_url('pdf/test'), 'Generate PDF');
	}
	public function test()
	{
		$this->pdf->AddPage();
		$this->pdf->AddFont('angsa','','angsa.php');
		$this->pdf->AddFont('angsa','B','angsab.php');
		$this->pdf->AddFont('angsa','I','angsai.php');
		$this->pdf->AddFont('angsa','U','angsaz.php');
		$this->pdf->SetFont('angsa','',36);
		$this->pdf->Cell(0,20,iconv( 'UTF-8','TIS-620','สวัสดี ชาวโลก2'),0,1,"C");
		$this->pdf->Output("MyPDF/test.pdf","F");

		$this->load->helper('download');

		$data = file_get_contents("MyPDF/test.pdf");
		$name = "MyPDF/test.pdf";

		force_download($name, $data); 
		//echo anchor('MyPDF/test.pdf', 'Download');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
