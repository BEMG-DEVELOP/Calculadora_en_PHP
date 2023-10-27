<?php
function busqueda($interes,$caracteristica){
  $clima = [
    "Bogotá" => "frío",
    "Montería" => "calido",
    "Medellín" => "templado",
  ];
  $ubicacion = [
    "Guajira" => "norte",
    "leticia" => "sur",
    "Santander" => "este",
    "Antioquia" => "oeste"
  ];
  $turismo = [
    "Santa Marta" => "mar",
    "Villavicencio" => "llano",
    "Riohacha" => "desierto",
    "Quindío" => "valle"
  ];
  
  switch($interes){
    case"clima":
      print_r("Estas en el caso 1 ".$caracteristica);
    break;
    case "ubicacion":
     print_r("Estas en el caso 2 ".$caracteristica);
    break;
    case "turismo":
     print_r("Estas en el caso 3 ".$caracteristica);
    break;
  }
}
#busqueda("clima","templado");
#busqueda("ubicacion","norte");
busqueda("turismo","mar");
?>