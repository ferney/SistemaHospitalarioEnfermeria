<?php
$dalTablemedicamentos = array();
$dalTablemedicamentos["id_medicamento"] = array("type"=>3,"varname"=>"id_medicamento", "name" => "id_medicamento", "autoInc" => "1");
$dalTablemedicamentos["paciente_id"] = array("type"=>3,"varname"=>"paciente_id", "name" => "paciente_id", "autoInc" => "0");
$dalTablemedicamentos["fecha"] = array("type"=>135,"varname"=>"fecha", "name" => "fecha", "autoInc" => "0");
$dalTablemedicamentos["nombre"] = array("type"=>200,"varname"=>"nombre", "name" => "nombre", "autoInc" => "0");
$dalTablemedicamentos["cantidad"] = array("type"=>3,"varname"=>"cantidad", "name" => "cantidad", "autoInc" => "0");
$dalTablemedicamentos["via"] = array("type"=>200,"varname"=>"via", "name" => "via", "autoInc" => "0");
$dalTablemedicamentos["dosis"] = array("type"=>200,"varname"=>"dosis", "name" => "dosis", "autoInc" => "0");
$dalTablemedicamentos["administrado"] = array("type"=>16,"varname"=>"administrado", "name" => "administrado", "autoInc" => "0");
$dalTablemedicamentos["id_medicamento"]["key"]=true;

$dal_info["basedatosenfermeriaatlocalhost__medicamentos"] = &$dalTablemedicamentos;
?>