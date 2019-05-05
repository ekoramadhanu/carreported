<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class direktur extends CI_Controller {
	public function index()
	{
		$this->load->view('directur_page');
	}

	public function directur_dasboard_1(){
		$this->load->view('directur_page_1');
	}

	public function directur_dasboard_2(){
		$this->load->view('directur_page_2');
	}
	
	public function logout(){
		$this->load->view('login');
	}

}
