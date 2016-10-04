<?php

//La función mail, necesita 3 parametros a definir: destino, asunto, cuerpo.

//empty se usa para ver si una variable tiene un valor

define('asunto','Opinión');
define('destinatario','brian.bobi@outlook.com');

    if( empty($_POST['mensaje']) ){
        print('Por favor escriba un mensaje.');
    }else{
        $mensaje = $_POST['mensaje'];
        print('Gracias por tu opinión');
        mail( destinatario,asunto, $mensaje);
    }
