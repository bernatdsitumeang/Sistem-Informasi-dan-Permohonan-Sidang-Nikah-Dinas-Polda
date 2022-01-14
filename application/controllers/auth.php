<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class auth extends CI_Controller {

	public function index() {
		
		$data['title']= 'Login Page';
		$this->load->view('nikah/login');
	}
	public function regist() {
		
		$this->load->view('nikah/regist');
	}

	public function user() {
		
		$this->load->view('nikah/user/dashboard');
	}

	public function logout() {
		$this->session->unset_userdata('nrpnip');
		$this->session->unset_userdata('role_id');
	
		$this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Berhasil keluar!</div>');
		redirect('login');
	}
}
