<?php

    $lista1 = [1, 2, 3];
    $lista2 = [1, 2, 3];
    $resultado = [];

    for ($i=0; $i<3 ; $i++) { 
        
        $linha=[];
        
        for ($x=0; $x<3; $x++) {
            
            array_push($linha, $lista1[$i] * $lista2[$x]);

            }

            array_push($resultado, $linha);

        }

    echo var_dump($resultado);