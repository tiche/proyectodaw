<?php

/**
 * Esta función guarda todas las reglas de validación de los campos del formulario de Registro
 * 
 * @returns array Devuelve un array con las reglas de validación
 */
function getRegisterRules() {
    return array(
        array(
            'field' => 'nombre',
            'label' => 'nombre de usuario',
            'rules' => 'required|max_length[25]|is_unique[usuario.nombre_usuario]|trim',
            'errors' => array('required' => 'Introduzca un %s', 'max_length' => 'El %s no puede superar los 25 caracteres', 'is_unique' => 'El %s ya está en uso')
        ),
        array(
            'field' => 'email', //En field hay que poner el name del campo
            'label' => 'email',
            'rules' => 'required|valid_email|max_length[100]|is_unique[usuario.email]|trim',
            'errors' => array('required' => 'Introduzca su %s', 'max_length' => 'El %s no puede superar los 100 caracteres', 'valid_email' => 'El %s no es válido', 'is_unique' => 'El %s ya está en uso')
        ),
        array(
            'field' => 'password',
            'label' => 'contraseña',
            'rules' => 'required|min_length[6]|matches[password_confirm]|trim',
            'errors' => array(
                'required' => 'Introduzca su %s.', 'min_length' => 'La %s debe tener al menos 6 caracteres', 'matches'=>'Las contraseñas no coinciden'
            ),
        ),
        array(
            'field' => 'password_confirm',
            'label' => 'contraseña',
            'rules' => 'required|min_length[6]|trim',
            'errors' => array(
                'required' => 'Introduzca su %s.', 'min_length' => 'La %s debe tener al menos 6 caracteres'
            )
        )
    );
}
