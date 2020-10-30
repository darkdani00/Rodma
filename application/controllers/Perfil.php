<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perfil extends CI_Controller {
    function __construct(){
		parent::__construct();
		$this->load->model('DAO');

    }
	
	public function index()
	{
		$this->load->view('home/includes/header');
		$this->load->view('home/includes/menu');
		$this->load->view('home/includes/navbar');
		$data_container['container_data'] = $this->DAO->selectEntity('usuario');
		$this->load->view('home/perfil/perfil_page',$data_container);
		$this->load->view('home/includes/footer_nav');
		$this->load->view('home/includes/footer');
		$this->load->view('home/perfil/perfil_js');


	}
    
}
