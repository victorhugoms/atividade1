<?php

    $ano=$_GET['ano'];
    $resultado;

    $resultado = 2019 - $ano;

    if($resultado >= 18){
        echo"<img src='img/positivo.jpg'>";
        
    }
    else{
        echo"<img src='img/negativo.jpg'>";
    }