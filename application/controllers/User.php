<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->database();
        //$this->load->model('Admin_model');
        $this->load->library(array("form_validation"));
    }

    //El método index es requerido
    public function index() {
        $content = $this->load->view("user/dashboard_user", "", TRUE);
        $this->getTemplate($content);
    } 

    function getTemplate($view) {
        $data = array(
            "header" => $this->load->view("layout/header", "", TRUE),
            "nav_user" => $this->load->view("layout/nav_user", "", TRUE),
            "content" => $view,
            "footer" => $this->load->view("layout/footer", "", TRUE)         
        );
        $this->load->view("user/dashboard_user", $data);
    }
    
    function perfil_user(){
               
        $content=$this->load->view("user/perfil_user", "", TRUE);
        $this->getTemplate($content);
    }

    
}
