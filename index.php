<?php
function suma($valor1,$valor2){
  $resultado = $valor1 + $valor2;
 print_r("La suma es:".$resultado."<br>") ;
}
function resta($valor1,$valor2){
  $resultado = $valor1 - $valor2;
  print_r("La resta es:".$resultado."<br>");
}
function multiplicacion($valor1,$valor2){
  $resultado = $valor1 * $valor2;
  print_r("La multiplicación es:".$resultado."<br>");
}
function division($valor1,$valor2){
  $resultado =  $valor1 / $valor2;
  print_r("La división es:".$resultado."<br>");
}

suma(10,2);
resta(10,2);
multiplicacion(10,2);
division(10,2);
?>