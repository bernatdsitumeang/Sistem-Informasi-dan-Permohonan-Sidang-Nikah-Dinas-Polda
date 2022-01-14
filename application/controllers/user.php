<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user extends CI_Controller
{
	public function index()
	{
        $data['title']='Beranda';
        $data['user'] = $this->db->get_where('user',['nrpnip' => $this->session->userdata('nrpnip')])->row_array();
        
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebaruser', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('nikah/user/dashboard', $data);
        $this->load->view('templates/footer');
    }
}