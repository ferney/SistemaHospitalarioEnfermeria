<?php
$tdatasignos_vitales = array();
$tdatasignos_vitales[".searchableFields"] = array();
$tdatasignos_vitales[".ShortName"] = "signos_vitales";
$tdatasignos_vitales[".OwnerID"] = "";
$tdatasignos_vitales[".OriginalTable"] = "signos_vitales";


$tdatasignos_vitales[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatasignos_vitales[".originalPagesByType"] = $tdatasignos_vitales[".pagesByType"];
$tdatasignos_vitales[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatasignos_vitales[".originalPages"] = $tdatasignos_vitales[".pages"];
$tdatasignos_vitales[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatasignos_vitales[".originalDefaultPages"] = $tdatasignos_vitales[".defaultPages"];

//	field labels
$fieldLabelssignos_vitales = array();
$fieldToolTipssignos_vitales = array();
$pageTitlessignos_vitales = array();
$placeHolderssignos_vitales = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelssignos_vitales["English"] = array();
	$fieldToolTipssignos_vitales["English"] = array();
	$placeHolderssignos_vitales["English"] = array();
	$pageTitlessignos_vitales["English"] = array();
	$fieldLabelssignos_vitales["English"]["id_registro"] = "Id Registro";
	$fieldToolTipssignos_vitales["English"]["id_registro"] = "";
	$placeHolderssignos_vitales["English"]["id_registro"] = "";
	$fieldLabelssignos_vitales["English"]["paciente_id"] = "Paciente Id";
	$fieldToolTipssignos_vitales["English"]["paciente_id"] = "";
	$placeHolderssignos_vitales["English"]["paciente_id"] = "";
	$fieldLabelssignos_vitales["English"]["fecha"] = "Fecha";
	$fieldToolTipssignos_vitales["English"]["fecha"] = "";
	$placeHolderssignos_vitales["English"]["fecha"] = "";
	$fieldLabelssignos_vitales["English"]["hora"] = "Hora";
	$fieldToolTipssignos_vitales["English"]["hora"] = "";
	$placeHolderssignos_vitales["English"]["hora"] = "";
	$fieldLabelssignos_vitales["English"]["frecuencia_cardiaca"] = "Frecuencia Cardiaca";
	$fieldToolTipssignos_vitales["English"]["frecuencia_cardiaca"] = "";
	$placeHolderssignos_vitales["English"]["frecuencia_cardiaca"] = "";
	$fieldLabelssignos_vitales["English"]["frecuencia_respiratoria"] = "Frecuencia Respiratoria";
	$fieldToolTipssignos_vitales["English"]["frecuencia_respiratoria"] = "";
	$placeHolderssignos_vitales["English"]["frecuencia_respiratoria"] = "";
	$fieldLabelssignos_vitales["English"]["tension_arterial"] = "Tension Arterial";
	$fieldToolTipssignos_vitales["English"]["tension_arterial"] = "";
	$placeHolderssignos_vitales["English"]["tension_arterial"] = "";
	$fieldLabelssignos_vitales["English"]["tension_arterial_media"] = "Tension Arterial Media";
	$fieldToolTipssignos_vitales["English"]["tension_arterial_media"] = "";
	$placeHolderssignos_vitales["English"]["tension_arterial_media"] = "";
	$fieldLabelssignos_vitales["English"]["temperatura"] = "Temperatura";
	$fieldToolTipssignos_vitales["English"]["temperatura"] = "";
	$placeHolderssignos_vitales["English"]["temperatura"] = "";
	$fieldLabelssignos_vitales["English"]["saturacion_oxigeno"] = "Saturacion Oxigeno";
	$fieldToolTipssignos_vitales["English"]["saturacion_oxigeno"] = "";
	$placeHolderssignos_vitales["English"]["saturacion_oxigeno"] = "";
	$fieldLabelssignos_vitales["English"]["observaciones"] = "Observaciones";
	$fieldToolTipssignos_vitales["English"]["observaciones"] = "";
	$placeHolderssignos_vitales["English"]["observaciones"] = "";
	if (count($fieldToolTipssignos_vitales["English"]))
		$tdatasignos_vitales[".isUseToolTips"] = true;
}


	$tdatasignos_vitales[".NCSearch"] = true;



$tdatasignos_vitales[".shortTableName"] = "signos_vitales";
$tdatasignos_vitales[".nSecOptions"] = 0;

$tdatasignos_vitales[".mainTableOwnerID"] = "";
$tdatasignos_vitales[".entityType"] = 0;
$tdatasignos_vitales[".connId"] = "basedatosenfermeriaatlocalhost";


$tdatasignos_vitales[".strOriginalTableName"] = "signos_vitales";

	



$tdatasignos_vitales[".showAddInPopup"] = false;

$tdatasignos_vitales[".showEditInPopup"] = false;

$tdatasignos_vitales[".showViewInPopup"] = false;

$tdatasignos_vitales[".listAjax"] = false;
//	temporary
//$tdatasignos_vitales[".listAjax"] = false;

	$tdatasignos_vitales[".audit"] = false;

	$tdatasignos_vitales[".locking"] = false;


$pages = $tdatasignos_vitales[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatasignos_vitales[".edit"] = true;
	$tdatasignos_vitales[".afterEditAction"] = 1;
	$tdatasignos_vitales[".closePopupAfterEdit"] = 1;
	$tdatasignos_vitales[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatasignos_vitales[".add"] = true;
$tdatasignos_vitales[".afterAddAction"] = 1;
$tdatasignos_vitales[".closePopupAfterAdd"] = 1;
$tdatasignos_vitales[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatasignos_vitales[".list"] = true;
}



$tdatasignos_vitales[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatasignos_vitales[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatasignos_vitales[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatasignos_vitales[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatasignos_vitales[".printFriendly"] = true;
}



$tdatasignos_vitales[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatasignos_vitales[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatasignos_vitales[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatasignos_vitales[".isUseAjaxSuggest"] = true;





$tdatasignos_vitales[".ajaxCodeSnippetAdded"] = false;

$tdatasignos_vitales[".buttonsAdded"] = false;

$tdatasignos_vitales[".addPageEvents"] = false;

// use timepicker for search panel
$tdatasignos_vitales[".isUseTimeForSearch"] = false;


$tdatasignos_vitales[".badgeColor"] = "D2691E";


$tdatasignos_vitales[".allSearchFields"] = array();
$tdatasignos_vitales[".filterFields"] = array();
$tdatasignos_vitales[".requiredSearchFields"] = array();

$tdatasignos_vitales[".googleLikeFields"] = array();
$tdatasignos_vitales[".googleLikeFields"][] = "id_registro";
$tdatasignos_vitales[".googleLikeFields"][] = "paciente_id";
$tdatasignos_vitales[".googleLikeFields"][] = "fecha";
$tdatasignos_vitales[".googleLikeFields"][] = "hora";
$tdatasignos_vitales[".googleLikeFields"][] = "frecuencia_cardiaca";
$tdatasignos_vitales[".googleLikeFields"][] = "frecuencia_respiratoria";
$tdatasignos_vitales[".googleLikeFields"][] = "tension_arterial";
$tdatasignos_vitales[".googleLikeFields"][] = "tension_arterial_media";
$tdatasignos_vitales[".googleLikeFields"][] = "temperatura";
$tdatasignos_vitales[".googleLikeFields"][] = "saturacion_oxigeno";
$tdatasignos_vitales[".googleLikeFields"][] = "observaciones";



$tdatasignos_vitales[".tableType"] = "list";

$tdatasignos_vitales[".printerPageOrientation"] = 0;
$tdatasignos_vitales[".nPrinterPageScale"] = 100;

$tdatasignos_vitales[".nPrinterSplitRecords"] = 40;

$tdatasignos_vitales[".geocodingEnabled"] = false;










$tdatasignos_vitales[".pageSize"] = 20;

$tdatasignos_vitales[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatasignos_vitales[".strOrderBy"] = $tstrOrderBy;

$tdatasignos_vitales[".orderindexes"] = array();


$tdatasignos_vitales[".sqlHead"] = "SELECT id_registro,  	paciente_id,  	fecha,  	hora,  	frecuencia_cardiaca,  	frecuencia_respiratoria,  	tension_arterial,  	tension_arterial_media,  	temperatura,  	saturacion_oxigeno,  	observaciones";
$tdatasignos_vitales[".sqlFrom"] = "FROM signos_vitales";
$tdatasignos_vitales[".sqlWhereExpr"] = "";
$tdatasignos_vitales[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatasignos_vitales[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatasignos_vitales[".arrGroupsPerPage"] = $arrGPP;

$tdatasignos_vitales[".highlightSearchResults"] = true;

$tableKeyssignos_vitales = array();
$tableKeyssignos_vitales[] = "id_registro";
$tdatasignos_vitales[".Keys"] = $tableKeyssignos_vitales;


$tdatasignos_vitales[".hideMobileList"] = array();




//	id_registro
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_registro";
	$fdata["GoodName"] = "id_registro";
	$fdata["ownerTable"] = "signos_vitales";
	$fdata["Label"] = GetFieldLabel("signos_vitales","id_registro");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id_registro";

		$fdata["sourceSingle"] = "id_registro";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_registro";

	
	
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


	$tdatasignos_vitales["id_registro"] = $fdata;
		$tdatasignos_vitales[".searchableFields"][] = "id_registro";
//	paciente_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "paciente_id";
	$fdata["GoodName"] = "paciente_id";
	$fdata["ownerTable"] = "signos_vitales";
	$fdata["Label"] = GetFieldLabel("signos_vitales","paciente_id");
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


	$tdatasignos_vitales["paciente_id"] = $fdata;
		$tdatasignos_vitales[".searchableFields"][] = "paciente_id";
//	fecha
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "fecha";
	$fdata["GoodName"] = "fecha";
	$fdata["ownerTable"] = "signos_vitales";
	$fdata["Label"] = GetFieldLabel("signos_vitales","fecha");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "fecha";

		$fdata["sourceSingle"] = "fecha";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fecha";

	
	
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


	$tdatasignos_vitales["fecha"] = $fdata;
		$tdatasignos_vitales[".searchableFields"][] = "fecha";
//	hora
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "hora";
	$fdata["GoodName"] = "hora";
	$fdata["ownerTable"] = "signos_vitales";
	$fdata["Label"] = GetFieldLabel("signos_vitales","hora");
	$fdata["FieldType"] = 134;


	
	
			

		$fdata["strField"] = "hora";

		$fdata["sourceSingle"] = "hora";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "hora";

	
	
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


	$tdatasignos_vitales["hora"] = $fdata;
		$tdatasignos_vitales[".searchableFields"][] = "hora";
//	frecuencia_cardiaca
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "frecuencia_cardiaca";
	$fdata["GoodName"] = "frecuencia_cardiaca";
	$fdata["ownerTable"] = "signos_vitales";
	$fdata["Label"] = GetFieldLabel("signos_vitales","frecuencia_cardiaca");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "frecuencia_cardiaca";

		$fdata["sourceSingle"] = "frecuencia_cardiaca";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "frecuencia_cardiaca";

	
	
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


	$tdatasignos_vitales["frecuencia_cardiaca"] = $fdata;
		$tdatasignos_vitales[".searchableFields"][] = "frecuencia_cardiaca";
//	frecuencia_respiratoria
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "frecuencia_respiratoria";
	$fdata["GoodName"] = "frecuencia_respiratoria";
	$fdata["ownerTable"] = "signos_vitales";
	$fdata["Label"] = GetFieldLabel("signos_vitales","frecuencia_respiratoria");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "frecuencia_respiratoria";

		$fdata["sourceSingle"] = "frecuencia_respiratoria";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "frecuencia_respiratoria";

	
	
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


	$tdatasignos_vitales["frecuencia_respiratoria"] = $fdata;
		$tdatasignos_vitales[".searchableFields"][] = "frecuencia_respiratoria";
//	tension_arterial
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "tension_arterial";
	$fdata["GoodName"] = "tension_arterial";
	$fdata["ownerTable"] = "signos_vitales";
	$fdata["Label"] = GetFieldLabel("signos_vitales","tension_arterial");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "tension_arterial";

		$fdata["sourceSingle"] = "tension_arterial";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tension_arterial";

	
	
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


	$tdatasignos_vitales["tension_arterial"] = $fdata;
		$tdatasignos_vitales[".searchableFields"][] = "tension_arterial";
//	tension_arterial_media
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "tension_arterial_media";
	$fdata["GoodName"] = "tension_arterial_media";
	$fdata["ownerTable"] = "signos_vitales";
	$fdata["Label"] = GetFieldLabel("signos_vitales","tension_arterial_media");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "tension_arterial_media";

		$fdata["sourceSingle"] = "tension_arterial_media";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tension_arterial_media";

	
	
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


	$tdatasignos_vitales["tension_arterial_media"] = $fdata;
		$tdatasignos_vitales[".searchableFields"][] = "tension_arterial_media";
//	temperatura
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "temperatura";
	$fdata["GoodName"] = "temperatura";
	$fdata["ownerTable"] = "signos_vitales";
	$fdata["Label"] = GetFieldLabel("signos_vitales","temperatura");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "temperatura";

		$fdata["sourceSingle"] = "temperatura";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "temperatura";

	
	
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


	$tdatasignos_vitales["temperatura"] = $fdata;
		$tdatasignos_vitales[".searchableFields"][] = "temperatura";
//	saturacion_oxigeno
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "saturacion_oxigeno";
	$fdata["GoodName"] = "saturacion_oxigeno";
	$fdata["ownerTable"] = "signos_vitales";
	$fdata["Label"] = GetFieldLabel("signos_vitales","saturacion_oxigeno");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "saturacion_oxigeno";

		$fdata["sourceSingle"] = "saturacion_oxigeno";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "saturacion_oxigeno";

	
	
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


	$tdatasignos_vitales["saturacion_oxigeno"] = $fdata;
		$tdatasignos_vitales[".searchableFields"][] = "saturacion_oxigeno";
//	observaciones
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "observaciones";
	$fdata["GoodName"] = "observaciones";
	$fdata["ownerTable"] = "signos_vitales";
	$fdata["Label"] = GetFieldLabel("signos_vitales","observaciones");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "observaciones";

		$fdata["sourceSingle"] = "observaciones";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "observaciones";

	
	
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


	$tdatasignos_vitales["observaciones"] = $fdata;
		$tdatasignos_vitales[".searchableFields"][] = "observaciones";


$tables_data["signos_vitales"]=&$tdatasignos_vitales;
$field_labels["signos_vitales"] = &$fieldLabelssignos_vitales;
$fieldToolTips["signos_vitales"] = &$fieldToolTipssignos_vitales;
$placeHolders["signos_vitales"] = &$placeHolderssignos_vitales;
$page_titles["signos_vitales"] = &$pageTitlessignos_vitales;


changeTextControlsToDate( "signos_vitales" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["signos_vitales"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["signos_vitales"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="pacientes";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="pacientes";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "pacientes";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["signos_vitales"][0] = $masterParams;
				$masterTablesData["signos_vitales"][0]["masterKeys"] = array();
	$masterTablesData["signos_vitales"][0]["masterKeys"][]="id_paciente";
				$masterTablesData["signos_vitales"][0]["detailKeys"] = array();
	$masterTablesData["signos_vitales"][0]["detailKeys"][]="paciente_id";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_signos_vitales()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_registro,  	paciente_id,  	fecha,  	hora,  	frecuencia_cardiaca,  	frecuencia_respiratoria,  	tension_arterial,  	tension_arterial_media,  	temperatura,  	saturacion_oxigeno,  	observaciones";
$proto0["m_strFrom"] = "FROM signos_vitales";
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
	"m_strName" => "id_registro",
	"m_strTable" => "signos_vitales",
	"m_srcTableName" => "signos_vitales"
));

$proto6["m_sql"] = "id_registro";
$proto6["m_srcTableName"] = "signos_vitales";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "paciente_id",
	"m_strTable" => "signos_vitales",
	"m_srcTableName" => "signos_vitales"
));

$proto8["m_sql"] = "paciente_id";
$proto8["m_srcTableName"] = "signos_vitales";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha",
	"m_strTable" => "signos_vitales",
	"m_srcTableName" => "signos_vitales"
));

$proto10["m_sql"] = "fecha";
$proto10["m_srcTableName"] = "signos_vitales";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "hora",
	"m_strTable" => "signos_vitales",
	"m_srcTableName" => "signos_vitales"
));

$proto12["m_sql"] = "hora";
$proto12["m_srcTableName"] = "signos_vitales";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "frecuencia_cardiaca",
	"m_strTable" => "signos_vitales",
	"m_srcTableName" => "signos_vitales"
));

$proto14["m_sql"] = "frecuencia_cardiaca";
$proto14["m_srcTableName"] = "signos_vitales";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "frecuencia_respiratoria",
	"m_strTable" => "signos_vitales",
	"m_srcTableName" => "signos_vitales"
));

$proto16["m_sql"] = "frecuencia_respiratoria";
$proto16["m_srcTableName"] = "signos_vitales";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "tension_arterial",
	"m_strTable" => "signos_vitales",
	"m_srcTableName" => "signos_vitales"
));

$proto18["m_sql"] = "tension_arterial";
$proto18["m_srcTableName"] = "signos_vitales";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "tension_arterial_media",
	"m_strTable" => "signos_vitales",
	"m_srcTableName" => "signos_vitales"
));

$proto20["m_sql"] = "tension_arterial_media";
$proto20["m_srcTableName"] = "signos_vitales";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "temperatura",
	"m_strTable" => "signos_vitales",
	"m_srcTableName" => "signos_vitales"
));

$proto22["m_sql"] = "temperatura";
$proto22["m_srcTableName"] = "signos_vitales";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "saturacion_oxigeno",
	"m_strTable" => "signos_vitales",
	"m_srcTableName" => "signos_vitales"
));

$proto24["m_sql"] = "saturacion_oxigeno";
$proto24["m_srcTableName"] = "signos_vitales";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "observaciones",
	"m_strTable" => "signos_vitales",
	"m_srcTableName" => "signos_vitales"
));

$proto26["m_sql"] = "observaciones";
$proto26["m_srcTableName"] = "signos_vitales";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto28=array();
$proto28["m_link"] = "SQLL_MAIN";
			$proto29=array();
$proto29["m_strName"] = "signos_vitales";
$proto29["m_srcTableName"] = "signos_vitales";
$proto29["m_columns"] = array();
$proto29["m_columns"][] = "id_registro";
$proto29["m_columns"][] = "paciente_id";
$proto29["m_columns"][] = "fecha";
$proto29["m_columns"][] = "hora";
$proto29["m_columns"][] = "frecuencia_cardiaca";
$proto29["m_columns"][] = "frecuencia_respiratoria";
$proto29["m_columns"][] = "tension_arterial";
$proto29["m_columns"][] = "tension_arterial_media";
$proto29["m_columns"][] = "temperatura";
$proto29["m_columns"][] = "saturacion_oxigeno";
$proto29["m_columns"][] = "observaciones";
$obj = new SQLTable($proto29);

$proto28["m_table"] = $obj;
$proto28["m_sql"] = "signos_vitales";
$proto28["m_alias"] = "";
$proto28["m_srcTableName"] = "signos_vitales";
$proto30=array();
$proto30["m_sql"] = "";
$proto30["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto30["m_column"]=$obj;
$proto30["m_contained"] = array();
$proto30["m_strCase"] = "";
$proto30["m_havingmode"] = false;
$proto30["m_inBrackets"] = false;
$proto30["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto30);

$proto28["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto28);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="signos_vitales";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_signos_vitales = createSqlQuery_signos_vitales();


	
		;

											

$tdatasignos_vitales[".sqlquery"] = $queryData_signos_vitales;



$tdatasignos_vitales[".hasEvents"] = false;

?>