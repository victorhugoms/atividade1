<?php

    $altura=$_GET['altura'];
    $sexo=$_GET['sexo'];
    $sexom = 'masculino';
    $sexof = 'feminino';
    $resultado;

    if ($sexo == $sexom){

       $resultado=(72.7*$altura)-58;
       echo"$resultado";

    }
    elseif($sexo == $sexof){
        $resultado= (62.1*$altura)-44.7;
        echo"$resultado";

    }