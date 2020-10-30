<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_RootController extends CI_Controller {
    
    function __construct(){
        parent::__construct();
    }

    public function _validateSession(){
        $session = $this->session->userdata('store_sess');
        if(!$session->correo_usuario){
            redirect('login');
        }
    }
}
