<?php
function calculadora($valor1,$operador,$valor2){
  switch($operador){
    case "+":
      $resultado = $valor1 + $valor2;
      print_r("El resultado de la suma es: ".$resultado."<br>");
    break;
    case "-":
      $resultado = $valor1 - $valor2;
      print_r("El resultado de la resta es: ".$resultado."<br>");
    break;
    case "*":
      $resultado = $valor1 * $valor2;
    print_r("El resultado de la multiplicacion es: ".$resultado."<br>");
    break;
    case "/":
      $resultado = $valor1 / $valor2;
    print_r("El resultado de la división es: ".$resultado."<br>");
    break;
    default:
    print_r("La operación no es valida");
    break;
  }
}

calculadora(10,"+",2);
calculadora(10,"-",2);
calculadora(10,"*",2);
calculadora(10,"/",2);
?>