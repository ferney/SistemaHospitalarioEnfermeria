<?php
$tdataliquidos_eliminados = array();
$tdataliquidos_eliminados[".searchableFields"] = array();
$tdataliquidos_eliminados[".ShortName"] = "liquidos_eliminados";
$tdataliquidos_eliminados[".OwnerID"] = "";
$tdataliquidos_eliminados[".OriginalTable"] = "liquidos_eliminados";


$tdataliquidos_eliminados[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataliquidos_eliminados[".originalPagesByType"] = $tdataliquidos_eliminados[".pagesByType"];
$tdataliquidos_eliminados[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataliquidos_eliminados[".originalPages"] = $tdataliquidos_eliminados[".pages"];
$tdataliquidos_eliminados[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataliquidos_eliminados[".originalDefaultPages"] = $tdataliquidos_eliminados[".defaultPages"];

//	field labels
$fieldLabelsliquidos_eliminados = array();
$fieldToolTipsliquidos_eliminados = array();
$pageTitlesliquidos_eliminados = array();
$placeHoldersliquidos_eliminados = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsliquidos_eliminados["English"] = array();
	$fieldToolTipsliquidos_eliminados["English"] = array();
	$placeHoldersliquidos_eliminados["English"] = array();
	$pageTitlesliquidos_eliminados["English"] = array();
	$fieldLabelsliquidos_eliminados["English"]["id_eliminado"] = "Id Eliminado";
	$fieldToolTipsliquidos_eliminados["English"]["id_eliminado"] = "";
	$placeHoldersliquidos_eliminados["English"]["id_eliminado"] = "";
	$fieldLabelsliquidos_eliminados["English"]["paciente_id"] = "Paciente Id";
	$fieldToolTipsliquidos_eliminados["English"]["paciente_id"] = "";
	$placeHoldersliquidos_eliminados["English"]["paciente_id"] = "";
	$fieldLabelsliquidos_eliminados["English"]["fecha_hora"] = "Fecha Hora";
	$fieldToolTipsliquidos_eliminados["English"]["fecha_hora"] = "";
	$placeHoldersliquidos_eliminados["English"]["fecha_hora"] = "";
	$fieldLabelsliquidos_eliminados["English"]["hora_eliminado"] = "Hora Eliminado";
	$fieldToolTipsliquidos_eliminados["English"]["hora_eliminado"] = "";
	$placeHoldersliquidos_eliminados["English"]["hora_eliminado"] = "";
	$fieldLabelsliquidos_eliminados["English"]["tipo_liquido"] = "Tipo Liquido";
	$fieldToolTipsliquidos_eliminados["English"]["tipo_liquido"] = "";
	$placeHoldersliquidos_eliminados["English"]["tipo_liquido"] = "";
	$fieldLabelsliquidos_eliminados["English"]["via_eliminacion"] = "Via Eliminacion";
	$fieldToolTipsliquidos_eliminados["English"]["via_eliminacion"] = "";
	$placeHoldersliquidos_eliminados["English"]["via_eliminacion"] = "";
	$fieldLabelsliquidos_eliminados["English"]["cantidad"] = "Cantidad";
	$fieldToolTipsliquidos_eliminados["English"]["cantidad"] = "";
	$placeHoldersliquidos_eliminados["English"]["cantidad"] = "";
	$fieldLabelsliquidos_eliminados["English"]["caracteristicas"] = "Caracteristicas";
	$fieldToolTipsliquidos_eliminados["English"]["caracteristicas"] = "";
	$placeHoldersliquidos_eliminados["English"]["caracteristicas"] = "";
	$fieldLabelsliquidos_eliminados["English"]["enfermero"] = "Enfermero";
	$fieldToolTipsliquidos_eliminados["English"]["enfermero"] = "";
	$placeHoldersliquidos_eliminados["English"]["enfermero"] = "";
	if (count($fieldToolTipsliquidos_eliminados["English"]))
		$tdataliquidos_eliminados[".isUseToolTips"] = true;
}


	$tdataliquidos_eliminados[".NCSearch"] = true;



$tdataliquidos_eliminados[".shortTableName"] = "liquidos_eliminados";
$tdataliquidos_eliminados[".nSecOptions"] = 0;

$tdataliquidos_eliminados[".mainTableOwnerID"] = "";
$tdataliquidos_eliminados[".entityType"] = 0;
$tdataliquidos_eliminados[".connId"] = "basedatosenfermeriaatlocalhost";


$tdataliquidos_eliminados[".strOriginalTableName"] = "liquidos_eliminados";

	



$tdataliquidos_eliminados[".showAddInPopup"] = false;

$tdataliquidos_eliminados[".showEditInPopup"] = false;

$tdataliquidos_eliminados[".showViewInPopup"] = false;

$tdataliquidos_eliminados[".listAjax"] = false;
//	temporary
//$tdataliquidos_eliminados[".listAjax"] = false;

	$tdataliquidos_eliminados[".audit"] = false;

	$tdataliquidos_eliminados[".locking"] = false;


$pages = $tdataliquidos_eliminados[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataliquidos_eliminados[".edit"] = true;
	$tdataliquidos_eliminados[".afterEditAction"] = 1;
	$tdataliquidos_eliminados[".closePopupAfterEdit"] = 1;
	$tdataliquidos_eliminados[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataliquidos_eliminados[".add"] = true;
$tdataliquidos_eliminados[".afterAddAction"] = 1;
$tdataliquidos_eliminados[".closePopupAfterAdd"] = 1;
$tdataliquidos_eliminados[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataliquidos_eliminados[".list"] = true;
}



$tdataliquidos_eliminados[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataliquidos_eliminados[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataliquidos_eliminados[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataliquidos_eliminados[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataliquidos_eliminados[".printFriendly"] = true;
}



$tdataliquidos_eliminados[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataliquidos_eliminados[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataliquidos_eliminados[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataliquidos_eliminados[".isUseAjaxSuggest"] = true;





$tdataliquidos_eliminados[".ajaxCodeSnippetAdded"] = false;

$tdataliquidos_eliminados[".buttonsAdded"] = false;

$tdataliquidos_eliminados[".addPageEvents"] = false;

// use timepicker for search panel
$tdataliquidos_eliminados[".isUseTimeForSearch"] = false;


$tdataliquidos_eliminados[".badgeColor"] = "6B8E23";


$tdataliquidos_eliminados[".allSearchFields"] = array();
$tdataliquidos_eliminados[".filterFields"] = array();
$tdataliquidos_eliminados[".requiredSearchFields"] = array();

$tdataliquidos_eliminados[".googleLikeFields"] = array();
$tdataliquidos_eliminados[".googleLikeFields"][] = "id_eliminado";
$tdataliquidos_eliminados[".googleLikeFields"][] = "paciente_id";
$tdataliquidos_eliminados[".googleLikeFields"][] = "fecha_hora";
$tdataliquidos_eliminados[".googleLikeFields"][] = "hora_eliminado";
$tdataliquidos_eliminados[".googleLikeFields"][] = "tipo_liquido";
$tdataliquidos_eliminados[".googleLikeFields"][] = "via_eliminacion";
$tdataliquidos_eliminados[".googleLikeFields"][] = "cantidad";
$tdataliquidos_eliminados[".googleLikeFields"][] = "caracteristicas";
$tdataliquidos_eliminados[".googleLikeFields"][] = "enfermero";



$tdataliquidos_eliminados[".tableType"] = "list";

$tdataliquidos_eliminados[".printerPageOrientation"] = 0;
$tdataliquidos_eliminados[".nPrinterPageScale"] = 100;

$tdataliquidos_eliminados[".nPrinterSplitRecords"] = 40;

$tdataliquidos_eliminados[".geocodingEnabled"] = false;










$tdataliquidos_eliminados[".pageSize"] = 20;

$tdataliquidos_eliminados[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataliquidos_eliminados[".strOrderBy"] = $tstrOrderBy;

$tdataliquidos_eliminados[".orderindexes"] = array();


$tdataliquidos_eliminados[".sqlHead"] = "SELECT id_eliminado,  	paciente_id,  	fecha_hora,  	hora_eliminado,  	tipo_liquido,  	via_eliminacion,  	cantidad,  	caracteristicas,  	enfermero";
$tdataliquidos_eliminados[".sqlFrom"] = "FROM liquidos_eliminados";
$tdataliquidos_eliminados[".sqlWhereExpr"] = "";
$tdataliquidos_eliminados[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataliquidos_eliminados[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataliquidos_eliminados[".arrGroupsPerPage"] = $arrGPP;

$tdataliquidos_eliminados[".highlightSearchResults"] = true;

$tableKeysliquidos_eliminados = array();
$tableKeysliquidos_eliminados[] = "id_eliminado";
$tdataliquidos_eliminados[".Keys"] = $tableKeysliquidos_eliminados;


$tdataliquidos_eliminados[".hideMobileList"] = array();




//	id_eliminado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_eliminado";
	$fdata["GoodName"] = "id_eliminado";
	$fdata["ownerTable"] = "liquidos_eliminados";
	$fdata["Label"] = GetFieldLabel("liquidos_eliminados","id_eliminado");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id_eliminado";

		$fdata["sourceSingle"] = "id_eliminado";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_eliminado";

	
	
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


	$tdataliquidos_eliminados["id_eliminado"] = $fdata;
		$tdataliquidos_eliminados[".searchableFields"][] = "id_eliminado";
//	paciente_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "paciente_id";
	$fdata["GoodName"] = "paciente_id";
	$fdata["ownerTable"] = "liquidos_eliminados";
	$fdata["Label"] = GetFieldLabel("liquidos_eliminados","paciente_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "paciente_id";

		$fdata["sourceSingle"] = "paciente_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "paciente_id";

	
	
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
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "pacientes";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id_paciente";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "tipo_documento";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
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


	$tdataliquidos_eliminados["paciente_id"] = $fdata;
		$tdataliquidos_eliminados[".searchableFields"][] = "paciente_id";
//	fecha_hora
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "fecha_hora";
	$fdata["GoodName"] = "fecha_hora";
	$fdata["ownerTable"] = "liquidos_eliminados";
	$fdata["Label"] = GetFieldLabel("liquidos_eliminados","fecha_hora");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "fecha_hora";

		$fdata["sourceSingle"] = "fecha_hora";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fecha_hora";

	
	
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


	$tdataliquidos_eliminados["fecha_hora"] = $fdata;
		$tdataliquidos_eliminados[".searchableFields"][] = "fecha_hora";
//	hora_eliminado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "hora_eliminado";
	$fdata["GoodName"] = "hora_eliminado";
	$fdata["ownerTable"] = "liquidos_eliminados";
	$fdata["Label"] = GetFieldLabel("liquidos_eliminados","hora_eliminado");
	$fdata["FieldType"] = 134;


	
	
			

		$fdata["strField"] = "hora_eliminado";

		$fdata["sourceSingle"] = "hora_eliminado";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "hora_eliminado";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Time");

	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["timeFormatData"] = array(
		"showSeconds" => false,
		"showDaysInTotals" => false,
		"timeFormat" => 0
	);
	$vdata["timeFormatData"]["showSeconds"] = true;
	$vdata["timeFormatData"]["showDaysInTotals"] = true;

		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Time");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
				$hours = 24;
	$edata["FormatTimeAttrs"] = array("useTimePicker" => 0,
									  "hours" => $hours,
									  "minutes" => 1,
									  "showSeconds" => 0);

	
	
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


	$tdataliquidos_eliminados["hora_eliminado"] = $fdata;
		$tdataliquidos_eliminados[".searchableFields"][] = "hora_eliminado";
//	tipo_liquido
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "tipo_liquido";
	$fdata["GoodName"] = "tipo_liquido";
	$fdata["ownerTable"] = "liquidos_eliminados";
	$fdata["Label"] = GetFieldLabel("liquidos_eliminados","tipo_liquido");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "tipo_liquido";

		$fdata["sourceSingle"] = "tipo_liquido";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tipo_liquido";

	
	
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


	$tdataliquidos_eliminados["tipo_liquido"] = $fdata;
		$tdataliquidos_eliminados[".searchableFields"][] = "tipo_liquido";
//	via_eliminacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "via_eliminacion";
	$fdata["GoodName"] = "via_eliminacion";
	$fdata["ownerTable"] = "liquidos_eliminados";
	$fdata["Label"] = GetFieldLabel("liquidos_eliminados","via_eliminacion");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "via_eliminacion";

		$fdata["sourceSingle"] = "via_eliminacion";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "via_eliminacion";

	
	
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


	$tdataliquidos_eliminados["via_eliminacion"] = $fdata;
		$tdataliquidos_eliminados[".searchableFields"][] = "via_eliminacion";
//	cantidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "cantidad";
	$fdata["GoodName"] = "cantidad";
	$fdata["ownerTable"] = "liquidos_eliminados";
	$fdata["Label"] = GetFieldLabel("liquidos_eliminados","cantidad");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "cantidad";

		$fdata["sourceSingle"] = "cantidad";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cantidad";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
	
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


	$tdataliquidos_eliminados["cantidad"] = $fdata;
		$tdataliquidos_eliminados[".searchableFields"][] = "cantidad";
//	caracteristicas
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "caracteristicas";
	$fdata["GoodName"] = "caracteristicas";
	$fdata["ownerTable"] = "liquidos_eliminados";
	$fdata["Label"] = GetFieldLabel("liquidos_eliminados","caracteristicas");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "caracteristicas";

		$fdata["sourceSingle"] = "caracteristicas";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "caracteristicas";

	
	
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


	$tdataliquidos_eliminados["caracteristicas"] = $fdata;
		$tdataliquidos_eliminados[".searchableFields"][] = "caracteristicas";
//	enfermero
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "enfermero";
	$fdata["GoodName"] = "enfermero";
	$fdata["ownerTable"] = "liquidos_eliminados";
	$fdata["Label"] = GetFieldLabel("liquidos_eliminados","enfermero");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "enfermero";

		$fdata["sourceSingle"] = "enfermero";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "enfermero";

	
	
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


	$tdataliquidos_eliminados["enfermero"] = $fdata;
		$tdataliquidos_eliminados[".searchableFields"][] = "enfermero";


$tables_data["liquidos_eliminados"]=&$tdataliquidos_eliminados;
$field_labels["liquidos_eliminados"] = &$fieldLabelsliquidos_eliminados;
$fieldToolTips["liquidos_eliminados"] = &$fieldToolTipsliquidos_eliminados;
$placeHolders["liquidos_eliminados"] = &$placeHoldersliquidos_eliminados;
$page_titles["liquidos_eliminados"] = &$pageTitlesliquidos_eliminados;


changeTextControlsToDate( "liquidos_eliminados" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["liquidos_eliminados"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["liquidos_eliminados"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="pacientes";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="pacientes";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "pacientes";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["liquidos_eliminados"][0] = $masterParams;
				$masterTablesData["liquidos_eliminados"][0]["masterKeys"] = array();
	$masterTablesData["liquidos_eliminados"][0]["masterKeys"][]="id_paciente";
				$masterTablesData["liquidos_eliminados"][0]["detailKeys"] = array();
	$masterTablesData["liquidos_eliminados"][0]["detailKeys"][]="paciente_id";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_liquidos_eliminados()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_eliminado,  	paciente_id,  	fecha_hora,  	hora_eliminado,  	tipo_liquido,  	via_eliminacion,  	cantidad,  	caracteristicas,  	enfermero";
$proto0["m_strFrom"] = "FROM liquidos_eliminados";
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
	"m_strName" => "id_eliminado",
	"m_strTable" => "liquidos_eliminados",
	"m_srcTableName" => "liquidos_eliminados"
));

$proto6["m_sql"] = "id_eliminado";
$proto6["m_srcTableName"] = "liquidos_eliminados";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "paciente_id",
	"m_strTable" => "liquidos_eliminados",
	"m_srcTableName" => "liquidos_eliminados"
));

$proto8["m_sql"] = "paciente_id";
$proto8["m_srcTableName"] = "liquidos_eliminados";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_hora",
	"m_strTable" => "liquidos_eliminados",
	"m_srcTableName" => "liquidos_eliminados"
));

$proto10["m_sql"] = "fecha_hora";
$proto10["m_srcTableName"] = "liquidos_eliminados";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "hora_eliminado",
	"m_strTable" => "liquidos_eliminados",
	"m_srcTableName" => "liquidos_eliminados"
));

$proto12["m_sql"] = "hora_eliminado";
$proto12["m_srcTableName"] = "liquidos_eliminados";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "tipo_liquido",
	"m_strTable" => "liquidos_eliminados",
	"m_srcTableName" => "liquidos_eliminados"
));

$proto14["m_sql"] = "tipo_liquido";
$proto14["m_srcTableName"] = "liquidos_eliminados";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "via_eliminacion",
	"m_strTable" => "liquidos_eliminados",
	"m_srcTableName" => "liquidos_eliminados"
));

$proto16["m_sql"] = "via_eliminacion";
$proto16["m_srcTableName"] = "liquidos_eliminados";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "cantidad",
	"m_strTable" => "liquidos_eliminados",
	"m_srcTableName" => "liquidos_eliminados"
));

$proto18["m_sql"] = "cantidad";
$proto18["m_srcTableName"] = "liquidos_eliminados";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "caracteristicas",
	"m_strTable" => "liquidos_eliminados",
	"m_srcTableName" => "liquidos_eliminados"
));

$proto20["m_sql"] = "caracteristicas";
$proto20["m_srcTableName"] = "liquidos_eliminados";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "enfermero",
	"m_strTable" => "liquidos_eliminados",
	"m_srcTableName" => "liquidos_eliminados"
));

$proto22["m_sql"] = "enfermero";
$proto22["m_srcTableName"] = "liquidos_eliminados";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto24=array();
$proto24["m_link"] = "SQLL_MAIN";
			$proto25=array();
$proto25["m_strName"] = "liquidos_eliminados";
$proto25["m_srcTableName"] = "liquidos_eliminados";
$proto25["m_columns"] = array();
$proto25["m_columns"][] = "id_eliminado";
$proto25["m_columns"][] = "paciente_id";
$proto25["m_columns"][] = "fecha_hora";
$proto25["m_columns"][] = "hora_eliminado";
$proto25["m_columns"][] = "tipo_liquido";
$proto25["m_columns"][] = "via_eliminacion";
$proto25["m_columns"][] = "cantidad";
$proto25["m_columns"][] = "caracteristicas";
$proto25["m_columns"][] = "enfermero";
$obj = new SQLTable($proto25);

$proto24["m_table"] = $obj;
$proto24["m_sql"] = "liquidos_eliminados";
$proto24["m_alias"] = "";
$proto24["m_srcTableName"] = "liquidos_eliminados";
$proto26=array();
$proto26["m_sql"] = "";
$proto26["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto26["m_column"]=$obj;
$proto26["m_contained"] = array();
$proto26["m_strCase"] = "";
$proto26["m_havingmode"] = false;
$proto26["m_inBrackets"] = false;
$proto26["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto26);

$proto24["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto24);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="liquidos_eliminados";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_liquidos_eliminados = createSqlQuery_liquidos_eliminados();


	
		;

									

$tdataliquidos_eliminados[".sqlquery"] = $queryData_liquidos_eliminados;



$tdataliquidos_eliminados[".hasEvents"] = false;

?>