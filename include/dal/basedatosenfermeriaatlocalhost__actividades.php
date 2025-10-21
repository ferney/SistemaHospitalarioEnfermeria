<?php
$dalTableactividades = array();
$dalTableactividades["id"] = array("type"=>3,"varname"=>"id", "name" => "id", "autoInc" => "1");
$dalTableactividades["nombre"] = array("type"=>200,"varname"=>"nombre", "name" => "nombre", "autoInc" => "0");
$dalTableactividades["id"]["key"]=true;

$dal_info["basedatosenfermeriaatlocalhost__actividades"] = &$dalTableactividades;
?>