<?php
$dalTableregistros_glucometria = array();
$dalTableregistros_glucometria["registro_id"] = array("type"=>3,"varname"=>"registro_id", "name" => "registro_id", "autoInc" => "1");
$dalTableregistros_glucometria["paciente_id"] = array("type"=>3,"varname"=>"paciente_id", "name" => "paciente_id", "autoInc" => "0");
$dalTableregistros_glucometria["fecha"] = array("type"=>7,"varname"=>"fecha", "name" => "fecha", "autoInc" => "0");
$dalTableregistros_glucometria["hora"] = array("type"=>134,"varname"=>"hora", "name" => "hora", "autoInc" => "0");
$dalTableregistros_glucometria["glucometria_pre"] = array("type"=>3,"varname"=>"glucometria_pre", "name" => "glucometria_pre", "autoInc" => "0");
$dalTableregistros_glucometria["glucometria_post"] = array("type"=>3,"varname"=>"glucometria_post", "name" => "glucometria_post", "autoInc" => "0");
$dalTableregistros_glucometria["valor_correccion"] = array("type"=>3,"varname"=>"valor_correccion", "name" => "valor_correccion", "autoInc" => "0");
$dalTableregistros_glucometria["nota_enfermeria"] = array("type"=>201,"varname"=>"nota_enfermeria", "name" => "nota_enfermeria", "autoInc" => "0");
$dalTableregistros_glucometria["creado_en"] = array("type"=>135,"varname"=>"creado_en", "name" => "creado_en", "autoInc" => "0");
$dalTableregistros_glucometria["actualizado_en"] = array("type"=>135,"varname"=>"actualizado_en", "name" => "actualizado_en", "autoInc" => "0");
$dalTableregistros_glucometria["registro_id"]["key"]=true;

$dal_info["basedatosenfermeriaatlocalhost__registros_glucometria"] = &$dalTableregistros_glucometria;
?>