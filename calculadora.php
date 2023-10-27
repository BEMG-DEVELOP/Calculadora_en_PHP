<?php
function calculadora($valor1,$operador,$valor2){
  switch($operador){
    case "+":
      $resultado = $valor1 + $valor2;
    break;
    case "-":
      $resultado = $valor1 - $valor2;
    break;
    case "*":
      $resultado = $valor1 * $valor2;
    break;
    case "/":
      $resultado = $valor1 / $valor2;
    break;
    default:
    print_r("La operación no es valida");
    break;
  }
  print_r("El resultado de la operación es: ".$resultado."<br>");
}

calculadora(10,"%",2);
calculadora(10,"-",2);
calculadora(10,"*",2);
calculadora(10,"/",2);
?>