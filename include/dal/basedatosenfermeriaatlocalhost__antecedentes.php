<?php
$dalTableantecedentes = array();
$dalTableantecedentes["id_antecedente"] = array("type"=>3,"varname"=>"id_antecedente", "name" => "id_antecedente", "autoInc" => "1");
$dalTableantecedentes["paciente_id"] = array("type"=>3,"varname"=>"paciente_id", "name" => "paciente_id", "autoInc" => "0");
$dalTableantecedentes["alergicos"] = array("type"=>201,"varname"=>"alergicos", "name" => "alergicos", "autoInc" => "0");
$dalTableantecedentes["enfermedad_actual"] = array("type"=>201,"varname"=>"enfermedad_actual", "name" => "enfermedad_actual", "autoInc" => "0");
$dalTableantecedentes["farmacologicos"] = array("type"=>201,"varname"=>"farmacologicos", "name" => "farmacologicos", "autoInc" => "0");
$dalTableantecedentes["familiares"] = array("type"=>201,"varname"=>"familiares", "name" => "familiares", "autoInc" => "0");
$dalTableantecedentes["patologicos"] = array("type"=>201,"varname"=>"patologicos", "name" => "patologicos", "autoInc" => "0");
$dalTableantecedentes["quirurgicos"] = array("type"=>201,"varname"=>"quirurgicos", "name" => "quirurgicos", "autoInc" => "0");
$dalTableantecedentes["id_antecedente"]["key"]=true;

$dal_info["basedatosenfermeriaatlocalhost__antecedentes"] = &$dalTableantecedentes;
?>