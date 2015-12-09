<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class M_Mobil extends CI_Model {

	public function __construct(){
		parent::__construct();
        $this->load->library('form_validation');
		$this->load->helper('url','form','string');
    }
	
    public function insert_data(){	
		
		$config['upload_path'] = base_url()."/assets/img/"; //lokasi folder yang akan digunakan untuk menyimpan file
		$config['allowed_types'] = 'gif|jpg|png|JPEG'; //extension yang diperbolehkan untuk diupload
		$config['max_size'] = '100000';
		$config['file_name'] = $this->input->post('file_upload');
		$this->load->library('upload',$config);
		//$this->upload->do_upload(); //meng set config yang sudah di atur
		//$this->upload->initialize($config);
		$no = str_replace(' ','',$this->input->post('noregistrasi'));
		
		$temp=array(
			'noRegistrasi'=>$no,	
			'merk'=>$this->input->post('merk'),
			'type'=>$this->input->post('type'),
			'warna'=>$this->input->post('warna'),
			'hargaSewa'=>$this->input->post('harga'),
			'tahunPembuatan'=>$this->input->post('tahunpembuatan'),
			'bulanPajak'=>$this->input->post('bulanpajak'),
			'kategori'=>$this->input->post('kategori'),
			'gambar'=>$this->upload->file_name
		);
		$cek = $this->get_all_mobil();
		$kon = true;
		
		foreach($cek as $c){
			if($c->noRegistrasi == $this->input->post('noregistrasi')){
				$kon = false;
			}
		}
		
		if($kon){
			$this->upload->do_upload('file_upload');
			$this->upload->data();
			$this->db->insert('mobil',$temp);
			redirect('home');
			echo "<script> alert ('Data dengan no Registrasi ".$this->input->post('noregistrasi')." Berhasil di tambah');</script>";
		}
		else{
			echo "<script> alert ('Data dengan no Registrasi ".$this->input->post('noregistrasi')." sudah ada');</script>";
		}
		
		
		
    }
	
	public function get_all_mobil(){
		
		$query=$this->db->query("SELECT * FROM mobil");
        return $query->result();
	}
	
	public function hapus_data($noRegistrasi){
		//$noRegistrasi = str_replace('%20',' ',$noRegistrasi);
		$this->db->delete('mobil',array('noRegistrasi'=>$noRegistrasi));
	}
	
	public function get_data($noRegistrasi){
		//$noRegistrasi = str_replace('%20',' ',$noRegistrasi);
		
		$query = $this->db->get('mobil',array('noRegistrasi'=>$noRegistrasi));
		return $query->result();
	}
	
	public function edit_data($noRegistrasi){
		$temp=array(
			'noRegistrasi'=>$this->input->post('noregistrasi'),
			'merk'=>$this->input->post('merk'),
			'type'=>$this->input->post('type'),
			'warna'=>$this->input->post('warna'),
			'hargaSewa'=>$this->input->post('harga'),
			'tahunPembuatan'=>$this->input->post('tahunpembuatan'),
			'bulanPajak'=>$this->input->post('bulanpajak'),
			'kategori'=>$this->input->post('kategori'),
			'gambar'=>$this->input->post('gambar')
		);
		//$noRegistrasi = str_replace('%20',' ',$noRegistrasi);
		
		$this->db->where('noRegistrasi',$noRegistrasi);
		$this->db->update('mobil',$temp);
		
	}
	
	
}

/* End of file login_model.php */
/* Location: ./application/models/login_model.php */