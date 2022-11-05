<?php

    session_start();

    $usuario_autenticado = false;

    $usuarios_app = array(
        array('email' => 'adm@teste.com', 'senha' => '123456'),
        array('email' => 'usuario@teste.com', 'senha' => '1234'),
    );    

    foreach ($usuarios_app as $user) {
        if ($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']) {   
            $usuario_autenticado = true;
        } 
    }

    if ($usuario_autenticado == true){
        echo 'Usuario autenticado';
        $_SESSION['autenticado'] = 'SIM';
    }else{
        $_SESSION['autenticado'] = 'NAO';
        header('Location: index.php?login=erro'); 
    }

?>