<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Mobil extends MY_Controller
{    public $data = array(
                        'modul'         => 'mobil',
                        'breadcrumb'    => 'Mobil',
                        'pesan'         => '',
                        'pagination'    => '',
                        'tabel_data'    => '',
                        'main_view'     => 'mobil/mobil',
                        'form_action'   => '',
                        'form_value'    => '',
                        'option_kelas'  => '',
                         );

    public function __construct()
	{
		parent::__construct();		

	}

    public function index($offset = 0)
	{
		$this->tampil();
        $this->load->view('utama', $this->data);
	}
	
    public function tambah(){
        $this->data['breadcrumb']  = 'Mobil > Tambah';
        $this->data['main_view']   = 'mobil/mobil_form';
        $this->data['form_action'] = 'mobil/tambah';
		$this->load->view('utama', $this->data);
        
        if($this->input->post('submit'))
        {
            $this->load->model('m_Mobil');
			$this->m_Mobil->insert_data(); 
			//redirect('home');
        }
    }
	
	public function tampil(){
		$this->load->model('m_Mobil');
		$this->data['main_view']   = 'mobil/mobil_lihat';
		$this->data['daftar'] = $this->m_Mobil->get_all_mobil();
		$this->load->view('utama', $this->data);
	}
	
	public function edit($noRegistrasi){
		
		$this->data['breadcrumb']  = 'Mobil > Edit';
        $this->data['main_view']   = 'mobil/edit_Mobil';
        $this->data['form_action'] = 'mobil/edit'. $noRegistrasi;
		$this->load->model('m_Mobil');
		$this->data['editdata']=$this->m_Mobil->get_data($noRegistrasi);
		$this->load->view('utama', $this->data);
		if($this->input->post('submit')){
			$this->m_Mobil->edit_data($noRegistrasi);
			redirect('mobil');
		}
	}
	
	public function hapus($noRegistrasi){
		$this->load->model('m_Mobil');
		$this->m_Mobil->hapus_data($noRegistrasi);
		redirect('mobil');
	}
	
	public function detail($noRegistrasi){
		$this->load->model('m_Mobil');
		$this->data['main_view']   = 'mobil/detail_Mobil';
		$this->data['detail']=$this->m_Mobil->get_data($noRegistrasi);
		$this->load->view('utama', $this->data);
	}
}
