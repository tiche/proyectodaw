<?php

class Auth extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    public function compruebaEmail($email) {
        $this->db->get_where("usuario", array("email" => $email));
    }

    /**
     * Función que verifica si el usuario y la contraseña introducidos son válidos (si coinciden con algún registro de la base de datos)
     */
    //Ver esto para lo del password_verify https://forum.codeigniter.com/thread-69704.html
    public function compruebaLogin($email, $password) {
        //Ejecutamos la sentencia select email, password from usuario where email=$user and password=$password
        //Primer parámetro nombre de la tabla (usuario), segundo parámetro nombre campo de la tabla comparado con lo introducido en el formulario. Tercer parámeto limit (1)
        $data = $this->db->get_where("usuario", array("email" => $email, "password" => $password), 1);


        if (!$data->row()) {//el método row devuelv el resultado como un objeto
            return false;
        }
        return $data->row();
    }

    public function verificaPassword($password, $user) {
        if (password_verify($password, $user->password)) {
            return true;
        }

        return false;
    }

    /**
     * Función que verifica si el usuario y la contraseña introducidos son válidos (si coinciden con algún registro de la base de datos)
     */
    //Solución password_verify https://stackoverflow.com/questions/51016042/password-hashing-and-verify-in-codeigniter
    public function compruebaLogin2($email, $password) {
        //Ejecutamos la sentencia select email, password from usuario where email=$user and password=$password
        //Primer parámetro nombre de la tabla (usuario), segundo parámetro nombre campo de la tabla comparado con lo introducido en el formulario. Tercer parámeto limit (1)
        $data = $this->db->get_where("usuario", array("email" => $email), 1);

        $user = $data->row();

        if ($user && password_verify($password, $user->password)) {//el método row devuelv el resultado como un objeto
            return $user;
        } else {
            return false;
        }
    }

}

?>