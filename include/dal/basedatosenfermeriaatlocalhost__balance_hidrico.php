<?php
$dalTablebalance_hidrico = array();
$dalTablebalance_hidrico["id_balance"] = array("type"=>3,"varname"=>"id_balance", "name" => "id_balance", "autoInc" => "1");
$dalTablebalance_hidrico["paciente_id"] = array("type"=>3,"varname"=>"paciente_id", "name" => "paciente_id", "autoInc" => "0");
$dalTablebalance_hidrico["fecha"] = array("type"=>7,"varname"=>"fecha", "name" => "fecha", "autoInc" => "0");
$dalTablebalance_hidrico["total_administrados"] = array("type"=>14,"varname"=>"total_administrados", "name" => "total_administrados", "autoInc" => "0");
$dalTablebalance_hidrico["total_eliminados"] = array("type"=>14,"varname"=>"total_eliminados", "name" => "total_eliminados", "autoInc" => "0");
$dalTablebalance_hidrico["balance"] = array("type"=>14,"varname"=>"balance", "name" => "balance", "autoInc" => "0");
$dalTablebalance_hidrico["gasto_urinario"] = array("type"=>14,"varname"=>"gasto_urinario", "name" => "gasto_urinario", "autoInc" => "0");
$dalTablebalance_hidrico["id_balance"]["key"]=true;

$dal_info["basedatosenfermeriaatlocalhost__balance_hidrico"] = &$dalTablebalance_hidrico;
?>