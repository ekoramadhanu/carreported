<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class marketing extends CI_Controller {
	public function index()
	{
		$this->load->view('marketing_page');
	}
	
	public function marketing_dasboard(){
		$this->load->view('marketing_page_1');
	}
	public function logout(){
		$this->load->view('login');
	}
}
