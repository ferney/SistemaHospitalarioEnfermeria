<?php
$tdataregistros_glucometria = array();
$tdataregistros_glucometria[".searchableFields"] = array();
$tdataregistros_glucometria[".ShortName"] = "registros_glucometria";
$tdataregistros_glucometria[".OwnerID"] = "";
$tdataregistros_glucometria[".OriginalTable"] = "registros_glucometria";


$tdataregistros_glucometria[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataregistros_glucometria[".originalPagesByType"] = $tdataregistros_glucometria[".pagesByType"];
$tdataregistros_glucometria[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataregistros_glucometria[".originalPages"] = $tdataregistros_glucometria[".pages"];
$tdataregistros_glucometria[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataregistros_glucometria[".originalDefaultPages"] = $tdataregistros_glucometria[".defaultPages"];

//	field labels
$fieldLabelsregistros_glucometria = array();
$fieldToolTipsregistros_glucometria = array();
$pageTitlesregistros_glucometria = array();
$placeHoldersregistros_glucometria = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsregistros_glucometria["English"] = array();
	$fieldToolTipsregistros_glucometria["English"] = array();
	$placeHoldersregistros_glucometria["English"] = array();
	$pageTitlesregistros_glucometria["English"] = array();
	$fieldLabelsregistros_glucometria["English"]["registro_id"] = "Registro Id";
	$fieldToolTipsregistros_glucometria["English"]["registro_id"] = "";
	$placeHoldersregistros_glucometria["English"]["registro_id"] = "";
	$fieldLabelsregistros_glucometria["English"]["paciente_id"] = "Paciente Id";
	$fieldToolTipsregistros_glucometria["English"]["paciente_id"] = "";
	$placeHoldersregistros_glucometria["English"]["paciente_id"] = "";
	$fieldLabelsregistros_glucometria["English"]["fecha"] = "Fecha";
	$fieldToolTipsregistros_glucometria["English"]["fecha"] = "";
	$placeHoldersregistros_glucometria["English"]["fecha"] = "";
	$fieldLabelsregistros_glucometria["English"]["hora"] = "Hora";
	$fieldToolTipsregistros_glucometria["English"]["hora"] = "";
	$placeHoldersregistros_glucometria["English"]["hora"] = "";
	$fieldLabelsregistros_glucometria["English"]["glucometria_pre"] = "Glucometria Pre";
	$fieldToolTipsregistros_glucometria["English"]["glucometria_pre"] = "";
	$placeHoldersregistros_glucometria["English"]["glucometria_pre"] = "";
	$fieldLabelsregistros_glucometria["English"]["glucometria_post"] = "Glucometria Post";
	$fieldToolTipsregistros_glucometria["English"]["glucometria_post"] = "";
	$placeHoldersregistros_glucometria["English"]["glucometria_post"] = "";
	$fieldLabelsregistros_glucometria["English"]["valor_correccion"] = "Valor Correccion";
	$fieldToolTipsregistros_glucometria["English"]["valor_correccion"] = "";
	$placeHoldersregistros_glucometria["English"]["valor_correccion"] = "";
	$fieldLabelsregistros_glucometria["English"]["nota_enfermeria"] = "Nota Enfermeria";
	$fieldToolTipsregistros_glucometria["English"]["nota_enfermeria"] = "";
	$placeHoldersregistros_glucometria["English"]["nota_enfermeria"] = "";
	$fieldLabelsregistros_glucometria["English"]["creado_en"] = "Creado En";
	$fieldToolTipsregistros_glucometria["English"]["creado_en"] = "";
	$placeHoldersregistros_glucometria["English"]["creado_en"] = "";
	$fieldLabelsregistros_glucometria["English"]["actualizado_en"] = "Actualizado En";
	$fieldToolTipsregistros_glucometria["English"]["actualizado_en"] = "";
	$placeHoldersregistros_glucometria["English"]["actualizado_en"] = "";
	if (count($fieldToolTipsregistros_glucometria["English"]))
		$tdataregistros_glucometria[".isUseToolTips"] = true;
}


	$tdataregistros_glucometria[".NCSearch"] = true;



$tdataregistros_glucometria[".shortTableName"] = "registros_glucometria";
$tdataregistros_glucometria[".nSecOptions"] = 0;

$tdataregistros_glucometria[".mainTableOwnerID"] = "";
$tdataregistros_glucometria[".entityType"] = 0;
$tdataregistros_glucometria[".connId"] = "basedatosenfermeriaatlocalhost";


$tdataregistros_glucometria[".strOriginalTableName"] = "registros_glucometria";

	



$tdataregistros_glucometria[".showAddInPopup"] = false;

$tdataregistros_glucometria[".showEditInPopup"] = false;

$tdataregistros_glucometria[".showViewInPopup"] = false;

$tdataregistros_glucometria[".listAjax"] = false;
//	temporary
//$tdataregistros_glucometria[".listAjax"] = false;

	$tdataregistros_glucometria[".audit"] = false;

	$tdataregistros_glucometria[".locking"] = false;


$pages = $tdataregistros_glucometria[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataregistros_glucometria[".edit"] = true;
	$tdataregistros_glucometria[".afterEditAction"] = 1;
	$tdataregistros_glucometria[".closePopupAfterEdit"] = 1;
	$tdataregistros_glucometria[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataregistros_glucometria[".add"] = true;
$tdataregistros_glucometria[".afterAddAction"] = 1;
$tdataregistros_glucometria[".closePopupAfterAdd"] = 1;
$tdataregistros_glucometria[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataregistros_glucometria[".list"] = true;
}



$tdataregistros_glucometria[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataregistros_glucometria[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataregistros_glucometria[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataregistros_glucometria[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataregistros_glucometria[".printFriendly"] = true;
}



$tdataregistros_glucometria[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataregistros_glucometria[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataregistros_glucometria[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataregistros_glucometria[".isUseAjaxSuggest"] = true;





$tdataregistros_glucometria[".ajaxCodeSnippetAdded"] = false;

$tdataregistros_glucometria[".buttonsAdded"] = false;

$tdataregistros_glucometria[".addPageEvents"] = false;

// use timepicker for search panel
$tdataregistros_glucometria[".isUseTimeForSearch"] = false;


$tdataregistros_glucometria[".badgeColor"] = "00C2C5";


$tdataregistros_glucometria[".allSearchFields"] = array();
$tdataregistros_glucometria[".filterFields"] = array();
$tdataregistros_glucometria[".requiredSearchFields"] = array();

$tdataregistros_glucometria[".googleLikeFields"] = array();
$tdataregistros_glucometria[".googleLikeFields"][] = "registro_id";
$tdataregistros_glucometria[".googleLikeFields"][] = "paciente_id";
$tdataregistros_glucometria[".googleLikeFields"][] = "fecha";
$tdataregistros_glucometria[".googleLikeFields"][] = "hora";
$tdataregistros_glucometria[".googleLikeFields"][] = "glucometria_pre";
$tdataregistros_glucometria[".googleLikeFields"][] = "glucometria_post";
$tdataregistros_glucometria[".googleLikeFields"][] = "valor_correccion";
$tdataregistros_glucometria[".googleLikeFields"][] = "nota_enfermeria";
$tdataregistros_glucometria[".googleLikeFields"][] = "creado_en";
$tdataregistros_glucometria[".googleLikeFields"][] = "actualizado_en";



$tdataregistros_glucometria[".tableType"] = "list";

$tdataregistros_glucometria[".printerPageOrientation"] = 0;
$tdataregistros_glucometria[".nPrinterPageScale"] = 100;

$tdataregistros_glucometria[".nPrinterSplitRecords"] = 40;

$tdataregistros_glucometria[".geocodingEnabled"] = false;










$tdataregistros_glucometria[".pageSize"] = 20;

$tdataregistros_glucometria[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataregistros_glucometria[".strOrderBy"] = $tstrOrderBy;

$tdataregistros_glucometria[".orderindexes"] = array();


$tdataregistros_glucometria[".sqlHead"] = "SELECT registro_id,  	paciente_id,  	fecha,  	hora,  	glucometria_pre,  	glucometria_post,  	valor_correccion,  	nota_enfermeria,  	creado_en,  	actualizado_en";
$tdataregistros_glucometria[".sqlFrom"] = "FROM registros_glucometria";
$tdataregistros_glucometria[".sqlWhereExpr"] = "";
$tdataregistros_glucometria[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataregistros_glucometria[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataregistros_glucometria[".arrGroupsPerPage"] = $arrGPP;

$tdataregistros_glucometria[".highlightSearchResults"] = true;

$tableKeysregistros_glucometria = array();
$tableKeysregistros_glucometria[] = "registro_id";
$tdataregistros_glucometria[".Keys"] = $tableKeysregistros_glucometria;


$tdataregistros_glucometria[".hideMobileList"] = array();




//	registro_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "registro_id";
	$fdata["GoodName"] = "registro_id";
	$fdata["ownerTable"] = "registros_glucometria";
	$fdata["Label"] = GetFieldLabel("registros_glucometria","registro_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "registro_id";

		$fdata["sourceSingle"] = "registro_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "registro_id";

	
	
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


	$tdataregistros_glucometria["registro_id"] = $fdata;
		$tdataregistros_glucometria[".searchableFields"][] = "registro_id";
//	paciente_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "paciente_id";
	$fdata["GoodName"] = "paciente_id";
	$fdata["ownerTable"] = "registros_glucometria";
	$fdata["Label"] = GetFieldLabel("registros_glucometria","paciente_id");
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


	$tdataregistros_glucometria["paciente_id"] = $fdata;
		$tdataregistros_glucometria[".searchableFields"][] = "paciente_id";
//	fecha
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "fecha";
	$fdata["GoodName"] = "fecha";
	$fdata["ownerTable"] = "registros_glucometria";
	$fdata["Label"] = GetFieldLabel("registros_glucometria","fecha");
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


	
	



		$edata["IsRequired"] = true;

	
	
	
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
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
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


	$tdataregistros_glucometria["fecha"] = $fdata;
		$tdataregistros_glucometria[".searchableFields"][] = "fecha";
//	hora
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "hora";
	$fdata["GoodName"] = "hora";
	$fdata["ownerTable"] = "registros_glucometria";
	$fdata["Label"] = GetFieldLabel("registros_glucometria","hora");
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


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
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


	$tdataregistros_glucometria["hora"] = $fdata;
		$tdataregistros_glucometria[".searchableFields"][] = "hora";
//	glucometria_pre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "glucometria_pre";
	$fdata["GoodName"] = "glucometria_pre";
	$fdata["ownerTable"] = "registros_glucometria";
	$fdata["Label"] = GetFieldLabel("registros_glucometria","glucometria_pre");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "glucometria_pre";

		$fdata["sourceSingle"] = "glucometria_pre";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "glucometria_pre";

	
	
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


	$tdataregistros_glucometria["glucometria_pre"] = $fdata;
		$tdataregistros_glucometria[".searchableFields"][] = "glucometria_pre";
//	glucometria_post
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "glucometria_post";
	$fdata["GoodName"] = "glucometria_post";
	$fdata["ownerTable"] = "registros_glucometria";
	$fdata["Label"] = GetFieldLabel("registros_glucometria","glucometria_post");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "glucometria_post";

		$fdata["sourceSingle"] = "glucometria_post";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "glucometria_post";

	
	
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


	$tdataregistros_glucometria["glucometria_post"] = $fdata;
		$tdataregistros_glucometria[".searchableFields"][] = "glucometria_post";
//	valor_correccion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "valor_correccion";
	$fdata["GoodName"] = "valor_correccion";
	$fdata["ownerTable"] = "registros_glucometria";
	$fdata["Label"] = GetFieldLabel("registros_glucometria","valor_correccion");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "valor_correccion";

		$fdata["sourceSingle"] = "valor_correccion";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "valor_correccion";

	
	
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


	$tdataregistros_glucometria["valor_correccion"] = $fdata;
		$tdataregistros_glucometria[".searchableFields"][] = "valor_correccion";
//	nota_enfermeria
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "nota_enfermeria";
	$fdata["GoodName"] = "nota_enfermeria";
	$fdata["ownerTable"] = "registros_glucometria";
	$fdata["Label"] = GetFieldLabel("registros_glucometria","nota_enfermeria");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "nota_enfermeria";

		$fdata["sourceSingle"] = "nota_enfermeria";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nota_enfermeria";

	
	
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


	$tdataregistros_glucometria["nota_enfermeria"] = $fdata;
		$tdataregistros_glucometria[".searchableFields"][] = "nota_enfermeria";
//	creado_en
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "creado_en";
	$fdata["GoodName"] = "creado_en";
	$fdata["ownerTable"] = "registros_glucometria";
	$fdata["Label"] = GetFieldLabel("registros_glucometria","creado_en");
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


	$tdataregistros_glucometria["creado_en"] = $fdata;
		$tdataregistros_glucometria[".searchableFields"][] = "creado_en";
//	actualizado_en
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "actualizado_en";
	$fdata["GoodName"] = "actualizado_en";
	$fdata["ownerTable"] = "registros_glucometria";
	$fdata["Label"] = GetFieldLabel("registros_glucometria","actualizado_en");
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


	$tdataregistros_glucometria["actualizado_en"] = $fdata;
		$tdataregistros_glucometria[".searchableFields"][] = "actualizado_en";


$tables_data["registros_glucometria"]=&$tdataregistros_glucometria;
$field_labels["registros_glucometria"] = &$fieldLabelsregistros_glucometria;
$fieldToolTips["registros_glucometria"] = &$fieldToolTipsregistros_glucometria;
$placeHolders["registros_glucometria"] = &$placeHoldersregistros_glucometria;
$page_titles["registros_glucometria"] = &$pageTitlesregistros_glucometria;


changeTextControlsToDate( "registros_glucometria" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["registros_glucometria"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["registros_glucometria"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="pacientes";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="pacientes";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "pacientes";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["registros_glucometria"][0] = $masterParams;
				$masterTablesData["registros_glucometria"][0]["masterKeys"] = array();
	$masterTablesData["registros_glucometria"][0]["masterKeys"][]="id_paciente";
				$masterTablesData["registros_glucometria"][0]["detailKeys"] = array();
	$masterTablesData["registros_glucometria"][0]["detailKeys"][]="paciente_id";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_registros_glucometria()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "registro_id,  	paciente_id,  	fecha,  	hora,  	glucometria_pre,  	glucometria_post,  	valor_correccion,  	nota_enfermeria,  	creado_en,  	actualizado_en";
$proto0["m_strFrom"] = "FROM registros_glucometria";
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
	"m_strName" => "registro_id",
	"m_strTable" => "registros_glucometria",
	"m_srcTableName" => "registros_glucometria"
));

$proto6["m_sql"] = "registro_id";
$proto6["m_srcTableName"] = "registros_glucometria";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "paciente_id",
	"m_strTable" => "registros_glucometria",
	"m_srcTableName" => "registros_glucometria"
));

$proto8["m_sql"] = "paciente_id";
$proto8["m_srcTableName"] = "registros_glucometria";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha",
	"m_strTable" => "registros_glucometria",
	"m_srcTableName" => "registros_glucometria"
));

$proto10["m_sql"] = "fecha";
$proto10["m_srcTableName"] = "registros_glucometria";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "hora",
	"m_strTable" => "registros_glucometria",
	"m_srcTableName" => "registros_glucometria"
));

$proto12["m_sql"] = "hora";
$proto12["m_srcTableName"] = "registros_glucometria";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "glucometria_pre",
	"m_strTable" => "registros_glucometria",
	"m_srcTableName" => "registros_glucometria"
));

$proto14["m_sql"] = "glucometria_pre";
$proto14["m_srcTableName"] = "registros_glucometria";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "glucometria_post",
	"m_strTable" => "registros_glucometria",
	"m_srcTableName" => "registros_glucometria"
));

$proto16["m_sql"] = "glucometria_post";
$proto16["m_srcTableName"] = "registros_glucometria";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "valor_correccion",
	"m_strTable" => "registros_glucometria",
	"m_srcTableName" => "registros_glucometria"
));

$proto18["m_sql"] = "valor_correccion";
$proto18["m_srcTableName"] = "registros_glucometria";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "nota_enfermeria",
	"m_strTable" => "registros_glucometria",
	"m_srcTableName" => "registros_glucometria"
));

$proto20["m_sql"] = "nota_enfermeria";
$proto20["m_srcTableName"] = "registros_glucometria";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "creado_en",
	"m_strTable" => "registros_glucometria",
	"m_srcTableName" => "registros_glucometria"
));

$proto22["m_sql"] = "creado_en";
$proto22["m_srcTableName"] = "registros_glucometria";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "actualizado_en",
	"m_strTable" => "registros_glucometria",
	"m_srcTableName" => "registros_glucometria"
));

$proto24["m_sql"] = "actualizado_en";
$proto24["m_srcTableName"] = "registros_glucometria";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto26=array();
$proto26["m_link"] = "SQLL_MAIN";
			$proto27=array();
$proto27["m_strName"] = "registros_glucometria";
$proto27["m_srcTableName"] = "registros_glucometria";
$proto27["m_columns"] = array();
$proto27["m_columns"][] = "registro_id";
$proto27["m_columns"][] = "paciente_id";
$proto27["m_columns"][] = "fecha";
$proto27["m_columns"][] = "hora";
$proto27["m_columns"][] = "glucometria_pre";
$proto27["m_columns"][] = "glucometria_post";
$proto27["m_columns"][] = "valor_correccion";
$proto27["m_columns"][] = "nota_enfermeria";
$proto27["m_columns"][] = "creado_en";
$proto27["m_columns"][] = "actualizado_en";
$obj = new SQLTable($proto27);

$proto26["m_table"] = $obj;
$proto26["m_sql"] = "registros_glucometria";
$proto26["m_alias"] = "";
$proto26["m_srcTableName"] = "registros_glucometria";
$proto28=array();
$proto28["m_sql"] = "";
$proto28["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto28["m_column"]=$obj;
$proto28["m_contained"] = array();
$proto28["m_strCase"] = "";
$proto28["m_havingmode"] = false;
$proto28["m_inBrackets"] = false;
$proto28["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto28);

$proto26["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto26);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="registros_glucometria";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_registros_glucometria = createSqlQuery_registros_glucometria();


	
		;

										

$tdataregistros_glucometria[".sqlquery"] = $queryData_registros_glucometria;



$tdataregistros_glucometria[".hasEvents"] = false;

?>