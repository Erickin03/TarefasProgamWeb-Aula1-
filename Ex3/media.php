<?php

    $nota1 = $_POST["nota1"];
    $nota2 = $_POST["nota2"];
    $media;

    $media = ($nota1 + $nota2)/2;

    print "Sua média é " . $media . "</br> </br>";

    if ($media < 60){
        print "Você está reprovado !!";
    } else {
        print "Você está aprovado !!";
    }