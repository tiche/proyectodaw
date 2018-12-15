<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

    public function __construct() {
        parent::__construct();
       
        $this->load->model('Blog_model');
    }

    public function index() {
        $content = $this->load->view("links_header/blog", "", TRUE);
        $this->getTemplate($content);
    }

    function getTemplate($content) {
        $data = array(
            "header" => $this->load->view("layout/header", "", TRUE),
            "nav" => $this->load->view("layout/nav", "", TRUE),
            "content" => $content,
            "footer" => $this->load->view("layout/footer", "", TRUE)
        );
        $this->load->view("links_header/blog", $data);
    }

    public function validarFormContacto() {

        $this->form_validation->set_error_delimiters('', '');
        $rules = getContactoRules();

        $this->form_validation->set_rules($rules);
        if ($this->form_validation->run() == FALSE) {
            $errors = array(
                "nombre" => form_error("nombre"),
                "email" => form_error("email"),
                "asunto" => form_error("asunto"),
                "mensaje" => form_error("mensaje")
            );

            echo json_encode($errors);
            $this->output->set_status_header(400);
        } else {

            $username = $this->input->post('nombre'); //Esto es lo mismo que $_POST['username'];
            $email = $this->input->post('email');
            $asunto = $this->input->post('asunto');
            $mensaje = $this->input->post('mensaje');

            $datos = array(
                "nombre" => $username,
                "email" => $email,
                "asunto" => $asunto,
                "mensaje" => $mensaje,
            );


            $this->sendEmail($datos);

            $msg = array("mensaje" => "Se ha enviado el email correctamente.");

            echo json_encode($msg);

        }
    }

    public function sendEmail($data) {
        $this->email->from($data['email'], $data['nombre']);
        $this->email->to('admin@tuhuchaonline.com');

        $this->email->subject($data['asunto']);
        $vista=$this->load->view("emails/contacto", $data, true);
        //$this->email->message($data['mensaje']);
        $this->email->message($vista);

        $this->email->send();
    }

}
