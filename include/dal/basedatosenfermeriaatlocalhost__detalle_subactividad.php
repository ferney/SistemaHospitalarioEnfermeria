<?php
$dalTabledetalle_subactividad = array();
$dalTabledetalle_subactividad["id"] = array("type"=>3,"varname"=>"id", "name" => "id", "autoInc" => "1");
$dalTabledetalle_subactividad["subactividad_id"] = array("type"=>3,"varname"=>"subactividad_id", "name" => "subactividad_id", "autoInc" => "0");
$dalTabledetalle_subactividad["paciente_id"] = array("type"=>3,"varname"=>"paciente_id", "name" => "paciente_id", "autoInc" => "0");
$dalTabledetalle_subactividad["fecha"] = array("type"=>135,"varname"=>"fecha", "name" => "fecha", "autoInc" => "0");
$dalTabledetalle_subactividad["observacion"] = array("type"=>201,"varname"=>"observacion", "name" => "observacion", "autoInc" => "0");
$dalTabledetalle_subactividad["responsable"] = array("type"=>200,"varname"=>"responsable", "name" => "responsable", "autoInc" => "0");
$dalTabledetalle_subactividad["area_servicio"] = array("type"=>200,"varname"=>"area_servicio", "name" => "area_servicio", "autoInc" => "0");
$dalTabledetalle_subactividad["id"]["key"]=true;

$dal_info["basedatosenfermeriaatlocalhost__detalle_subactividad"] = &$dalTabledetalle_subactividad;
?>