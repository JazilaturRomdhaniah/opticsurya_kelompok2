<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Simple_login
{
	protected  $CI;

	public function __construct()
	{
		$this->CI =& get_instance();
		//load data model user
		$this->CI->load->model('user_model');
	}

	//fungsi login
	public function login ($username,$passsword)
	{
		$chek = $this->CI->user_model->login($username,$passsword);
		//jika ada user, maka create session login
		if($chek){
			$id_user	= $chek->id_user;
			$nama		= $chek->nama;
			$akses_level = $chek->akses_level;
			//create session
			$this->CI->session->set_userdata('id_user',$id_user);
			$this->CI->session->set_userdata('nama',$nama);
			$this->CI->session->set_userdata('username',$username);
			$this->CI->session->set_userdata('akses_level',$akses_level);
			//redirect ke halaman admin yang diproteksi
			redirect(base_url('admin/dasbor'),'refresh');
		} else{
			//kalau tidak ada (username/password salah) maka akan disuruh login kembali
				$this->CI->session->set_flashdata('warning','Username atau Password salah');
				redirect(base_url('login'),'refresh');
		}
	}

	//fugsi chek login
	public function cek_login()
	{
		//memeriksa apakah session sudah atau belum, jika belum silahkan ke login
		if ($this->CI->session->userdata('username') == ""){
			$this->CI->session->set_flashdata('warning','Anda Belum Login');
			redirect(base_url('login'), 'refresh');
		}
	}

	//fungsi logout
	public function logout()
	{
		//membuang semua session yang telah diset pada saat
		$this->CI->session->unset_userdata('id_user');
		$this->CI->session->unset_userdata('nama');
		$this->CI->session->unset_userdata('username');
		$this->CI->session->unset_userdata('akses_level');
		//setelah session dibuang maka redirect ke login
		$this->CI->session->set_userdata('Sukses','Anda Berhasil Logout');
		redirect(base_url('login'),'refresh');
	
	}
	

}

/*End of file Simple_login.php
/* Locatilon; ./application/libraries/Simple_login.php */