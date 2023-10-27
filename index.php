<?php
function busqueda($interes,$caracteristica){
  $clima = array(
    "Bogotá" => "frío",
    "Montería" => "calido",
    "Medellín" => "templado",
  );
  $ubicacion = array(
    "Guajira" => "norte",
    "leticia" => "sur",
    "Santander" => "este",
    "Antioquia" => "oeste"
  );
  $turismo = array(
    "Santa Marta" => "mar",
    "Villavicencio" => "llano",
    "Riohacha" => "desierto",
    "Quindío" => "valle"
  );
  
  switch($interes){
    case"clima":
        print_r("La ciudad que te recomendamos es: ".       array_search($caracteristica,$clima));
    break;
    case "ubicacion":
    
      print_r("La ciudad que te recomendamos es: ".array_search($caracteristica,$ubicacion));
    break;
    case "turismo":
      print_r("La ciudad que te recomendamos es: ".array_search($caracteristica,$turismo));
    break;
  }
}
busqueda("clima","templado");
busqueda("ubicacion","norte");
busqueda("turismo","mar");
?>