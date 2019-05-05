<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class gudang extends CI_Controller {
	public function index()
	{
		$this->load->view('gudang_page');
	}
	
	public function gudang_dasboard(){
		$this->load->view('gudang_page_1');
	}
	
	public function logout(){
		$this->load->view('login');
	}

}
