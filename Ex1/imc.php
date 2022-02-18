<?php

    $altura = $_POST["altura"];
    $peso = $_POST["peso"];
    $resultado = 0;

    $altura = $altura/100; 
    $resultado = $peso/(pow ($altura, 2));
    print "<br> <p align=center> Sua massa corporal atual é: " . round($resultado, 2) . "</p> <br>";

    if($resultado < 20) {
        print "<h1 align=center>Você está magro!</h1>";
    } else if(($resultado > 20) && ($resultado < 25)) {
        print "<h1 align=center>Você está no peso ideal!</h1>";
    } else {
        print "<h1 align=center>Você está acima do peso!</h1>";
    }