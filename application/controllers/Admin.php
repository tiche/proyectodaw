<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->database();
        //$this->load->model('Admin_model');
        $this->load->library(array("form_validation"));
    }

    //El método index es requerido
    public function index() {
        $content = $this->load->view("admin/dashboard_admin", "", TRUE);
        $this->getTemplate($content);
    } 

    function getTemplate($view) {
        $data = array(
            "header" => $this->load->view("layout/header", "", TRUE),
            "nav_admin" => $this->load->view("layout/nav_admin", "", TRUE),
            "content" => $view,
            "footer" => $this->load->view("layout/footer", "", TRUE)
           
        );
        $this->load->view("admin/dashboard_admin", $data);
    }

    function getContent($content) {

        return $data = array("content" => $content);
    }

}
