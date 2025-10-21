<?php
$dalTableliquidos_eliminados = array();
$dalTableliquidos_eliminados["id_eliminado"] = array("type"=>3,"varname"=>"id_eliminado", "name" => "id_eliminado", "autoInc" => "1");
$dalTableliquidos_eliminados["paciente_id"] = array("type"=>3,"varname"=>"paciente_id", "name" => "paciente_id", "autoInc" => "0");
$dalTableliquidos_eliminados["fecha_hora"] = array("type"=>135,"varname"=>"fecha_hora", "name" => "fecha_hora", "autoInc" => "0");
$dalTableliquidos_eliminados["hora_eliminado"] = array("type"=>134,"varname"=>"hora_eliminado", "name" => "hora_eliminado", "autoInc" => "0");
$dalTableliquidos_eliminados["tipo_liquido"] = array("type"=>200,"varname"=>"tipo_liquido", "name" => "tipo_liquido", "autoInc" => "0");
$dalTableliquidos_eliminados["via_eliminacion"] = array("type"=>200,"varname"=>"via_eliminacion", "name" => "via_eliminacion", "autoInc" => "0");
$dalTableliquidos_eliminados["cantidad"] = array("type"=>14,"varname"=>"cantidad", "name" => "cantidad", "autoInc" => "0");
$dalTableliquidos_eliminados["caracteristicas"] = array("type"=>200,"varname"=>"caracteristicas", "name" => "caracteristicas", "autoInc" => "0");
$dalTableliquidos_eliminados["enfermero"] = array("type"=>200,"varname"=>"enfermero", "name" => "enfermero", "autoInc" => "0");
$dalTableliquidos_eliminados["id_eliminado"]["key"]=true;

$dal_info["basedatosenfermeriaatlocalhost__liquidos_eliminados"] = &$dalTableliquidos_eliminados;
?>