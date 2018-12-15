<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Registro extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->model('Registro_user');
        $this->load->helper('registro_rules');
        $this->load->library(array("form_validation"));
    }

    //El método index es requerido
    public function index() {
        $content = $this->load->view("links_header/registro", "", TRUE);
        $this->getTemplate($content);
    }

    //Crear nuevo usuario
    public function create() {
        //Recogemos los datos del formulario enviados por post
        $username = $this->input->post('nombre'); //Esto es lo mismo que $_POST['username'];
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $password_confirm = $this->input->post('password_confirm');

        $rules = getRegisterRules();

        $this->form_validation->set_rules($rules);

        if ($this->form_validation->run() == FALSE) {
            /* $header=$this->load->view("layout/header");
              $nav=$this->load->view('layout/nav');
              $footer=$this->load->view("layout/footer");
              $data=array("header"=>$header, "nav"=>$nav, "footer"=>$footer); */
            $content = $this->load->view("links_header/registro", "", TRUE);
            $this->getTemplate($content);


            //Si los datos introducicos en el formulario son correctos
        } else {
            //Guardamos en un array los datos enviados por el formulario. Las keys tienen que coincidir con el nombre de los campos en la base de datos. Este array tb se podría poner en la función createUser de model/Users.php
            $datos = array(
                "nombre_usuario" => $username,
                "email" => $email,
                "password" => $password,
                "fecha_registro" => date("Y-m-d-H-i-s"),
                "rol" => 0,
                "activo" => 1);


            //Si devuelve false, quiere decir que el usuario no se ha podido crear. La función createUser se encuentra en models/Users.php
            if (!$this->Registro_user->createUser($datos)) {
                $data['msg'] = "Error al insertar datos";
                $content = $this->load->view("links_header/registro", $data, TRUE);
                $this->getTemplate($content);
            } else {
                $data['msg'] = "Registrado correctamente";
                $content = $this->load->view("links_header/registro", $data, TRUE);
                $this->getTemplate($content);
                //$this->load->view("registro_correcto", $data);
            }
        }
        //$query=$this->db->get('usuario'); //Esto es lo mismo que poner SELECT * FROM tabla
        //var_dump($query->result());
    }

    public function validarRegistro() {

        /* $nombre = $this->db->post("nombre");
          $email = $this->db->post("email");
          $asunto = $this->db->post("asunto");
          $mensaje = $this->db->post("mensaje"); */
        $this->form_validation->set_error_delimiters('', '');
        $rules = getRegisterRules();

        $this->form_validation->set_rules($rules);
        if ($this->form_validation->run() == FALSE) {
            $errors = array(
                "nombre" => form_error("nombre"),
                "email" => form_error("email"),
                "password" => form_error("password"),
                "password_confirm" => form_error("password_confirm")
            );

            echo json_encode($errors);
            $this->output->set_status_header(400);
        } else {

            $username = $this->input->post('nombre'); //Esto es lo mismo que $_POST['username'];
            $email = $this->input->post('email');
            $password = $this->input->post('password');
            $password_hash = password_hash($password, PASSWORD_DEFAULT);

            $datos = array(
                "nombre_usuario" => $username,
                "email" => $email,
                "password" => $password_hash,
                "fecha_registro" => date("Y-m-d-H-i-s"),
                "rol" => 0,
                "activo" => 1);


            //Si devuelve false, quiere decir que el usuario no se ha podido crear. La función createUser se encuentra en models/Users.php
            if (!$this->Registro_user->createUser($datos)) {
                $data['msg'] = "Error al insertar datos";
                $content = $this->load->view("links_header/registro", $data, TRUE);
                $this->getTemplate($content);
            } else {
                $mensaje = array("mensaje"=>"Su cuenta se ha registrado correctamente. Haga click <a href=" . base_url("login") . ">aquí</a> para iniciar sesión");

                echo json_encode($mensaje);
                //$data['msg'] = "Registrado correctamente";
                //$content = $this->load->view("links_header/registro", $data, TRUE);
                //$this->getTemplate($content);
                //$this->load->view("registro_correcto", $data);
            }
        }
    }

    function getTemplate($view) {
        $data = array(
            "header" => $this->load->view("layout/header", "", TRUE),
            "nav" => $this->load->view("layout/nav", "", TRUE),
            "content" => $view,
            "footer" => $this->load->view("layout/footer", "", TRUE)
        );
        $this->load->view("welcome_message", $data);
    }

    function getContent($content) {

        return $data = array("content" => $content);
    }

}
