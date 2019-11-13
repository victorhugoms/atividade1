<?php

    $quantidade=$_GET['quantidade'];
    $valor= 0.20;
    $preco;

    if($quantidade > 6){
        $valor = 0.15;
        $preco= $valor*$quantidade;
        echo" preço e: $preco";
    }
    else{
        $preco= $valor*$quantidade;
        echo" preço e: $preco";
    }