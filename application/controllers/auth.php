<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class auth extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
	}

	public function index()
	{
		$this->form_validation->set_rules('username','Username','trim|required'); 
		$this->form_validation->set_rules('password','Password','trim|required');
		if ($this->form_validation->run() == false) {
			$this->load->view('login');
		}else{
			$this->login();
		}
	}

	private function login(){
		$username= $this->input->post('username');
		$password= $this->input->post('password');		
		$user = $this->db->get_where('user',['username'=>$username])->row_array();
		if($user ){
			if($user['password'] == $password){							
				if($user[isdir] == 1){
					redirect(direktur);
				}elseif ($user[ismar] == 1) {
					redirect(marketing);
				}elseif($user[ismg] == 1){
					redirect(gudang);
				}
				else{
					$this->load->view('login');	
				}
			}
		}else{
			$this->load->view('login');
		}
	}
}
