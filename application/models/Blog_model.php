<?php

class Blog_model extends CI_Model {

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

}

?>