<?php
//Reglas de validación del formulario de Login
function getLoginRules(){
     return array(
        array(
                'field' => 'email',//En field hay que poner el name del campo
                'label' => 'Email',
                'rules' => 'required|trim',
                'errors'=>array('required'=>'Introduzca su email')
        ),
        array(
                'field' => 'password',
                'label' => 'Password',
                'rules' => 'required|trim',
                'errors' => array(
                        'required' => 'Introduzca su %s.',
                ),
        )
);

    
    
    //return $config;
}
   
?>
