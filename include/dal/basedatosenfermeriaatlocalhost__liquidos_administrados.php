<?php
$dalTableliquidos_administrados = array();
$dalTableliquidos_administrados["id_admin"] = array("type"=>3,"varname"=>"id_admin", "name" => "id_admin", "autoInc" => "1");
$dalTableliquidos_administrados["paciente_id"] = array("type"=>3,"varname"=>"paciente_id", "name" => "paciente_id", "autoInc" => "0");
$dalTableliquidos_administrados["fecha_hora"] = array("type"=>135,"varname"=>"fecha_hora", "name" => "fecha_hora", "autoInc" => "0");
$dalTableliquidos_administrados["cantidad_ordenada"] = array("type"=>14,"varname"=>"cantidad_ordenada", "name" => "cantidad_ordenada", "autoInc" => "0");
$dalTableliquidos_administrados["cantidad_administrada"] = array("type"=>14,"varname"=>"cantidad_administrada", "name" => "cantidad_administrada", "autoInc" => "0");
$dalTableliquidos_administrados["via"] = array("type"=>200,"varname"=>"via", "name" => "via", "autoInc" => "0");
$dalTableliquidos_administrados["tipo"] = array("type"=>200,"varname"=>"tipo", "name" => "tipo", "autoInc" => "0");
$dalTableliquidos_administrados["enfermero"] = array("type"=>200,"varname"=>"enfermero", "name" => "enfermero", "autoInc" => "0");
$dalTableliquidos_administrados["hora_inicial"] = array("type"=>134,"varname"=>"hora_inicial", "name" => "hora_inicial", "autoInc" => "0");
$dalTableliquidos_administrados["hora_final"] = array("type"=>134,"varname"=>"hora_final", "name" => "hora_final", "autoInc" => "0");
$dalTableliquidos_administrados["liquido"] = array("type"=>200,"varname"=>"liquido", "name" => "liquido", "autoInc" => "0");
$dalTableliquidos_administrados["cantidad"] = array("type"=>14,"varname"=>"cantidad", "name" => "cantidad", "autoInc" => "0");
$dalTableliquidos_administrados["id_admin"]["key"]=true;

$dal_info["basedatosenfermeriaatlocalhost__liquidos_administrados"] = &$dalTableliquidos_administrados;
?>