<?php

class Registro_user extends CI_Model {

    public function __construct() {
        //Cargamos la base de datos
        $this->load->database();
    }

    public function createUser($data) {

        if (!$this->db->insert('usuario', $data)) {// Produces: INSERT INTO usuario (title, name, date) VALUES ('My title', 'My name', 'My date')
            return false;
        }

        return true;
    }

    public function getEmail($email) {
        if (!$this->db->get_where("usuario", array('email' => $email))) {
            return false;
        }

        return true;
    }

    public function getNombreUsuario() {
        if (!$this->db->get_where("usuario", array('email' => $email))) {
            return false;
        }

        return true;
    }

}

?>