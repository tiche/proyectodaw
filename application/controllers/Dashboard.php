<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
   
    public function __construct() {
        parent::__construct();
    }

    public function index() {
        //if($rol==1){
            //$this->load->view("admin/dashboard_admin", "");
            //$this->getTemplate($vista);
        //}else{
            //$this->load->view("user/dashboard_user", "");
            //$this->getTemplate($vista);
        //}
        
    }

    public function admin(){
        $content=$this->load->view("admin/dashboard_admin", "");
        $this->getTemplateAdmin($content);
    }
    
    public function user(){
         $content=$this->load->view("user/dashboard_user", "");
         $this->getTemplateUser($content);
         
    }
    function getTemplateAdmin($view) {
        $data = array(
            "header" => $this->load->view("layout/header", "", TRUE),
            "nav_admin" => $this->load->view("layout/nav", "", TRUE),
            "content" => $view,
            "footer" => $this->load->view("layout/footer", "", TRUE)
        );
        
        $this->load->view("admin/dashboard_admin", $data);
    }
    
    function getTemplateUser($view) {
        $data = array(
            "header" => $this->load->view("layout/header", "", TRUE),
            "nav_user" => $this->load->view("layout/nav_user", "", TRUE),
            "content" => $view,
            "footer" => $this->load->view("layout/footer", "", TRUE)
        );
        
        $this->load->view("user/dashboard_user", $data);
    }

}
