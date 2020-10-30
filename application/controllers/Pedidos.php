<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pedidos extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->model('DAO');
    }

    public function index() {
        redirect('pedidos/initial');
    }

    public function initial($pedidos_id = null) {
        if($pedidos_id){
            $pedidos_exists = $this->DAO->selectEntity('usuario',array('id_usuario '=> $pedidos_id),TRUE);
            if($pedidos_exists){
                $data_container['usuario_selected'] = $pedidos_exists;
                $data_container['pedidos_data'] = $this->DAO->selectEntity('pedido',array('id_usuario'=>$pedidos_id));

                $data_js['usuario_selected'] = $pedidos_id;

            }else{
                redirect('perfil');
            }
        }else{
            $data_container['pedidos_data'] = $this->DAO->selectEntity('pedido');
            $data_js['usuario_selected'] = null;
        }

		$this->load->view('home/includes/header');
        $data_menu['pedidos_selected'] = true;
		$this->load->view('home/includes/menu',$data_menu);
		$this->load->view('home/includes/navbar');

        $data_main['container_data'] = $this->load->view('home/pedidos/pedidos_data_page',$data_container,TRUE);
        
        $this->load->view('home/pedidos/pedidos_page',$data_main);

        $data_footer_nav['modal_size'] = "modal-lg";

		$this->load->view('home/includes/footer_nav',$data_footer_nav);
		$this->load->view('home/includes/footer');
		$this->load->view('home/perfil/perfil_js',$data_js);
    }

	
    public function showProductForm(){
        if($this->input->get('category_id')){
            $data_view['category_exists'] = 
            $this->DAO->selectEntity('categories',array('id_category'=>$this->input->get('category_id')),TRUE);
        }else{
            $data_view['category_list'] = $this->DAO->selectEntity('categories');
        }
        $data_view['action']=$this->input->get('action') ? $this->input->get('action') : 'new';
        if ($this->input->get('key')) {
            $data  = $this->DAO->selectEntity('producto',array('id_producto'=>$this->input->get('key')),TRUE);
            $data_view['current_data'] = (array) $data;
        }
            echo $this->load->view('products/products_form',$data_view,TRUE);
    }
    
    public function saveOrUpdate(){
        $this->load->library('form_validation');
        $this->form_validation->set_rules('name_product','Nombre','required|min_length[3]|max_length[60]');
        $this->form_validation->set_rules('sell_product','Precio Venta','required');
        $this->form_validation->set_rules('buy_product','Precio Compra','required');
        //pendiente validar que exista
        $this->form_validation->set_rules('category','Categoria','required');

        $this->form_validation->set_rules('prod_picture','Foto','callback_valid_pic');
        
 
        if ($this->form_validation->run()) {
            //lo va a hacer new y edit
            if ($this->input->post('form_action') != "delete") {
                $uploaded_file = false;
                if($this->input->post('form_action') == "new"){
                    $config['upload_path']          = './uploads/products';
                    $config['allowed_types']        = 'jpg|png';
                    $config['max_size']             = 2048;
                    $config['file_name'] = time();
    
                    $this->load->library('upload', $config);
                    $uploaded_file = $this->upload->do_upload('prod_picture');
                }
                if($uploaded_file && $this->input->post('form_action') == "new"){
                    $data = array(
                        "icon_product" => $this->upload->data()['file_name'],
                        "name_product" => $this->input->post('name_product'),
                        "price_sell_product" => $this->input->post('sell_product'),
                        "price_buy_product" => $this->input->post('buy_product'),
                        "desc_product" => $this->input->post('desc_product'),
                        "category_id" => $this->input->post('category')
                    );
                }else if(!$uploaded_file && $this->input->post('form_action') == "new"){
                    $data_response = array(
                        "status" => "error",
                        "message" => "Error al subir la foto",
                        "data" =>  $this->load->view('products/products_form',$data,TRUE)
                    );
                    echo json_encode($data_response);
                }else{
                    $data = array(
                        "name_product" => $this->input->post('name_product'),
                        "price_sell_prduct" => $this->input->post('sell_product'),
                        "price_buy_prduct" => $this->input->post('buy_product'),
                        "desc_product" => $this->input->post('desc_product'),
                        "category_id" => $this->input->post('category')

                    );
                }

            }else {
                $data = array(
                    "status_product" => "Inactive"
                );
            }
            //Edit
            if ($this->input->post('form_action') != 'new') {
                $where_clause = array('id_producto'=> $this->input->post('id_producto'));
            }else {
                $where_clause=array();
            }
            $data_response = $this->DAO->saveOrUpdateEntity('producto',$data,$where_clause);
            echo json_encode($data_response);
        }
        else{

            if ($this->input->post('category')) {
                $data['category_exists'] = 
                $this->DAO->selectEntity('categories',array('id_category'=>$this->input->post('category')),TRUE);
            }else{
                $data['category_list'] = $this->DAO->selectEntity('categories');
            }
            
            $data['action'] = $this->input->post('form_action');
            $data['errors'] = $this->form_validation->error_array();
            $data['current_data'] = $this->input->post();
            $data_response = array(
                "status" => "warning",
                "message" => "Información incorrecta, valida los campos!",
                "data" =>  $this->load->view('products/products_form',$data,TRUE)
            );
            echo json_encode($data_response);
        }
    }

    public function valid_pic(){
        if(empty($_FILES['prod_picture']['name'])){
            if($this->input->post('id_producto')){
                return true;
            }else{
                $this->form_validation->set_message('valid_pic','The {field} is required');
                return false;
            }

        }else{
            return true;
        }
    }
}