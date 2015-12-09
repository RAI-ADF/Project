<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller
{
    public $data = array('pesan'=> '');

	public function __construct()
    {
		parent::__construct();
        $this->load->helper('form');
        $this->load->library('form_validation');
		$this->load->model('Login_model', 'login', TRUE);
		session_start();
	}

	public function index()
    {
		// status user login = BENAR, pindah ke halaman home
        if ($this->session->userdata('login') == TRUE)
        {
			redirect('home');
		}
        // status login salah, tampilkan form login
        else
        {
            // validasi sukses
            if($this->login->validasi())
            {
                // cek di database sukses
                if($this->login->cek_user())
                {
                    redirect('home');
                }
                // cek database gagal
                else
                {
                    $this->data['pesan'] = 'Username atau Password salah.';
                    $this->load->view('login/form_login', $this->data);
                }
            }
            // validasi gagal
            else
            {
                $this->load->view('login/form_login', $this->data);
            }
		}
	}

	public function logout()
	{
        $this->login->logout();
		redirect('login');
	}
}
/* End of file login.php */
/* Location: ./application/controllers/login.php */