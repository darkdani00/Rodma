<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Productos extends CI_Controller {
	
	public function index()
	{
		$this->load->view('includes/header');
		$data_menu['productos_selected'] = true;
		$this->load->view('includes/navbar',$data_menu);
		$this->load->view('vista/productos_page');
		$this->load->view('includes/footer');
	}
}
