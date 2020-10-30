<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Descuentos extends CI_Controller {
	
	public function index()
	{
		$this->load->view('home/includes/header');
		$this->load->view('home/includes/menu');
		$this->load->view('home/includes/navbar');
		$this->load->view('home/descuentos_page');
		$this->load->view('home/includes/footer_nav');
		$this->load->view('home/includes/footer');

    }
    
}
