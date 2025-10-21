<?php
$dalTablesubactividades = array();
$dalTablesubactividades["id"] = array("type"=>3,"varname"=>"id", "name" => "id", "autoInc" => "1");
$dalTablesubactividades["actividad_id"] = array("type"=>3,"varname"=>"actividad_id", "name" => "actividad_id", "autoInc" => "0");
$dalTablesubactividades["nombre"] = array("type"=>200,"varname"=>"nombre", "name" => "nombre", "autoInc" => "0");
$dalTablesubactividades["id"]["key"]=true;

$dal_info["basedatosenfermeriaatlocalhost__subactividades"] = &$dalTablesubactividades;
?>