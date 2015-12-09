<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class User extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
	}
	public function index()
	{
		if(($this->session->userdata('user_name')!=""))
		{
			$this->welcome();
		}
		else{
			$data['title']= 'Home';
			$this->load->view('header_view',$data);
			$this->load->view('login_view.php', $data);
		}
	}
    
        // Show registration page
    public function user_registration() {
        $data['title']= 'Registration';
        $this->load->view('header_view',$data);
        $this->load->view('registration_view.php', $data);
    }
	
	 // Show login page
    public function user_login() {
        $data['title']= 'Login';
        $this->load->view('header_view',$data);
        $this->load->view('login_view.php', $data);
    }
	
	public function welcome()
	{
		$data['title']= 'Welcome';
		$this->load->view('header_view',$data);
		$this->load->view('content_view',$data);
		$this->load->view('welcome_view.php', $data);
	}
	public function login()
	{
		$email=$this->input->post('email');
		$password=md5($this->input->post('pass'));

		$result=$this->user_model->login($email,$password);
		if($result) $this->welcome();
		else        $this->index();
	}
	public function thank()
	{
		$data['title'] = 'Registration Successfully !';
        $this->load->view('header_view',$data);
        $this->load->view('login_view.php', $data);
    }
	public function registration()
	{
		$this->load->library('form_validation');
		// field name, error message, validation rules
		$this->form_validation->set_rules('user_name', 'User Name', 'trim|required|min_length[4]|xss_clean');
		$this->form_validation->set_rules('email_address', 'Your Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]|max_length[32]');
		$this->form_validation->set_rules('con_password', 'Password Confirmation', 'trim|required|matches[password]');

		if($this->form_validation->run() == FALSE)
		{
			$this->user_registration();
		}
		else
		{
			$this->user_model->add_user();
			$this->thank();
		}
	}
	public function logout()
	{
		$newdata = array(
		'user_id'   =>'',
		'user_name'  =>'',
		'user_email'     => '',
		'logged_in' => FALSE,
		);
		$this->session->unset_userdata($newdata );
		$this->session->sess_destroy();
		$this->index();
	}
} 
?>