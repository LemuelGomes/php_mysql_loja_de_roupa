<?php

    session_start();

    $email = "lemuel1234@gmail.com";
    $senha = "12345";

    if ($email == $_POST['campo_email'] && $senha == $_POST['campo_senha']) 
    {
        
        $_SESSION['logado'] = 1;
        $_SESSION['adm'] = 0;

        header("Location: sistema.php");
    } 
    else 
    {  
        $_SESSION['logado'] = 0;
        
        header("Location: index.php");
    }    
?>