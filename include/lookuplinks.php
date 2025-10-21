<?php

/**
* getLookupMainTableSettings - tests whether the lookup link exists between the tables
*
*  returns array with ProjectSettings class for main table if the link exists in project settings.
*  returns NULL otherwise
*/
function getLookupMainTableSettings($lookupTable, $mainTableShortName, $mainField, $desiredPage = "")
{
	global $lookupTableLinks;
	if(!isset($lookupTableLinks[$lookupTable]))
		return null;
	if(!isset($lookupTableLinks[$lookupTable][$mainTableShortName.".".$mainField]))
		return null;
	$arr = &$lookupTableLinks[$lookupTable][$mainTableShortName.".".$mainField];
	$effectivePage = $desiredPage;
	if(!isset($arr[$effectivePage]))
	{
		$effectivePage = PAGE_EDIT;
		if(!isset($arr[$effectivePage]))
		{
			if($desiredPage == "" && 0 < count($arr))
			{
				$effectivePage = $arr[0];
			}
			else
				return null;
		}
	}
	return new ProjectSettings($arr[$effectivePage]["table"], $effectivePage);
}

/** 
* $lookupTableLinks array stores all lookup links between tables in the project
*/
function InitLookupLinks()
{
	global $lookupTableLinks;

	$lookupTableLinks = array();

		if( !isset( $lookupTableLinks["pacientes"] ) ) {
			$lookupTableLinks["pacientes"] = array();
		}
		if( !isset( $lookupTableLinks["pacientes"]["antecedentes.paciente_id"] )) {
			$lookupTableLinks["pacientes"]["antecedentes.paciente_id"] = array();
		}
		$lookupTableLinks["pacientes"]["antecedentes.paciente_id"]["edit"] = array("table" => "antecedentes", "field" => "paciente_id", "page" => "edit");
		if( !isset( $lookupTableLinks["pacientes"] ) ) {
			$lookupTableLinks["pacientes"] = array();
		}
		if( !isset( $lookupTableLinks["pacientes"]["balance_hidrico.paciente_id"] )) {
			$lookupTableLinks["pacientes"]["balance_hidrico.paciente_id"] = array();
		}
		$lookupTableLinks["pacientes"]["balance_hidrico.paciente_id"]["edit"] = array("table" => "balance_hidrico", "field" => "paciente_id", "page" => "edit");
		if( !isset( $lookupTableLinks["subactividades"] ) ) {
			$lookupTableLinks["subactividades"] = array();
		}
		if( !isset( $lookupTableLinks["subactividades"]["detalle_subactividad.subactividad_id"] )) {
			$lookupTableLinks["subactividades"]["detalle_subactividad.subactividad_id"] = array();
		}
		$lookupTableLinks["subactividades"]["detalle_subactividad.subactividad_id"]["edit"] = array("table" => "detalle_subactividad", "field" => "subactividad_id", "page" => "edit");
		if( !isset( $lookupTableLinks["pacientes"] ) ) {
			$lookupTableLinks["pacientes"] = array();
		}
		if( !isset( $lookupTableLinks["pacientes"]["detalle_subactividad.paciente_id"] )) {
			$lookupTableLinks["pacientes"]["detalle_subactividad.paciente_id"] = array();
		}
		$lookupTableLinks["pacientes"]["detalle_subactividad.paciente_id"]["edit"] = array("table" => "detalle_subactividad", "field" => "paciente_id", "page" => "edit");
		if( !isset( $lookupTableLinks["pacientes"] ) ) {
			$lookupTableLinks["pacientes"] = array();
		}
		if( !isset( $lookupTableLinks["pacientes"]["liquidos_administrados.paciente_id"] )) {
			$lookupTableLinks["pacientes"]["liquidos_administrados.paciente_id"] = array();
		}
		$lookupTableLinks["pacientes"]["liquidos_administrados.paciente_id"]["edit"] = array("table" => "liquidos_administrados", "field" => "paciente_id", "page" => "edit");
		if( !isset( $lookupTableLinks["pacientes"] ) ) {
			$lookupTableLinks["pacientes"] = array();
		}
		if( !isset( $lookupTableLinks["pacientes"]["liquidos_eliminados.paciente_id"] )) {
			$lookupTableLinks["pacientes"]["liquidos_eliminados.paciente_id"] = array();
		}
		$lookupTableLinks["pacientes"]["liquidos_eliminados.paciente_id"]["edit"] = array("table" => "liquidos_eliminados", "field" => "paciente_id", "page" => "edit");
		if( !isset( $lookupTableLinks["pacientes"] ) ) {
			$lookupTableLinks["pacientes"] = array();
		}
		if( !isset( $lookupTableLinks["pacientes"]["medicamentos.paciente_id"] )) {
			$lookupTableLinks["pacientes"]["medicamentos.paciente_id"] = array();
		}
		$lookupTableLinks["pacientes"]["medicamentos.paciente_id"]["edit"] = array("table" => "medicamentos", "field" => "paciente_id", "page" => "edit");
		if( !isset( $lookupTableLinks["pacientes"] ) ) {
			$lookupTableLinks["pacientes"] = array();
		}
		if( !isset( $lookupTableLinks["pacientes"]["signos_vitales.paciente_id"] )) {
			$lookupTableLinks["pacientes"]["signos_vitales.paciente_id"] = array();
		}
		$lookupTableLinks["pacientes"]["signos_vitales.paciente_id"]["edit"] = array("table" => "signos_vitales", "field" => "paciente_id", "page" => "edit");
		if( !isset( $lookupTableLinks["actividades"] ) ) {
			$lookupTableLinks["actividades"] = array();
		}
		if( !isset( $lookupTableLinks["actividades"]["subactividades.actividad_id"] )) {
			$lookupTableLinks["actividades"]["subactividades.actividad_id"] = array();
		}
		$lookupTableLinks["actividades"]["subactividades.actividad_id"]["edit"] = array("table" => "subactividades", "field" => "actividad_id", "page" => "edit");
		if( !isset( $lookupTableLinks["pacientes"] ) ) {
			$lookupTableLinks["pacientes"] = array();
		}
		if( !isset( $lookupTableLinks["pacientes"]["tarjeta_medicamentos_completa.paciente_id"] )) {
			$lookupTableLinks["pacientes"]["tarjeta_medicamentos_completa.paciente_id"] = array();
		}
		$lookupTableLinks["pacientes"]["tarjeta_medicamentos_completa.paciente_id"]["edit"] = array("table" => "tarjeta_medicamentos_completa", "field" => "paciente_id", "page" => "edit");
		if( !isset( $lookupTableLinks["pacientes"] ) ) {
			$lookupTableLinks["pacientes"] = array();
		}
		if( !isset( $lookupTableLinks["pacientes"]["registros_glucometria.paciente_id"] )) {
			$lookupTableLinks["pacientes"]["registros_glucometria.paciente_id"] = array();
		}
		$lookupTableLinks["pacientes"]["registros_glucometria.paciente_id"]["edit"] = array("table" => "registros_glucometria", "field" => "paciente_id", "page" => "edit");
}

?>