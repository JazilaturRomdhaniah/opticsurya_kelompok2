<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    //Halaman Login
	public function index()
	{
        $data = array(  'title'     => 'Login Administrator');
		$this->load->view('login/list', $data , FALSE);
	}
}
