<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Q12 extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $vista = $this->load->view("links_header/juegos/q12", "", TRUE);
        $this->getTemplate($vista);
    }

    function getTemplate($view) {
        $data = array(
            "header" => $this->load->view("layout/header", "", TRUE),
            "nav" => $this->load->view("layout/nav", "", TRUE),
            "content" => $view,
            "footer" => $this->load->view("layout/footer", "", TRUE)
        );
        $this->load->view("links_header/juegos/q12", $data);
    }

}
