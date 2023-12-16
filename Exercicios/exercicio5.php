<?php
//Faça um script que peça 3 notas de um aluno e mostra sua média.

$nota1 = readline("Informe a primeira nota: "); 
$nota2 = readline("Informe a segunda nota: ");
$nota3 = readline("Informe a terceira nota: ");

$media = ($nota1 + $nota2 + $nota3) / 3 ;
$format_media = number_format($media, 2);

echo $format_media;

?>
