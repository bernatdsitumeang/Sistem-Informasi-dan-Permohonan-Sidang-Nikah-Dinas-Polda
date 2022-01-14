<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class regist extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}
	public function index()
	{
		$this->form_validation->set_rules('nrpnip','NRP/NIP','required|trim|is_unique[user.nrpnip]|numeric',['is_unique'=> 'NRP/NIP sudah terdaftar!','numeric'=> ' NRP/NIP harus angka!']);
		$this->form_validation->set_rules('nama','Nama','required|trim');
		$this->form_validation->set_rules('pangkat','Pangkat','required|trim');
		$this->form_validation->set_rules('kesatuan','Kesatuan','required');
		$this->form_validation->set_rules('email','Email','required|trim|valid_email|is_unique[user.email]',['is_unique'=> 'Email sudah terdaftar!']);
		$this->form_validation->set_rules('password1','Kata Sandi','required|trim|min_length[6]|matches[password2]', ['matches'=> 'kata sandi tidak sama!','min_length'=> 'kata sandi minimal 6 karakter']);
		$this->form_validation->set_rules('password2','Kata Sandi','required|trim|matches[password1]');

		if( $this->form_validation->run()==false) {
		$this->load->view('nikah/regist');
	} else {
		$data1 = [
			'nrpnip' => htmlspecialchars ($this->input->post('nrpnip','true')),
			'nama' => htmlspecialchars ($this->input->post('nama','true')),
			'pangkat' => $this->input->post('pangkat'),
			'kesatuan' => $this->input->post('kesatuan'),
			'email' => htmlspecialchars ($this->input->post('email','true')),
			'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT)];
		$data2 = [
			'nrpnip' => htmlspecialchars ($this->input->post('nrpnip','true')),
			'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
			'role_id' => 2,
			'is_active' => 1,
			'date_created' => time()];

		$this->db->insert('user', $data1);
		$this->db->insert('tb_login', $data2);
		$this->session->set_flashdata('message','<div class="alert alert-succes" role="alert">Akun berhasil dibuat. Silahkan verifikasi akun anda melalui email yang telah didaftarkan!</div>');

		redirect('http://localhost/kp_polda');
	}
	}
}