<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Home extends MY_Controller
{


	public function __construct()
	{
		parent::__construct();		
		
	}

	public function index()
	{
		$this->load->view('indeks');
		$this->load->helper('url');
    }
}
/* End of file rekap.php */
/* Location: ./application/controllers/rekap.php */