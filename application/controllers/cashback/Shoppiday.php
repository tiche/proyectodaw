<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Shoppiday extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $vista = $this->load->view("links_header/cashback/shoppiday", "", TRUE);
        $this->getTemplate($vista);
    }

    function getTemplate($view) {
        $data = array(
            "header" => $this->load->view("layout/header", "", TRUE),
            "nav" => $this->load->view("layout/nav", "", TRUE),
            "content" => $view,
            "footer" => $this->load->view("layout/footer", "", TRUE)
        );
        $this->load->view("links_header/cashback/shoppiday", $data);
    }

}
