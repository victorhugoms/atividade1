<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>atividade</title>

    <style>

    .cor{
        color:black;
    }
    
    .cor1{
        color:blue;
    }
    .cor2{
        color:red;
    }


    
    </style>

</head>
<body>
<?php

    $valor1=$_GET['valor1'];
    $valor2=$_GET['valor2'];
    $valor3=$_GET['valor3'];



    if($valor1 > $valor2 && $valor2> $valor3 ){
        echo" <p class='cor'>$valor1</p>";
        echo" <p class='cor1'>$valor2</p>";
        echo" <p class='cor2'>$valor3</p>";
    }
    elseif($valor1 > $valor3 && $valor3> $valor2){
        echo" <p class='cor'>$valor1</p>";
        echo" <p class='cor1'>$valor3</p>";
        echo" <p class='cor2'>$valor2</p>";
    }
    elseif($valor2 > $valor1 && $valor1> $valor3){
        echo" <p class='cor'>$valor2</p>";
        echo" <p class='cor1'>$valor1</p>";
        echo" <p class='cor2'>$valor3</p>";
    }
    
    elseif($valor2 > $valor3 && $valor3> $valor1){
        echo" <p class='cor'>$valor2</p>";
        echo" <p class='cor1'>$valor3</p>";
        echo" <p class='cor2'>$valor1</p>";
    }
    elseif($valor3 > $valor1 && $valor1> $valor2){
        echo" <p class='cor'>$valor3</p>";
        echo" <p class='cor1'>$valor1</p>";
        echo" <p class='cor2'>$valor2</p>";
    }
    elseif($valor3 > $valor2 && $valor2> $valor1){

        echo" <p class='cor'>$valor3</p>";
        echo" <p class='cor1'>$valor2</p>";
        echo" <p class='cor2'>$valor1</p>";
    }
?>
    
</body>
</html>
