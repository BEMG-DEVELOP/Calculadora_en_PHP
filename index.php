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
      switch($caracteristica){
        case"frío":
          $busqueda = array_search("frío",$clima);
        break;
        case"calido":
          $busqueda = array_search("calido",$clima);
        break;
        case "templado":
          $busqueda = array_search("templado",$clima);
        break;
      }
        print_r("La ciudad que te recomendamos es: ".$busqueda);
    break;
    case "ubicacion":
    switch($caracteristica){
        case"norte":
          $busqueda = array_search("norte",$ubicacion);
        break;
        case"sur":
          $busqueda = array_search("sur",$ubicacion);
        break;
        case "este":
          $busqueda = array_search("este",$ubicacion);
        break;
        case "oeste":
          $busqueda = array_search("oeste",$ubicacion);
        break;
    }
      print_r("La ciudad que te recomendamos es: ".$busqueda);
    break;
    case "turismo":
    switch($caracteristica){
        case"mar":
          $busqueda = array_search("mar",$turismo);
        break;
        case"llano":
          $busqueda = array_search("llano",$turismo);
        break;
        case "desierto":
          $busqueda = array_search("desierto",$turismo);
        break;
        case "valle":
          $busqueda = array_search("valle",$turismo);
        break;
    }
      print_r("La ciudad que te recomendamos es: ".$busqueda);
    break;
  }
}
busqueda("clima","templado");
busqueda("ubicacion","norte");
busqueda("turismo","mar");
?>