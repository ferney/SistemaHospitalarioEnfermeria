<?php
$dalTableescala_correccion = array();
$dalTableescala_correccion["rango_id"] = array("type"=>3,"varname"=>"rango_id", "name" => "rango_id", "autoInc" => "1");
$dalTableescala_correccion["glucemia_min"] = array("type"=>3,"varname"=>"glucemia_min", "name" => "glucemia_min", "autoInc" => "0");
$dalTableescala_correccion["glucemia_max"] = array("type"=>3,"varname"=>"glucemia_max", "name" => "glucemia_max", "autoInc" => "0");
$dalTableescala_correccion["valor_correccion"] = array("type"=>3,"varname"=>"valor_correccion", "name" => "valor_correccion", "autoInc" => "0");
$dalTableescala_correccion["rango_id"]["key"]=true;

$dal_info["basedatosenfermeriaatlocalhost__escala_correccion"] = &$dalTableescala_correccion;
?>