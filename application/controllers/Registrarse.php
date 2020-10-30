<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registrarse extends CI_Controller {
	
	function __construct(){
        parent::__construct();
        $this->load->model('DAO');
	}
	
	public function index()
	{
		$this->load->view('includes/header');
		$data_menu['registro_selected'] = true;
		$this->load->view('includes/navbar',$data_menu);
		$this->load->view('vista/registrar_page');
		$this->load->view('includes/footer');
	}

	public function RegistroUsuario(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('correo_usuario_input','Email','required|min_length[3]|max_length[50]');
		$this->form_validation->set_rules('pass_usuario_input','Password','required|min_length[6]|max_length[16]');

		if ($this->form_validation->run()) {
        	$registro = array(
            	"correo_usuario" => $this->input->post('correo_usuario_input'),
            	"pass_usuario" => $this->input->post('pass_usuario_input'),
			);
			if($this->input->post('pass_usuario_input') != $this->input->post('re_usuario_input')){
				$error_msg = "Las contraseñas deben coincidir";
				$this->session->set_flashdata('error_msg',$error_msg);
				redirect('registrarse');
			}
		$this->load->model('DAO');
		$this->DAO->SaveNoJs('usuario',$registro);
		   redirect('login');
		}
		else{
			$error_msg = "La contraseña debe contener minimo 6 caracteres";
			$this->session->set_flashdata('error_msg',$error_msg);
			redirect('registrarse');
		}
	}
	
}