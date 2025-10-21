<?php
$dalTablesignos_vitales = array();
$dalTablesignos_vitales["id_registro"] = array("type"=>3,"varname"=>"id_registro", "name" => "id_registro", "autoInc" => "1");
$dalTablesignos_vitales["paciente_id"] = array("type"=>3,"varname"=>"paciente_id", "name" => "paciente_id", "autoInc" => "0");
$dalTablesignos_vitales["fecha"] = array("type"=>7,"varname"=>"fecha", "name" => "fecha", "autoInc" => "0");
$dalTablesignos_vitales["hora"] = array("type"=>134,"varname"=>"hora", "name" => "hora", "autoInc" => "0");
$dalTablesignos_vitales["frecuencia_cardiaca"] = array("type"=>3,"varname"=>"frecuencia_cardiaca", "name" => "frecuencia_cardiaca", "autoInc" => "0");
$dalTablesignos_vitales["frecuencia_respiratoria"] = array("type"=>3,"varname"=>"frecuencia_respiratoria", "name" => "frecuencia_respiratoria", "autoInc" => "0");
$dalTablesignos_vitales["tension_arterial"] = array("type"=>200,"varname"=>"tension_arterial", "name" => "tension_arterial", "autoInc" => "0");
$dalTablesignos_vitales["tension_arterial_media"] = array("type"=>3,"varname"=>"tension_arterial_media", "name" => "tension_arterial_media", "autoInc" => "0");
$dalTablesignos_vitales["temperatura"] = array("type"=>14,"varname"=>"temperatura", "name" => "temperatura", "autoInc" => "0");
$dalTablesignos_vitales["saturacion_oxigeno"] = array("type"=>14,"varname"=>"saturacion_oxigeno", "name" => "saturacion_oxigeno", "autoInc" => "0");
$dalTablesignos_vitales["observaciones"] = array("type"=>201,"varname"=>"observaciones", "name" => "observaciones", "autoInc" => "0");
$dalTablesignos_vitales["id_registro"]["key"]=true;

$dal_info["basedatosenfermeriaatlocalhost__signos_vitales"] = &$dalTablesignos_vitales;
?>