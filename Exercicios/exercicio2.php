<?php

// Escreva um script que pede o raio de um círculo, e em seguida exiba o perímetro e área do círculo.

 $pi = 3.14 ;
 $raio = readline("Digite o raio do circulo:");
 $perimetro = (2 * $pi) * $raio;
 $area = $pi * ($raio**2);
 
 echo "O perimetro do círculo é ". $perimetro. " e a área do círculo é ". $area;

?>