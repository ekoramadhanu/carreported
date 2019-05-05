<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class link extends CI_Controller {
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

	public function marketing_dasboard(){
		$this->load->view('marketing_page');
	}

	public function marketing_dasboard_1(){
		$this->load->view('marketing_page_1');
	}

	public function gudang_dasboard(){
		$this->load->view('gudang_page');
	}

	public function gudang_dasboard_1(){
		$this->load->view('gudang_page_1');
	}
}
