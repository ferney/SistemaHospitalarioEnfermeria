<?php
$dalTablepacientes = array();
$dalTablepacientes["id_paciente"] = array("type"=>3,"varname"=>"id_paciente", "name" => "id_paciente", "autoInc" => "1");
$dalTablepacientes["tipo_documento"] = array("type"=>200,"varname"=>"tipo_documento", "name" => "tipo_documento", "autoInc" => "0");
$dalTablepacientes["identificacion"] = array("type"=>200,"varname"=>"identificacion", "name" => "identificacion", "autoInc" => "0");
$dalTablepacientes["primer_nombre"] = array("type"=>200,"varname"=>"primer_nombre", "name" => "primer_nombre", "autoInc" => "0");
$dalTablepacientes["segundo_nombre"] = array("type"=>200,"varname"=>"segundo_nombre", "name" => "segundo_nombre", "autoInc" => "0");
$dalTablepacientes["primer_apellido"] = array("type"=>200,"varname"=>"primer_apellido", "name" => "primer_apellido", "autoInc" => "0");
$dalTablepacientes["segundo_apellido"] = array("type"=>200,"varname"=>"segundo_apellido", "name" => "segundo_apellido", "autoInc" => "0");
$dalTablepacientes["nombre_completo"] = array("type"=>200,"varname"=>"nombre_completo", "name" => "nombre_completo", "autoInc" => "0");
$dalTablepacientes["edad"] = array("type"=>3,"varname"=>"edad", "name" => "edad", "autoInc" => "0");
$dalTablepacientes["sexo"] = array("type"=>129,"varname"=>"sexo", "name" => "sexo", "autoInc" => "0");
$dalTablepacientes["estado_civil"] = array("type"=>200,"varname"=>"estado_civil", "name" => "estado_civil", "autoInc" => "0");
$dalTablepacientes["telefono"] = array("type"=>200,"varname"=>"telefono", "name" => "telefono", "autoInc" => "0");
$dalTablepacientes["direccion"] = array("type"=>201,"varname"=>"direccion", "name" => "direccion", "autoInc" => "0");
$dalTablepacientes["ciudad_mpio"] = array("type"=>200,"varname"=>"ciudad_mpio", "name" => "ciudad_mpio", "autoInc" => "0");
$dalTablepacientes["entidad_eapb"] = array("type"=>200,"varname"=>"entidad_eapb", "name" => "entidad_eapb", "autoInc" => "0");
$dalTablepacientes["riesgo"] = array("type"=>200,"varname"=>"riesgo", "name" => "riesgo", "autoInc" => "0");
$dalTablepacientes["cama"] = array("type"=>200,"varname"=>"cama", "name" => "cama", "autoInc" => "0");
$dalTablepacientes["servicio"] = array("type"=>200,"varname"=>"servicio", "name" => "servicio", "autoInc" => "0");
$dalTablepacientes["motivo_consulta"] = array("type"=>201,"varname"=>"motivo_consulta", "name" => "motivo_consulta", "autoInc" => "0");
$dalTablepacientes["turno"] = array("type"=>129,"varname"=>"turno", "name" => "turno", "autoInc" => "0");
$dalTablepacientes["fecha_ingreso"] = array("type"=>7,"varname"=>"fecha_ingreso", "name" => "fecha_ingreso", "autoInc" => "0");
$dalTablepacientes["creado_en"] = array("type"=>135,"varname"=>"creado_en", "name" => "creado_en", "autoInc" => "0");
$dalTablepacientes["actualizado_en"] = array("type"=>135,"varname"=>"actualizado_en", "name" => "actualizado_en", "autoInc" => "0");
$dalTablepacientes["id_paciente"]["key"]=true;

$dal_info["basedatosenfermeriaatlocalhost__pacientes"] = &$dalTablepacientes;
?>