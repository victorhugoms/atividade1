<?php

    $senha = 1234;
    $senha1=$_GET['senha'];

    if($senha == $senha1){
        echo"Acesso Permitido";
    }
    else{
        echo"Aceso Negado";
    }