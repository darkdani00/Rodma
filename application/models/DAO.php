<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DAO extends CI_Model {
    function __construct(){
        parent::__construct();
    }

    public function login($email,$password){
        /*
        *1 consultar que el usuario exista por email
        *2(3) validar la contrasenia
        *3(2) validar el estatus
        */
        $this->db->where('correo_usuario ',$email);
        $query = $this->db->get('usuario');
        $user_exists = $query->row();
        //Validar si el usuario existe
        if($user_exists){
            if($user_exists->user_status=='inactivo'){
                return array(
                    "status" => "error",
                    "message" => "Su cuenta ha sido suspendida.Contacte al administrador para revisar su motivo."
                );
            }
            //bcrypt
            if($user_exists->pass_usuario == $password){
                $this->db->where('id_usuario',$user_exists->id_usuario);
                $query = $this->db->get('user_vw');
                return array(
                    "status" => "success",
                    "message" => "Usuario cargado correctamente",
                    "data" => $query->row()
                );
            }else{
                return array(
                    "status" => "error",
                    "message" => "Contraseña no valida"
                );
            }
        }else{
            return array(
                "status" => "error",
                "message" => "Correo no encontrado"
            );
        }

    }

    function saveOrUpdateEntity($entityName,$data,$whereClause = array()){
        //validar que el arreglo contenga info
        if ($whereClause) {
            $this->db->where($whereClause);
            $this->db->update($entityName,$data);
        }else{
            $this->db->insert($entityName,$data);
        }
        if ($this->db->error()['message'] != '') {
            return array(
                "status" => "error",
                "message" => $this->db->error()['message']
            );
        }else{
            return array(
                "status" => "success",
                "message" => $whereClause ? 'Datos Actualizados correctamente' : 'Datos Registrados correctamente'
            );
        }

    }

    public function selectEntity($entityName ,$whereClause = array(), $isUnique = FALSE){
        if($whereClause){
            $this->db->where($whereClause);
        }
        $query = $this->db->get($entityName);
        if ($this->db->error()['message'] != '') {
            return $isUnique ? null : array();
        } else {
            return $isUnique ? $query->row() : $query->result();
        }
        
    }

    public function SaveNoJs($table_data,$info_data){
        $this->db->insert($table_data, $info_data);
    }


}