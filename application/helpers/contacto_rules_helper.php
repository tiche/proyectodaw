<?php

/**
 * Esta función guarda todas las reglas de validación de los campos del formulario de Registro
 * 
 * @returns array Devuelve un array con las reglas de validación
 */
function getContactoRules() {
    return array(
        array(
            'field' => 'nombre',
            'label' => 'nombre',
            'rules' => 'required|max_length[25]|trim',
            'errors' => array('required' => 'Introduzca su %s', 'max_length' => 'El %s no puede superar los 25 caracteres')
        ),
        array(
            'field' => 'email', //En field hay que poner el name del campo
            'label' => 'email',
            'rules' => 'required|valid_email|max_length[100]|trim',
            'errors' => array('required' => 'Introduzca un %s', 'max_length' => 'El %s no puede superar los 100 caracteres', 'valid_email' => 'El %s no es válido')
        ),
        array(
            'field' => 'asunto',
            'label' => 'asunto',
            'rules' => 'required|trim',
            'errors' => array(
                'required' => 'Introduzca el %s.'
            ),
        ),
        array(
            'field' => 'mensaje',
            'label' => 'mensaje',
            'rules' => 'required|min_length[6]|trim',
            'errors' => array(
                'required' => 'Introduzca el %s.', 'min_length' => 'El %s debe tener al menos 6 caracteres'
            )
        )
    );
}
