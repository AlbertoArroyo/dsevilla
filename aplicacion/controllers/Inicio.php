<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller {
	 
	public function index()
	{

		$this->load->view('template/header');
		$this->load->view('inicio');
		$this->load->view('template/footer');
	}

	public function contacto()
	{

		$this->load->view('template/header');
		$this->load->view('contacto');
		$this->load->view('template/footer');
	}	

}
