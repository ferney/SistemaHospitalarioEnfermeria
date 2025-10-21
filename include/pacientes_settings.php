<?php
$tdatapacientes = array();
$tdatapacientes[".searchableFields"] = array();
$tdatapacientes[".ShortName"] = "pacientes";
$tdatapacientes[".OwnerID"] = "";
$tdatapacientes[".OriginalTable"] = "pacientes";


$tdatapacientes[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatapacientes[".originalPagesByType"] = $tdatapacientes[".pagesByType"];
$tdatapacientes[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatapacientes[".originalPages"] = $tdatapacientes[".pages"];
$tdatapacientes[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatapacientes[".originalDefaultPages"] = $tdatapacientes[".defaultPages"];

//	field labels
$fieldLabelspacientes = array();
$fieldToolTipspacientes = array();
$pageTitlespacientes = array();
$placeHolderspacientes = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelspacientes["English"] = array();
	$fieldToolTipspacientes["English"] = array();
	$placeHolderspacientes["English"] = array();
	$pageTitlespacientes["English"] = array();
	$fieldLabelspacientes["English"]["id_paciente"] = "Id Paciente";
	$fieldToolTipspacientes["English"]["id_paciente"] = "";
	$placeHolderspacientes["English"]["id_paciente"] = "";
	$fieldLabelspacientes["English"]["tipo_documento"] = "Tipo Documento";
	$fieldToolTipspacientes["English"]["tipo_documento"] = "";
	$placeHolderspacientes["English"]["tipo_documento"] = "";
	$fieldLabelspacientes["English"]["identificacion"] = "Identificacion";
	$fieldToolTipspacientes["English"]["identificacion"] = "";
	$placeHolderspacientes["English"]["identificacion"] = "";
	$fieldLabelspacientes["English"]["primer_nombre"] = "Primer Nombre";
	$fieldToolTipspacientes["English"]["primer_nombre"] = "";
	$placeHolderspacientes["English"]["primer_nombre"] = "";
	$fieldLabelspacientes["English"]["segundo_nombre"] = "Segundo Nombre";
	$fieldToolTipspacientes["English"]["segundo_nombre"] = "";
	$placeHolderspacientes["English"]["segundo_nombre"] = "";
	$fieldLabelspacientes["English"]["primer_apellido"] = "Primer Apellido";
	$fieldToolTipspacientes["English"]["primer_apellido"] = "";
	$placeHolderspacientes["English"]["primer_apellido"] = "";
	$fieldLabelspacientes["English"]["segundo_apellido"] = "Segundo Apellido";
	$fieldToolTipspacientes["English"]["segundo_apellido"] = "";
	$placeHolderspacientes["English"]["segundo_apellido"] = "";
	$fieldLabelspacientes["English"]["nombre_completo"] = "Nombre Completo";
	$fieldToolTipspacientes["English"]["nombre_completo"] = "";
	$placeHolderspacientes["English"]["nombre_completo"] = "";
	$fieldLabelspacientes["English"]["edad"] = "Edad";
	$fieldToolTipspacientes["English"]["edad"] = "";
	$placeHolderspacientes["English"]["edad"] = "";
	$fieldLabelspacientes["English"]["sexo"] = "Sexo";
	$fieldToolTipspacientes["English"]["sexo"] = "";
	$placeHolderspacientes["English"]["sexo"] = "";
	$fieldLabelspacientes["English"]["estado_civil"] = "Estado Civil";
	$fieldToolTipspacientes["English"]["estado_civil"] = "";
	$placeHolderspacientes["English"]["estado_civil"] = "";
	$fieldLabelspacientes["English"]["telefono"] = "Telefono";
	$fieldToolTipspacientes["English"]["telefono"] = "";
	$placeHolderspacientes["English"]["telefono"] = "";
	$fieldLabelspacientes["English"]["direccion"] = "Direccion";
	$fieldToolTipspacientes["English"]["direccion"] = "";
	$placeHolderspacientes["English"]["direccion"] = "";
	$fieldLabelspacientes["English"]["ciudad_mpio"] = "Ciudad Mpio";
	$fieldToolTipspacientes["English"]["ciudad_mpio"] = "";
	$placeHolderspacientes["English"]["ciudad_mpio"] = "";
	$fieldLabelspacientes["English"]["entidad_eapb"] = "Entidad Eapb";
	$fieldToolTipspacientes["English"]["entidad_eapb"] = "";
	$placeHolderspacientes["English"]["entidad_eapb"] = "";
	$fieldLabelspacientes["English"]["riesgo"] = "Riesgo";
	$fieldToolTipspacientes["English"]["riesgo"] = "";
	$placeHolderspacientes["English"]["riesgo"] = "";
	$fieldLabelspacientes["English"]["cama"] = "Cama";
	$fieldToolTipspacientes["English"]["cama"] = "";
	$placeHolderspacientes["English"]["cama"] = "";
	$fieldLabelspacientes["English"]["servicio"] = "Servicio";
	$fieldToolTipspacientes["English"]["servicio"] = "";
	$placeHolderspacientes["English"]["servicio"] = "";
	$fieldLabelspacientes["English"]["motivo_consulta"] = "Motivo Consulta";
	$fieldToolTipspacientes["English"]["motivo_consulta"] = "";
	$placeHolderspacientes["English"]["motivo_consulta"] = "";
	$fieldLabelspacientes["English"]["turno"] = "Turno";
	$fieldToolTipspacientes["English"]["turno"] = "";
	$placeHolderspacientes["English"]["turno"] = "";
	$fieldLabelspacientes["English"]["fecha_ingreso"] = "Fecha Ingreso";
	$fieldToolTipspacientes["English"]["fecha_ingreso"] = "";
	$placeHolderspacientes["English"]["fecha_ingreso"] = "";
	$fieldLabelspacientes["English"]["creado_en"] = "Creado En";
	$fieldToolTipspacientes["English"]["creado_en"] = "";
	$placeHolderspacientes["English"]["creado_en"] = "";
	$fieldLabelspacientes["English"]["actualizado_en"] = "Actualizado En";
	$fieldToolTipspacientes["English"]["actualizado_en"] = "";
	$placeHolderspacientes["English"]["actualizado_en"] = "";
	if (count($fieldToolTipspacientes["English"]))
		$tdatapacientes[".isUseToolTips"] = true;
}


	$tdatapacientes[".NCSearch"] = true;



$tdatapacientes[".shortTableName"] = "pacientes";
$tdatapacientes[".nSecOptions"] = 0;

$tdatapacientes[".mainTableOwnerID"] = "";
$tdatapacientes[".entityType"] = 0;
$tdatapacientes[".connId"] = "basedatosenfermeriaatlocalhost";


$tdatapacientes[".strOriginalTableName"] = "pacientes";

	



$tdatapacientes[".showAddInPopup"] = false;

$tdatapacientes[".showEditInPopup"] = false;

$tdatapacientes[".showViewInPopup"] = false;

$tdatapacientes[".listAjax"] = false;
//	temporary
//$tdatapacientes[".listAjax"] = false;

	$tdatapacientes[".audit"] = false;

	$tdatapacientes[".locking"] = false;


$pages = $tdatapacientes[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatapacientes[".edit"] = true;
	$tdatapacientes[".afterEditAction"] = 1;
	$tdatapacientes[".closePopupAfterEdit"] = 1;
	$tdatapacientes[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatapacientes[".add"] = true;
$tdatapacientes[".afterAddAction"] = 1;
$tdatapacientes[".closePopupAfterAdd"] = 1;
$tdatapacientes[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatapacientes[".list"] = true;
}



$tdatapacientes[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatapacientes[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatapacientes[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatapacientes[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatapacientes[".printFriendly"] = true;
}



$tdatapacientes[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatapacientes[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatapacientes[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatapacientes[".isUseAjaxSuggest"] = true;





$tdatapacientes[".ajaxCodeSnippetAdded"] = false;

$tdatapacientes[".buttonsAdded"] = false;

$tdatapacientes[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapacientes[".isUseTimeForSearch"] = false;


$tdatapacientes[".badgeColor"] = "778899";


$tdatapacientes[".allSearchFields"] = array();
$tdatapacientes[".filterFields"] = array();
$tdatapacientes[".requiredSearchFields"] = array();

$tdatapacientes[".googleLikeFields"] = array();
$tdatapacientes[".googleLikeFields"][] = "id_paciente";
$tdatapacientes[".googleLikeFields"][] = "tipo_documento";
$tdatapacientes[".googleLikeFields"][] = "identificacion";
$tdatapacientes[".googleLikeFields"][] = "primer_nombre";
$tdatapacientes[".googleLikeFields"][] = "segundo_nombre";
$tdatapacientes[".googleLikeFields"][] = "primer_apellido";
$tdatapacientes[".googleLikeFields"][] = "segundo_apellido";
$tdatapacientes[".googleLikeFields"][] = "nombre_completo";
$tdatapacientes[".googleLikeFields"][] = "edad";
$tdatapacientes[".googleLikeFields"][] = "sexo";
$tdatapacientes[".googleLikeFields"][] = "estado_civil";
$tdatapacientes[".googleLikeFields"][] = "telefono";
$tdatapacientes[".googleLikeFields"][] = "direccion";
$tdatapacientes[".googleLikeFields"][] = "ciudad_mpio";
$tdatapacientes[".googleLikeFields"][] = "entidad_eapb";
$tdatapacientes[".googleLikeFields"][] = "riesgo";
$tdatapacientes[".googleLikeFields"][] = "cama";
$tdatapacientes[".googleLikeFields"][] = "servicio";
$tdatapacientes[".googleLikeFields"][] = "motivo_consulta";
$tdatapacientes[".googleLikeFields"][] = "turno";
$tdatapacientes[".googleLikeFields"][] = "fecha_ingreso";
$tdatapacientes[".googleLikeFields"][] = "creado_en";
$tdatapacientes[".googleLikeFields"][] = "actualizado_en";



$tdatapacientes[".tableType"] = "list";

$tdatapacientes[".printerPageOrientation"] = 0;
$tdatapacientes[".nPrinterPageScale"] = 100;

$tdatapacientes[".nPrinterSplitRecords"] = 40;

$tdatapacientes[".geocodingEnabled"] = false;










$tdatapacientes[".pageSize"] = 20;

$tdatapacientes[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatapacientes[".strOrderBy"] = $tstrOrderBy;

$tdatapacientes[".orderindexes"] = array();


$tdatapacientes[".sqlHead"] = "SELECT id_paciente,  	tipo_documento,  	identificacion,  	primer_nombre,  	segundo_nombre,  	primer_apellido,  	segundo_apellido,  	nombre_completo,  	edad,  	sexo,  	estado_civil,  	telefono,  	direccion,  	ciudad_mpio,  	entidad_eapb,  	riesgo,  	cama,  	servicio,  	motivo_consulta,  	turno,  	fecha_ingreso,  	creado_en,  	actualizado_en";
$tdatapacientes[".sqlFrom"] = "FROM pacientes";
$tdatapacientes[".sqlWhereExpr"] = "";
$tdatapacientes[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapacientes[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapacientes[".arrGroupsPerPage"] = $arrGPP;

$tdatapacientes[".highlightSearchResults"] = true;

$tableKeyspacientes = array();
$tableKeyspacientes[] = "id_paciente";
$tdatapacientes[".Keys"] = $tableKeyspacientes;


$tdatapacientes[".hideMobileList"] = array();




//	id_paciente
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_paciente";
	$fdata["GoodName"] = "id_paciente";
	$fdata["ownerTable"] = "pacientes";
	$fdata["Label"] = GetFieldLabel("pacientes","id_paciente");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id_paciente";

		$fdata["sourceSingle"] = "id_paciente";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_paciente";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatapacientes["id_paciente"] = $fdata;
		$tdatapacientes[".searchableFields"][] = "id_paciente";
//	tipo_documento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "tipo_documento";
	$fdata["GoodName"] = "tipo_documento";
	$fdata["ownerTable"] = "pacientes";
	$fdata["Label"] = GetFieldLabel("pacientes","tipo_documento");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "tipo_documento";

		$fdata["sourceSingle"] = "tipo_documento";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tipo_documento";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=20";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatapacientes["tipo_documento"] = $fdata;
		$tdatapacientes[".searchableFields"][] = "tipo_documento";
//	identificacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "identificacion";
	$fdata["GoodName"] = "identificacion";
	$fdata["ownerTable"] = "pacientes";
	$fdata["Label"] = GetFieldLabel("pacientes","identificacion");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "identificacion";

		$fdata["sourceSingle"] = "identificacion";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "identificacion";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatapacientes["identificacion"] = $fdata;
		$tdatapacientes[".searchableFields"][] = "identificacion";
//	primer_nombre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "primer_nombre";
	$fdata["GoodName"] = "primer_nombre";
	$fdata["ownerTable"] = "pacientes";
	$fdata["Label"] = GetFieldLabel("pacientes","primer_nombre");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "primer_nombre";

		$fdata["sourceSingle"] = "primer_nombre";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "primer_nombre";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=100";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatapacientes["primer_nombre"] = $fdata;
		$tdatapacientes[".searchableFields"][] = "primer_nombre";
//	segundo_nombre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "segundo_nombre";
	$fdata["GoodName"] = "segundo_nombre";
	$fdata["ownerTable"] = "pacientes";
	$fdata["Label"] = GetFieldLabel("pacientes","segundo_nombre");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "segundo_nombre";

		$fdata["sourceSingle"] = "segundo_nombre";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "segundo_nombre";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=100";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatapacientes["segundo_nombre"] = $fdata;
		$tdatapacientes[".searchableFields"][] = "segundo_nombre";
//	primer_apellido
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "primer_apellido";
	$fdata["GoodName"] = "primer_apellido";
	$fdata["ownerTable"] = "pacientes";
	$fdata["Label"] = GetFieldLabel("pacientes","primer_apellido");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "primer_apellido";

		$fdata["sourceSingle"] = "primer_apellido";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "primer_apellido";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=100";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatapacientes["primer_apellido"] = $fdata;
		$tdatapacientes[".searchableFields"][] = "primer_apellido";
//	segundo_apellido
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "segundo_apellido";
	$fdata["GoodName"] = "segundo_apellido";
	$fdata["ownerTable"] = "pacientes";
	$fdata["Label"] = GetFieldLabel("pacientes","segundo_apellido");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "segundo_apellido";

		$fdata["sourceSingle"] = "segundo_apellido";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "segundo_apellido";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=100";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatapacientes["segundo_apellido"] = $fdata;
		$tdatapacientes[".searchableFields"][] = "segundo_apellido";
//	nombre_completo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "nombre_completo";
	$fdata["GoodName"] = "nombre_completo";
	$fdata["ownerTable"] = "pacientes";
	$fdata["Label"] = GetFieldLabel("pacientes","nombre_completo");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "nombre_completo";

		$fdata["sourceSingle"] = "nombre_completo";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nombre_completo";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=200";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatapacientes["nombre_completo"] = $fdata;
		$tdatapacientes[".searchableFields"][] = "nombre_completo";
//	edad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "edad";
	$fdata["GoodName"] = "edad";
	$fdata["ownerTable"] = "pacientes";
	$fdata["Label"] = GetFieldLabel("pacientes","edad");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "edad";

		$fdata["sourceSingle"] = "edad";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "edad";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatapacientes["edad"] = $fdata;
		$tdatapacientes[".searchableFields"][] = "edad";
//	sexo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "sexo";
	$fdata["GoodName"] = "sexo";
	$fdata["ownerTable"] = "pacientes";
	$fdata["Label"] = GetFieldLabel("pacientes","sexo");
	$fdata["FieldType"] = 129;


	
	
			

		$fdata["strField"] = "sexo";

		$fdata["sourceSingle"] = "sexo";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sexo";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
		$edata["LookupType"] = 0;
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "M";
	$edata["LookupValues"][] = "F";
	$edata["LookupValues"][] = "Otro";

	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatapacientes["sexo"] = $fdata;
		$tdatapacientes[".searchableFields"][] = "sexo";
//	estado_civil
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "estado_civil";
	$fdata["GoodName"] = "estado_civil";
	$fdata["ownerTable"] = "pacientes";
	$fdata["Label"] = GetFieldLabel("pacientes","estado_civil");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "estado_civil";

		$fdata["sourceSingle"] = "estado_civil";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "estado_civil";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=30";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatapacientes["estado_civil"] = $fdata;
		$tdatapacientes[".searchableFields"][] = "estado_civil";
//	telefono
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "telefono";
	$fdata["GoodName"] = "telefono";
	$fdata["ownerTable"] = "pacientes";
	$fdata["Label"] = GetFieldLabel("pacientes","telefono");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "telefono";

		$fdata["sourceSingle"] = "telefono";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "telefono";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatapacientes["telefono"] = $fdata;
		$tdatapacientes[".searchableFields"][] = "telefono";
//	direccion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "direccion";
	$fdata["GoodName"] = "direccion";
	$fdata["ownerTable"] = "pacientes";
	$fdata["Label"] = GetFieldLabel("pacientes","direccion");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "direccion";

		$fdata["sourceSingle"] = "direccion";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "direccion";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatapacientes["direccion"] = $fdata;
		$tdatapacientes[".searchableFields"][] = "direccion";
//	ciudad_mpio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "ciudad_mpio";
	$fdata["GoodName"] = "ciudad_mpio";
	$fdata["ownerTable"] = "pacientes";
	$fdata["Label"] = GetFieldLabel("pacientes","ciudad_mpio");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "ciudad_mpio";

		$fdata["sourceSingle"] = "ciudad_mpio";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ciudad_mpio";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=100";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatapacientes["ciudad_mpio"] = $fdata;
		$tdatapacientes[".searchableFields"][] = "ciudad_mpio";
//	entidad_eapb
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "entidad_eapb";
	$fdata["GoodName"] = "entidad_eapb";
	$fdata["ownerTable"] = "pacientes";
	$fdata["Label"] = GetFieldLabel("pacientes","entidad_eapb");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "entidad_eapb";

		$fdata["sourceSingle"] = "entidad_eapb";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "entidad_eapb";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=100";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatapacientes["entidad_eapb"] = $fdata;
		$tdatapacientes[".searchableFields"][] = "entidad_eapb";
//	riesgo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "riesgo";
	$fdata["GoodName"] = "riesgo";
	$fdata["ownerTable"] = "pacientes";
	$fdata["Label"] = GetFieldLabel("pacientes","riesgo");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "riesgo";

		$fdata["sourceSingle"] = "riesgo";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "riesgo";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatapacientes["riesgo"] = $fdata;
		$tdatapacientes[".searchableFields"][] = "riesgo";
//	cama
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "cama";
	$fdata["GoodName"] = "cama";
	$fdata["ownerTable"] = "pacientes";
	$fdata["Label"] = GetFieldLabel("pacientes","cama");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "cama";

		$fdata["sourceSingle"] = "cama";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cama";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=20";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatapacientes["cama"] = $fdata;
		$tdatapacientes[".searchableFields"][] = "cama";
//	servicio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "servicio";
	$fdata["GoodName"] = "servicio";
	$fdata["ownerTable"] = "pacientes";
	$fdata["Label"] = GetFieldLabel("pacientes","servicio");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "servicio";

		$fdata["sourceSingle"] = "servicio";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "servicio";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=100";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatapacientes["servicio"] = $fdata;
		$tdatapacientes[".searchableFields"][] = "servicio";
//	motivo_consulta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "motivo_consulta";
	$fdata["GoodName"] = "motivo_consulta";
	$fdata["ownerTable"] = "pacientes";
	$fdata["Label"] = GetFieldLabel("pacientes","motivo_consulta");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "motivo_consulta";

		$fdata["sourceSingle"] = "motivo_consulta";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "motivo_consulta";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatapacientes["motivo_consulta"] = $fdata;
		$tdatapacientes[".searchableFields"][] = "motivo_consulta";
//	turno
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "turno";
	$fdata["GoodName"] = "turno";
	$fdata["ownerTable"] = "pacientes";
	$fdata["Label"] = GetFieldLabel("pacientes","turno");
	$fdata["FieldType"] = 129;


	
	
			

		$fdata["strField"] = "turno";

		$fdata["sourceSingle"] = "turno";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "turno";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
		$edata["LookupType"] = 0;
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "Mañana";
	$edata["LookupValues"][] = "Tarde";
	$edata["LookupValues"][] = "Noche";

	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatapacientes["turno"] = $fdata;
		$tdatapacientes[".searchableFields"][] = "turno";
//	fecha_ingreso
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "fecha_ingreso";
	$fdata["GoodName"] = "fecha_ingreso";
	$fdata["ownerTable"] = "pacientes";
	$fdata["Label"] = GetFieldLabel("pacientes","fecha_ingreso");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "fecha_ingreso";

		$fdata["sourceSingle"] = "fecha_ingreso";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fecha_ingreso";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatapacientes["fecha_ingreso"] = $fdata;
		$tdatapacientes[".searchableFields"][] = "fecha_ingreso";
//	creado_en
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "creado_en";
	$fdata["GoodName"] = "creado_en";
	$fdata["ownerTable"] = "pacientes";
	$fdata["Label"] = GetFieldLabel("pacientes","creado_en");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "creado_en";

		$fdata["sourceSingle"] = "creado_en";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "creado_en";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatapacientes["creado_en"] = $fdata;
		$tdatapacientes[".searchableFields"][] = "creado_en";
//	actualizado_en
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "actualizado_en";
	$fdata["GoodName"] = "actualizado_en";
	$fdata["ownerTable"] = "pacientes";
	$fdata["Label"] = GetFieldLabel("pacientes","actualizado_en");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "actualizado_en";

		$fdata["sourceSingle"] = "actualizado_en";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "actualizado_en";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatapacientes["actualizado_en"] = $fdata;
		$tdatapacientes[".searchableFields"][] = "actualizado_en";


$tables_data["pacientes"]=&$tdatapacientes;
$field_labels["pacientes"] = &$fieldLabelspacientes;
$fieldToolTips["pacientes"] = &$fieldToolTipspacientes;
$placeHolders["pacientes"] = &$placeHolderspacientes;
$page_titles["pacientes"] = &$pageTitlespacientes;


changeTextControlsToDate( "pacientes" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["pacientes"] = array();
//	antecedentes
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="antecedentes";
		$detailsParam["dOriginalTable"] = "antecedentes";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "antecedentes";
	$detailsParam["dCaptionTable"] = GetTableCaption("antecedentes");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["pacientes"][$dIndex] = $detailsParam;

	
		$detailsTablesData["pacientes"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["pacientes"][$dIndex]["masterKeys"][]="id_paciente";

				$detailsTablesData["pacientes"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["pacientes"][$dIndex]["detailKeys"][]="paciente_id";
//	balance_hidrico
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="balance_hidrico";
		$detailsParam["dOriginalTable"] = "balance_hidrico";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "balance_hidrico";
	$detailsParam["dCaptionTable"] = GetTableCaption("balance_hidrico");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["pacientes"][$dIndex] = $detailsParam;

	
		$detailsTablesData["pacientes"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["pacientes"][$dIndex]["masterKeys"][]="id_paciente";

				$detailsTablesData["pacientes"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["pacientes"][$dIndex]["detailKeys"][]="paciente_id";
//	detalle_subactividad
	
	

		$dIndex = 2;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="detalle_subactividad";
		$detailsParam["dOriginalTable"] = "detalle_subactividad";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "detalle_subactividad";
	$detailsParam["dCaptionTable"] = GetTableCaption("detalle_subactividad");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["pacientes"][$dIndex] = $detailsParam;

	
		$detailsTablesData["pacientes"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["pacientes"][$dIndex]["masterKeys"][]="id_paciente";

				$detailsTablesData["pacientes"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["pacientes"][$dIndex]["detailKeys"][]="paciente_id";
//	liquidos_administrados
	
	

		$dIndex = 3;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="liquidos_administrados";
		$detailsParam["dOriginalTable"] = "liquidos_administrados";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "liquidos_administrados";
	$detailsParam["dCaptionTable"] = GetTableCaption("liquidos_administrados");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["pacientes"][$dIndex] = $detailsParam;

	
		$detailsTablesData["pacientes"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["pacientes"][$dIndex]["masterKeys"][]="id_paciente";

				$detailsTablesData["pacientes"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["pacientes"][$dIndex]["detailKeys"][]="paciente_id";
//	liquidos_eliminados
	
	

		$dIndex = 4;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="liquidos_eliminados";
		$detailsParam["dOriginalTable"] = "liquidos_eliminados";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "liquidos_eliminados";
	$detailsParam["dCaptionTable"] = GetTableCaption("liquidos_eliminados");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["pacientes"][$dIndex] = $detailsParam;

	
		$detailsTablesData["pacientes"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["pacientes"][$dIndex]["masterKeys"][]="id_paciente";

				$detailsTablesData["pacientes"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["pacientes"][$dIndex]["detailKeys"][]="paciente_id";
//	medicamentos
	
	

		$dIndex = 5;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="medicamentos";
		$detailsParam["dOriginalTable"] = "medicamentos";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "medicamentos";
	$detailsParam["dCaptionTable"] = GetTableCaption("medicamentos");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["pacientes"][$dIndex] = $detailsParam;

	
		$detailsTablesData["pacientes"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["pacientes"][$dIndex]["masterKeys"][]="id_paciente";

				$detailsTablesData["pacientes"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["pacientes"][$dIndex]["detailKeys"][]="paciente_id";
//	signos_vitales
	
	

		$dIndex = 6;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="signos_vitales";
		$detailsParam["dOriginalTable"] = "signos_vitales";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "signos_vitales";
	$detailsParam["dCaptionTable"] = GetTableCaption("signos_vitales");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["pacientes"][$dIndex] = $detailsParam;

	
		$detailsTablesData["pacientes"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["pacientes"][$dIndex]["masterKeys"][]="id_paciente";

				$detailsTablesData["pacientes"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["pacientes"][$dIndex]["detailKeys"][]="paciente_id";
//	tarjeta_medicamentos_completa
	
	

		$dIndex = 7;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="tarjeta_medicamentos_completa";
		$detailsParam["dOriginalTable"] = "tarjeta_medicamentos_completa";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "tarjeta_medicamentos_completa";
	$detailsParam["dCaptionTable"] = GetTableCaption("tarjeta_medicamentos_completa");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["pacientes"][$dIndex] = $detailsParam;

	
		$detailsTablesData["pacientes"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["pacientes"][$dIndex]["masterKeys"][]="id_paciente";

				$detailsTablesData["pacientes"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["pacientes"][$dIndex]["detailKeys"][]="paciente_id";
//	registros_glucometria
	
	

		$dIndex = 8;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="registros_glucometria";
		$detailsParam["dOriginalTable"] = "registros_glucometria";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "registros_glucometria";
	$detailsParam["dCaptionTable"] = GetTableCaption("registros_glucometria");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["pacientes"][$dIndex] = $detailsParam;

	
		$detailsTablesData["pacientes"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["pacientes"][$dIndex]["masterKeys"][]="id_paciente";

				$detailsTablesData["pacientes"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["pacientes"][$dIndex]["detailKeys"][]="paciente_id";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["pacientes"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_pacientes()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_paciente,  	tipo_documento,  	identificacion,  	primer_nombre,  	segundo_nombre,  	primer_apellido,  	segundo_apellido,  	nombre_completo,  	edad,  	sexo,  	estado_civil,  	telefono,  	direccion,  	ciudad_mpio,  	entidad_eapb,  	riesgo,  	cama,  	servicio,  	motivo_consulta,  	turno,  	fecha_ingreso,  	creado_en,  	actualizado_en";
$proto0["m_strFrom"] = "FROM pacientes";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto4=array();
$proto4["m_sql"] = "";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = false;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto6=array();
			$obj = new SQLField(array(
	"m_strName" => "id_paciente",
	"m_strTable" => "pacientes",
	"m_srcTableName" => "pacientes"
));

$proto6["m_sql"] = "id_paciente";
$proto6["m_srcTableName"] = "pacientes";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "tipo_documento",
	"m_strTable" => "pacientes",
	"m_srcTableName" => "pacientes"
));

$proto8["m_sql"] = "tipo_documento";
$proto8["m_srcTableName"] = "pacientes";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "identificacion",
	"m_strTable" => "pacientes",
	"m_srcTableName" => "pacientes"
));

$proto10["m_sql"] = "identificacion";
$proto10["m_srcTableName"] = "pacientes";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "primer_nombre",
	"m_strTable" => "pacientes",
	"m_srcTableName" => "pacientes"
));

$proto12["m_sql"] = "primer_nombre";
$proto12["m_srcTableName"] = "pacientes";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "segundo_nombre",
	"m_strTable" => "pacientes",
	"m_srcTableName" => "pacientes"
));

$proto14["m_sql"] = "segundo_nombre";
$proto14["m_srcTableName"] = "pacientes";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "primer_apellido",
	"m_strTable" => "pacientes",
	"m_srcTableName" => "pacientes"
));

$proto16["m_sql"] = "primer_apellido";
$proto16["m_srcTableName"] = "pacientes";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "segundo_apellido",
	"m_strTable" => "pacientes",
	"m_srcTableName" => "pacientes"
));

$proto18["m_sql"] = "segundo_apellido";
$proto18["m_srcTableName"] = "pacientes";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "nombre_completo",
	"m_strTable" => "pacientes",
	"m_srcTableName" => "pacientes"
));

$proto20["m_sql"] = "nombre_completo";
$proto20["m_srcTableName"] = "pacientes";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "edad",
	"m_strTable" => "pacientes",
	"m_srcTableName" => "pacientes"
));

$proto22["m_sql"] = "edad";
$proto22["m_srcTableName"] = "pacientes";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "sexo",
	"m_strTable" => "pacientes",
	"m_srcTableName" => "pacientes"
));

$proto24["m_sql"] = "sexo";
$proto24["m_srcTableName"] = "pacientes";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "estado_civil",
	"m_strTable" => "pacientes",
	"m_srcTableName" => "pacientes"
));

$proto26["m_sql"] = "estado_civil";
$proto26["m_srcTableName"] = "pacientes";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "telefono",
	"m_strTable" => "pacientes",
	"m_srcTableName" => "pacientes"
));

$proto28["m_sql"] = "telefono";
$proto28["m_srcTableName"] = "pacientes";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "direccion",
	"m_strTable" => "pacientes",
	"m_srcTableName" => "pacientes"
));

$proto30["m_sql"] = "direccion";
$proto30["m_srcTableName"] = "pacientes";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "ciudad_mpio",
	"m_strTable" => "pacientes",
	"m_srcTableName" => "pacientes"
));

$proto32["m_sql"] = "ciudad_mpio";
$proto32["m_srcTableName"] = "pacientes";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "entidad_eapb",
	"m_strTable" => "pacientes",
	"m_srcTableName" => "pacientes"
));

$proto34["m_sql"] = "entidad_eapb";
$proto34["m_srcTableName"] = "pacientes";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "riesgo",
	"m_strTable" => "pacientes",
	"m_srcTableName" => "pacientes"
));

$proto36["m_sql"] = "riesgo";
$proto36["m_srcTableName"] = "pacientes";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "cama",
	"m_strTable" => "pacientes",
	"m_srcTableName" => "pacientes"
));

$proto38["m_sql"] = "cama";
$proto38["m_srcTableName"] = "pacientes";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "servicio",
	"m_strTable" => "pacientes",
	"m_srcTableName" => "pacientes"
));

$proto40["m_sql"] = "servicio";
$proto40["m_srcTableName"] = "pacientes";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "motivo_consulta",
	"m_strTable" => "pacientes",
	"m_srcTableName" => "pacientes"
));

$proto42["m_sql"] = "motivo_consulta";
$proto42["m_srcTableName"] = "pacientes";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "turno",
	"m_strTable" => "pacientes",
	"m_srcTableName" => "pacientes"
));

$proto44["m_sql"] = "turno";
$proto44["m_srcTableName"] = "pacientes";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_ingreso",
	"m_strTable" => "pacientes",
	"m_srcTableName" => "pacientes"
));

$proto46["m_sql"] = "fecha_ingreso";
$proto46["m_srcTableName"] = "pacientes";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "creado_en",
	"m_strTable" => "pacientes",
	"m_srcTableName" => "pacientes"
));

$proto48["m_sql"] = "creado_en";
$proto48["m_srcTableName"] = "pacientes";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "actualizado_en",
	"m_strTable" => "pacientes",
	"m_srcTableName" => "pacientes"
));

$proto50["m_sql"] = "actualizado_en";
$proto50["m_srcTableName"] = "pacientes";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto52=array();
$proto52["m_link"] = "SQLL_MAIN";
			$proto53=array();
$proto53["m_strName"] = "pacientes";
$proto53["m_srcTableName"] = "pacientes";
$proto53["m_columns"] = array();
$proto53["m_columns"][] = "id_paciente";
$proto53["m_columns"][] = "tipo_documento";
$proto53["m_columns"][] = "identificacion";
$proto53["m_columns"][] = "primer_nombre";
$proto53["m_columns"][] = "segundo_nombre";
$proto53["m_columns"][] = "primer_apellido";
$proto53["m_columns"][] = "segundo_apellido";
$proto53["m_columns"][] = "nombre_completo";
$proto53["m_columns"][] = "edad";
$proto53["m_columns"][] = "sexo";
$proto53["m_columns"][] = "estado_civil";
$proto53["m_columns"][] = "telefono";
$proto53["m_columns"][] = "direccion";
$proto53["m_columns"][] = "ciudad_mpio";
$proto53["m_columns"][] = "entidad_eapb";
$proto53["m_columns"][] = "riesgo";
$proto53["m_columns"][] = "cama";
$proto53["m_columns"][] = "servicio";
$proto53["m_columns"][] = "motivo_consulta";
$proto53["m_columns"][] = "turno";
$proto53["m_columns"][] = "fecha_ingreso";
$proto53["m_columns"][] = "creado_en";
$proto53["m_columns"][] = "actualizado_en";
$obj = new SQLTable($proto53);

$proto52["m_table"] = $obj;
$proto52["m_sql"] = "pacientes";
$proto52["m_alias"] = "";
$proto52["m_srcTableName"] = "pacientes";
$proto54=array();
$proto54["m_sql"] = "";
$proto54["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto54["m_column"]=$obj;
$proto54["m_contained"] = array();
$proto54["m_strCase"] = "";
$proto54["m_havingmode"] = false;
$proto54["m_inBrackets"] = false;
$proto54["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto54);

$proto52["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto52);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="pacientes";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_pacientes = createSqlQuery_pacientes();


	
		;

																							

$tdatapacientes[".sqlquery"] = $queryData_pacientes;



$tdatapacientes[".hasEvents"] = false;

?>