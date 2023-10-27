<?php
function suma(){
  $valor1 = 8;
  $valor2 = 10;
  $resultado = $valor1 + $valor2;
 print_r("La suma es:".$resultado."<br>") ;
}
function resta(){
  $valor1 = 10;
  $valor2 = 5;
  $resultado = $valor1 - $valor2;
  print_r("La resta es:".$resultado."<br>");
}
function multiplicacion(){
  $valor1 = 3;
  $valor2 = 10;
  $resultado = $valor1 * $valor2;
  print_r("La multiplicación es:".$resultado."<br>");
}
function division(){
  $valor1 = 10;
  $valor2 = 2;
  $resultado =  $valor1 / $valor2;
  print_r("La división es:".$resultado."<br>");
}

suma();
resta();
multiplicacion();
division();
?>