<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
 
    
    public function __construct(){
        parent::__construct();
        $this->load->library(array("form_validation", "session"));
        $this->load->helper(array("login_rules"));
        $this->load->model("Auth");
    }
	
	public function index(){
        //Para pasar datos a la vista se usa $data
        $content = $this->load->view("links_header/login", "", TRUE);
        $this->getTemplate($content);
        //var_dump(getLoginRules());
	}
    
    
    public function validate(){
        $this->form_validation->set_error_delimiters("", ""); //Esto es para cuando mande el json, no lo haga con los errores envueltos en etiquetas <p> de html
        //Guardamos las reglas de validación que establecimos en el método getLoginRules que se encuentra en el helper login_rules
        $rules=getLoginRules();
        //Validamos
        $this->form_validation->set_rules($rules);
        //Si hay errores
        if($this->form_validation->run()===FALSE){
           
            //guardamos los errores en un array
             $errors=array(
                'email'=>form_error("email"),
                'password'=>form_error("password"));
            //Lo enviamos a login.js
            echo json_encode($errors);
            //Devolvemos el código de error 400
            $this->output->set_status_header(400);
         //Si la validación es correcta (es decir, si no hay errores)   
        }else{
            //Guardamos los valores del formulario enviados por post
          $email=$this->input->post("email");
          $password=$this->input->post("password");
         
            //Si las credenciales no son correctas
          if(!$respuesta=$this->Auth->compruebaLogin2($email, $password)){
              
              
              echo json_encode(array("msg"=>"Verifique sus credenciales"));
              $this->output->set_status_header(401);
              exit;
          }
            
            //Guardamos los datos que queremos pasar al dashboard una vez iniciada la sesión
            $data=array(
                "id_usuario"=>$respuesta->id_usuario,
                "nombre_usuario"=>$respuesta->nombre_usuario,
                "is_logged"=>TRUE
            );
            
            
            //Para cargar los valores del array data en la sesión
            $this->session->set_userdata($data);
            $this->session->set_flashdata("msg", "Bienvenid@ ". $data['nombre_usuario']);
            //if($respuesta->rol==1){
                echo json_encode(array("url"=>base_url(""), "rol"=>$respuesta->rol));
            //}else{
            //   echo json_encode(array("url"=>base_url("dashboard")));
            //}
            //echo json_encode(array("rol"=>$respuesta->rol));
        }    
    }   
    
    public function logout(){
        //Variables de sesión para destruir
        $vars=array("id_usuario", "nombre_usuario","is_logged");
        
        $this->session->unset_userdata($vars);
        $this->session->sess_destroy();
        redirect('login');
    }
    
    function getTemplate($view) {
    $data = array(
        "header" => $this->load->view("layout/header", "", TRUE),
        "nav" => $this->load->view("layout/nav", "", TRUE),
        "content" => $view,
        "footer" => $this->load->view("layout/footer", "", TRUE)
    );
    $this->load->view("links_header/login", $data);
}

}

