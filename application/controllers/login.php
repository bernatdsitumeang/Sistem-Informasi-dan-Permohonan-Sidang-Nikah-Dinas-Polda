<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}
	public function index()
	{
		$this->form_validation->set_rules('nrpnip','NRP/NIP','trim|required|numeric');
		$this->form_validation->set_rules('password','Password','trim|required|min_length[6]|matches[password]'); //, ['matches'=> 'kata sandi salah!']);

        if($this->form_validation->run() == false) {
            $this->load->view('nikah/login');
	    } else {
			// validasinya lolos
			$this->_login();
		}
	}

	private function _login()
	{
		$nrpnip = $this->input->post('nrpnip');
		$password = $this->input->post('password');

		$user = $this->db->get_where('tb_login',['nrpnip' => $nrpnip])->row_array();

		//jika usernya ada
		if($user){

			//jika usernya aktif
			if($user['is_active'] == 1){
				//cek password
				if(password_verify($password, $user['password'])) {
					$data = [
						'nrpnip'=> $user['nrpnip'],
						'role_id'=> $user['role_id']
					];
					$this->session->set_userdata($data);
					redirect('user');

				}else {

					$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">Password salah!</div>');
				redirect('login');
				}

			}else{

				$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">Akun belum terverifikasi. Silahkan verifikasi akun anda melalui email yang diberikan!</div>');
				redirect('login');
			}

		}else{

			$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">NRP/NIP tidak terdaftar!</div>');
			redirect('login');
		}
	}
}