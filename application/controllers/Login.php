<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	function __construct(){
		parent:: __construct();

	}
	public function index()
	{
		$this->_isLoggin();
		$this->load->view('includes/header');
		$data_menu['login_selected'] = true;
		$this->load->view('includes/navbar',$data_menu);
		$this->load->view('vista/login_page');
		$this->load->view('includes/footer');
	}

	public function auth(){
		$this->_isLoggin();
		if($this->input->post()){
			$this->load->library('form_validation');
			$this->form_validation->set_rules('pEmail','Email','required');
			$this->form_validation->set_rules('pPassword','Password','required');
			if($this->form_validation->run()== FALSE){
				$error_msg = "Usuario y/o Contraseña incorrecto";
				$this->session->set_flashdata('error_msg',$error_msg);
				redirect('login');
			}else{
				$this->load->model('DAO');
				$user_exists = $this->DAO->login($this->input->post('pEmail'),
				$this->input->post('pPassword'));
				if($user_exists['status'] == 'success'){
					$this->session->set_userdata('store_sess',$user_exists['data']);
					redirect ('perfil');
				}else{
					//echo var_dump($user_exists);
					$this->session->set_flashdata('error_msg',$user_exists['message']);
					redirect('login');
				}
			}
		}else{
			$error_msg = "Usuario y/o Contraseña no enviadas";
			$this->session->set_flashdata('error_msg',$error_msg);
			redirect('login');
		}
	}
	public function logout(){
		$this->session->unset_userdata('store_sess');
		redirect('login','refresh');
	}
	function _isLoggin(){
		$session = $this->session->userdata('store_sess');
		if (@$session->correo_usuario) {
			redirect('home');
		}
	}
}
