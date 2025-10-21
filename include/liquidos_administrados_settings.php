<?php
$tdataliquidos_administrados = array();
$tdataliquidos_administrados[".searchableFields"] = array();
$tdataliquidos_administrados[".ShortName"] = "liquidos_administrados";
$tdataliquidos_administrados[".OwnerID"] = "";
$tdataliquidos_administrados[".OriginalTable"] = "liquidos_administrados";


$tdataliquidos_administrados[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataliquidos_administrados[".originalPagesByType"] = $tdataliquidos_administrados[".pagesByType"];
$tdataliquidos_administrados[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataliquidos_administrados[".originalPages"] = $tdataliquidos_administrados[".pages"];
$tdataliquidos_administrados[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataliquidos_administrados[".originalDefaultPages"] = $tdataliquidos_administrados[".defaultPages"];

//	field labels
$fieldLabelsliquidos_administrados = array();
$fieldToolTipsliquidos_administrados = array();
$pageTitlesliquidos_administrados = array();
$placeHoldersliquidos_administrados = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsliquidos_administrados["English"] = array();
	$fieldToolTipsliquidos_administrados["English"] = array();
	$placeHoldersliquidos_administrados["English"] = array();
	$pageTitlesliquidos_administrados["English"] = array();
	$fieldLabelsliquidos_administrados["English"]["id_admin"] = "Id Admin";
	$fieldToolTipsliquidos_administrados["English"]["id_admin"] = "";
	$placeHoldersliquidos_administrados["English"]["id_admin"] = "";
	$fieldLabelsliquidos_administrados["English"]["paciente_id"] = "Paciente Id";
	$fieldToolTipsliquidos_administrados["English"]["paciente_id"] = "";
	$placeHoldersliquidos_administrados["English"]["paciente_id"] = "";
	$fieldLabelsliquidos_administrados["English"]["fecha_hora"] = "Fecha Hora";
	$fieldToolTipsliquidos_administrados["English"]["fecha_hora"] = "";
	$placeHoldersliquidos_administrados["English"]["fecha_hora"] = "";
	$fieldLabelsliquidos_administrados["English"]["cantidad_ordenada"] = "Cantidad Ordenada";
	$fieldToolTipsliquidos_administrados["English"]["cantidad_ordenada"] = "";
	$placeHoldersliquidos_administrados["English"]["cantidad_ordenada"] = "";
	$fieldLabelsliquidos_administrados["English"]["cantidad_administrada"] = "Cantidad Administrada";
	$fieldToolTipsliquidos_administrados["English"]["cantidad_administrada"] = "";
	$placeHoldersliquidos_administrados["English"]["cantidad_administrada"] = "";
	$fieldLabelsliquidos_administrados["English"]["via"] = "Via";
	$fieldToolTipsliquidos_administrados["English"]["via"] = "";
	$placeHoldersliquidos_administrados["English"]["via"] = "";
	$fieldLabelsliquidos_administrados["English"]["tipo"] = "Tipo";
	$fieldToolTipsliquidos_administrados["English"]["tipo"] = "";
	$placeHoldersliquidos_administrados["English"]["tipo"] = "";
	$fieldLabelsliquidos_administrados["English"]["enfermero"] = "Enfermero";
	$fieldToolTipsliquidos_administrados["English"]["enfermero"] = "";
	$placeHoldersliquidos_administrados["English"]["enfermero"] = "";
	$fieldLabelsliquidos_administrados["English"]["hora_inicial"] = "Hora Inicial";
	$fieldToolTipsliquidos_administrados["English"]["hora_inicial"] = "";
	$placeHoldersliquidos_administrados["English"]["hora_inicial"] = "";
	$fieldLabelsliquidos_administrados["English"]["hora_final"] = "Hora Final";
	$fieldToolTipsliquidos_administrados["English"]["hora_final"] = "";
	$placeHoldersliquidos_administrados["English"]["hora_final"] = "";
	$fieldLabelsliquidos_administrados["English"]["liquido"] = "Liquido";
	$fieldToolTipsliquidos_administrados["English"]["liquido"] = "";
	$placeHoldersliquidos_administrados["English"]["liquido"] = "";
	$fieldLabelsliquidos_administrados["English"]["cantidad"] = "Cantidad";
	$fieldToolTipsliquidos_administrados["English"]["cantidad"] = "";
	$placeHoldersliquidos_administrados["English"]["cantidad"] = "";
	if (count($fieldToolTipsliquidos_administrados["English"]))
		$tdataliquidos_administrados[".isUseToolTips"] = true;
}


	$tdataliquidos_administrados[".NCSearch"] = true;



$tdataliquidos_administrados[".shortTableName"] = "liquidos_administrados";
$tdataliquidos_administrados[".nSecOptions"] = 0;

$tdataliquidos_administrados[".mainTableOwnerID"] = "";
$tdataliquidos_administrados[".entityType"] = 0;
$tdataliquidos_administrados[".connId"] = "basedatosenfermeriaatlocalhost";


$tdataliquidos_administrados[".strOriginalTableName"] = "liquidos_administrados";

	



$tdataliquidos_administrados[".showAddInPopup"] = false;

$tdataliquidos_administrados[".showEditInPopup"] = false;

$tdataliquidos_administrados[".showViewInPopup"] = false;

$tdataliquidos_administrados[".listAjax"] = false;
//	temporary
//$tdataliquidos_administrados[".listAjax"] = false;

	$tdataliquidos_administrados[".audit"] = false;

	$tdataliquidos_administrados[".locking"] = false;


$pages = $tdataliquidos_administrados[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataliquidos_administrados[".edit"] = true;
	$tdataliquidos_administrados[".afterEditAction"] = 1;
	$tdataliquidos_administrados[".closePopupAfterEdit"] = 1;
	$tdataliquidos_administrados[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataliquidos_administrados[".add"] = true;
$tdataliquidos_administrados[".afterAddAction"] = 1;
$tdataliquidos_administrados[".closePopupAfterAdd"] = 1;
$tdataliquidos_administrados[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataliquidos_administrados[".list"] = true;
}



$tdataliquidos_administrados[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataliquidos_administrados[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataliquidos_administrados[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataliquidos_administrados[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataliquidos_administrados[".printFriendly"] = true;
}



$tdataliquidos_administrados[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataliquidos_administrados[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataliquidos_administrados[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataliquidos_administrados[".isUseAjaxSuggest"] = true;





$tdataliquidos_administrados[".ajaxCodeSnippetAdded"] = false;

$tdataliquidos_administrados[".buttonsAdded"] = false;

$tdataliquidos_administrados[".addPageEvents"] = false;

// use timepicker for search panel
$tdataliquidos_administrados[".isUseTimeForSearch"] = false;


$tdataliquidos_administrados[".badgeColor"] = "E67349";


$tdataliquidos_administrados[".allSearchFields"] = array();
$tdataliquidos_administrados[".filterFields"] = array();
$tdataliquidos_administrados[".requiredSearchFields"] = array();

$tdataliquidos_administrados[".googleLikeFields"] = array();
$tdataliquidos_administrados[".googleLikeFields"][] = "id_admin";
$tdataliquidos_administrados[".googleLikeFields"][] = "paciente_id";
$tdataliquidos_administrados[".googleLikeFields"][] = "fecha_hora";
$tdataliquidos_administrados[".googleLikeFields"][] = "cantidad_ordenada";
$tdataliquidos_administrados[".googleLikeFields"][] = "cantidad_administrada";
$tdataliquidos_administrados[".googleLikeFields"][] = "via";
$tdataliquidos_administrados[".googleLikeFields"][] = "tipo";
$tdataliquidos_administrados[".googleLikeFields"][] = "enfermero";
$tdataliquidos_administrados[".googleLikeFields"][] = "hora_inicial";
$tdataliquidos_administrados[".googleLikeFields"][] = "hora_final";
$tdataliquidos_administrados[".googleLikeFields"][] = "liquido";
$tdataliquidos_administrados[".googleLikeFields"][] = "cantidad";



$tdataliquidos_administrados[".tableType"] = "list";

$tdataliquidos_administrados[".printerPageOrientation"] = 0;
$tdataliquidos_administrados[".nPrinterPageScale"] = 100;

$tdataliquidos_administrados[".nPrinterSplitRecords"] = 40;

$tdataliquidos_administrados[".geocodingEnabled"] = false;










$tdataliquidos_administrados[".pageSize"] = 20;

$tdataliquidos_administrados[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataliquidos_administrados[".strOrderBy"] = $tstrOrderBy;

$tdataliquidos_administrados[".orderindexes"] = array();


$tdataliquidos_administrados[".sqlHead"] = "SELECT id_admin,  	paciente_id,  	fecha_hora,  	cantidad_ordenada,  	cantidad_administrada,  	via,  	tipo,  	enfermero,  	hora_inicial,  	hora_final,  	liquido,  	cantidad";
$tdataliquidos_administrados[".sqlFrom"] = "FROM liquidos_administrados";
$tdataliquidos_administrados[".sqlWhereExpr"] = "";
$tdataliquidos_administrados[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataliquidos_administrados[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataliquidos_administrados[".arrGroupsPerPage"] = $arrGPP;

$tdataliquidos_administrados[".highlightSearchResults"] = true;

$tableKeysliquidos_administrados = array();
$tableKeysliquidos_administrados[] = "id_admin";
$tdataliquidos_administrados[".Keys"] = $tableKeysliquidos_administrados;


$tdataliquidos_administrados[".hideMobileList"] = array();




//	id_admin
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_admin";
	$fdata["GoodName"] = "id_admin";
	$fdata["ownerTable"] = "liquidos_administrados";
	$fdata["Label"] = GetFieldLabel("liquidos_administrados","id_admin");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id_admin";

		$fdata["sourceSingle"] = "id_admin";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_admin";

	
	
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


	$tdataliquidos_administrados["id_admin"] = $fdata;
		$tdataliquidos_administrados[".searchableFields"][] = "id_admin";
//	paciente_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "paciente_id";
	$fdata["GoodName"] = "paciente_id";
	$fdata["ownerTable"] = "liquidos_administrados";
	$fdata["Label"] = GetFieldLabel("liquidos_administrados","paciente_id");
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


	$tdataliquidos_administrados["paciente_id"] = $fdata;
		$tdataliquidos_administrados[".searchableFields"][] = "paciente_id";
//	fecha_hora
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "fecha_hora";
	$fdata["GoodName"] = "fecha_hora";
	$fdata["ownerTable"] = "liquidos_administrados";
	$fdata["Label"] = GetFieldLabel("liquidos_administrados","fecha_hora");
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


	$tdataliquidos_administrados["fecha_hora"] = $fdata;
		$tdataliquidos_administrados[".searchableFields"][] = "fecha_hora";
//	cantidad_ordenada
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "cantidad_ordenada";
	$fdata["GoodName"] = "cantidad_ordenada";
	$fdata["ownerTable"] = "liquidos_administrados";
	$fdata["Label"] = GetFieldLabel("liquidos_administrados","cantidad_ordenada");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "cantidad_ordenada";

		$fdata["sourceSingle"] = "cantidad_ordenada";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cantidad_ordenada";

	
	
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


	$tdataliquidos_administrados["cantidad_ordenada"] = $fdata;
		$tdataliquidos_administrados[".searchableFields"][] = "cantidad_ordenada";
//	cantidad_administrada
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "cantidad_administrada";
	$fdata["GoodName"] = "cantidad_administrada";
	$fdata["ownerTable"] = "liquidos_administrados";
	$fdata["Label"] = GetFieldLabel("liquidos_administrados","cantidad_administrada");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "cantidad_administrada";

		$fdata["sourceSingle"] = "cantidad_administrada";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cantidad_administrada";

	
	
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


	$tdataliquidos_administrados["cantidad_administrada"] = $fdata;
		$tdataliquidos_administrados[".searchableFields"][] = "cantidad_administrada";
//	via
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "via";
	$fdata["GoodName"] = "via";
	$fdata["ownerTable"] = "liquidos_administrados";
	$fdata["Label"] = GetFieldLabel("liquidos_administrados","via");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "via";

		$fdata["sourceSingle"] = "via";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "via";

	
	
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


	$tdataliquidos_administrados["via"] = $fdata;
		$tdataliquidos_administrados[".searchableFields"][] = "via";
//	tipo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "tipo";
	$fdata["GoodName"] = "tipo";
	$fdata["ownerTable"] = "liquidos_administrados";
	$fdata["Label"] = GetFieldLabel("liquidos_administrados","tipo");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "tipo";

		$fdata["sourceSingle"] = "tipo";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tipo";

	
	
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


	$tdataliquidos_administrados["tipo"] = $fdata;
		$tdataliquidos_administrados[".searchableFields"][] = "tipo";
//	enfermero
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "enfermero";
	$fdata["GoodName"] = "enfermero";
	$fdata["ownerTable"] = "liquidos_administrados";
	$fdata["Label"] = GetFieldLabel("liquidos_administrados","enfermero");
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


	$tdataliquidos_administrados["enfermero"] = $fdata;
		$tdataliquidos_administrados[".searchableFields"][] = "enfermero";
//	hora_inicial
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "hora_inicial";
	$fdata["GoodName"] = "hora_inicial";
	$fdata["ownerTable"] = "liquidos_administrados";
	$fdata["Label"] = GetFieldLabel("liquidos_administrados","hora_inicial");
	$fdata["FieldType"] = 134;


	
	
			

		$fdata["strField"] = "hora_inicial";

		$fdata["sourceSingle"] = "hora_inicial";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "hora_inicial";

	
	
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


	$tdataliquidos_administrados["hora_inicial"] = $fdata;
		$tdataliquidos_administrados[".searchableFields"][] = "hora_inicial";
//	hora_final
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "hora_final";
	$fdata["GoodName"] = "hora_final";
	$fdata["ownerTable"] = "liquidos_administrados";
	$fdata["Label"] = GetFieldLabel("liquidos_administrados","hora_final");
	$fdata["FieldType"] = 134;


	
	
			

		$fdata["strField"] = "hora_final";

		$fdata["sourceSingle"] = "hora_final";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "hora_final";

	
	
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


	$tdataliquidos_administrados["hora_final"] = $fdata;
		$tdataliquidos_administrados[".searchableFields"][] = "hora_final";
//	liquido
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "liquido";
	$fdata["GoodName"] = "liquido";
	$fdata["ownerTable"] = "liquidos_administrados";
	$fdata["Label"] = GetFieldLabel("liquidos_administrados","liquido");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "liquido";

		$fdata["sourceSingle"] = "liquido";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "liquido";

	
	
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


	$tdataliquidos_administrados["liquido"] = $fdata;
		$tdataliquidos_administrados[".searchableFields"][] = "liquido";
//	cantidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "cantidad";
	$fdata["GoodName"] = "cantidad";
	$fdata["ownerTable"] = "liquidos_administrados";
	$fdata["Label"] = GetFieldLabel("liquidos_administrados","cantidad");
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


	$tdataliquidos_administrados["cantidad"] = $fdata;
		$tdataliquidos_administrados[".searchableFields"][] = "cantidad";


$tables_data["liquidos_administrados"]=&$tdataliquidos_administrados;
$field_labels["liquidos_administrados"] = &$fieldLabelsliquidos_administrados;
$fieldToolTips["liquidos_administrados"] = &$fieldToolTipsliquidos_administrados;
$placeHolders["liquidos_administrados"] = &$placeHoldersliquidos_administrados;
$page_titles["liquidos_administrados"] = &$pageTitlesliquidos_administrados;


changeTextControlsToDate( "liquidos_administrados" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["liquidos_administrados"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["liquidos_administrados"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="pacientes";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="pacientes";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "pacientes";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["liquidos_administrados"][0] = $masterParams;
				$masterTablesData["liquidos_administrados"][0]["masterKeys"] = array();
	$masterTablesData["liquidos_administrados"][0]["masterKeys"][]="id_paciente";
				$masterTablesData["liquidos_administrados"][0]["detailKeys"] = array();
	$masterTablesData["liquidos_administrados"][0]["detailKeys"][]="paciente_id";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_liquidos_administrados()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_admin,  	paciente_id,  	fecha_hora,  	cantidad_ordenada,  	cantidad_administrada,  	via,  	tipo,  	enfermero,  	hora_inicial,  	hora_final,  	liquido,  	cantidad";
$proto0["m_strFrom"] = "FROM liquidos_administrados";
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
	"m_strName" => "id_admin",
	"m_strTable" => "liquidos_administrados",
	"m_srcTableName" => "liquidos_administrados"
));

$proto6["m_sql"] = "id_admin";
$proto6["m_srcTableName"] = "liquidos_administrados";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "paciente_id",
	"m_strTable" => "liquidos_administrados",
	"m_srcTableName" => "liquidos_administrados"
));

$proto8["m_sql"] = "paciente_id";
$proto8["m_srcTableName"] = "liquidos_administrados";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_hora",
	"m_strTable" => "liquidos_administrados",
	"m_srcTableName" => "liquidos_administrados"
));

$proto10["m_sql"] = "fecha_hora";
$proto10["m_srcTableName"] = "liquidos_administrados";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "cantidad_ordenada",
	"m_strTable" => "liquidos_administrados",
	"m_srcTableName" => "liquidos_administrados"
));

$proto12["m_sql"] = "cantidad_ordenada";
$proto12["m_srcTableName"] = "liquidos_administrados";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "cantidad_administrada",
	"m_strTable" => "liquidos_administrados",
	"m_srcTableName" => "liquidos_administrados"
));

$proto14["m_sql"] = "cantidad_administrada";
$proto14["m_srcTableName"] = "liquidos_administrados";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "via",
	"m_strTable" => "liquidos_administrados",
	"m_srcTableName" => "liquidos_administrados"
));

$proto16["m_sql"] = "via";
$proto16["m_srcTableName"] = "liquidos_administrados";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "tipo",
	"m_strTable" => "liquidos_administrados",
	"m_srcTableName" => "liquidos_administrados"
));

$proto18["m_sql"] = "tipo";
$proto18["m_srcTableName"] = "liquidos_administrados";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "enfermero",
	"m_strTable" => "liquidos_administrados",
	"m_srcTableName" => "liquidos_administrados"
));

$proto20["m_sql"] = "enfermero";
$proto20["m_srcTableName"] = "liquidos_administrados";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "hora_inicial",
	"m_strTable" => "liquidos_administrados",
	"m_srcTableName" => "liquidos_administrados"
));

$proto22["m_sql"] = "hora_inicial";
$proto22["m_srcTableName"] = "liquidos_administrados";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "hora_final",
	"m_strTable" => "liquidos_administrados",
	"m_srcTableName" => "liquidos_administrados"
));

$proto24["m_sql"] = "hora_final";
$proto24["m_srcTableName"] = "liquidos_administrados";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "liquido",
	"m_strTable" => "liquidos_administrados",
	"m_srcTableName" => "liquidos_administrados"
));

$proto26["m_sql"] = "liquido";
$proto26["m_srcTableName"] = "liquidos_administrados";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "cantidad",
	"m_strTable" => "liquidos_administrados",
	"m_srcTableName" => "liquidos_administrados"
));

$proto28["m_sql"] = "cantidad";
$proto28["m_srcTableName"] = "liquidos_administrados";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto30=array();
$proto30["m_link"] = "SQLL_MAIN";
			$proto31=array();
$proto31["m_strName"] = "liquidos_administrados";
$proto31["m_srcTableName"] = "liquidos_administrados";
$proto31["m_columns"] = array();
$proto31["m_columns"][] = "id_admin";
$proto31["m_columns"][] = "paciente_id";
$proto31["m_columns"][] = "fecha_hora";
$proto31["m_columns"][] = "cantidad_ordenada";
$proto31["m_columns"][] = "cantidad_administrada";
$proto31["m_columns"][] = "via";
$proto31["m_columns"][] = "tipo";
$proto31["m_columns"][] = "enfermero";
$proto31["m_columns"][] = "hora_inicial";
$proto31["m_columns"][] = "hora_final";
$proto31["m_columns"][] = "liquido";
$proto31["m_columns"][] = "cantidad";
$obj = new SQLTable($proto31);

$proto30["m_table"] = $obj;
$proto30["m_sql"] = "liquidos_administrados";
$proto30["m_alias"] = "";
$proto30["m_srcTableName"] = "liquidos_administrados";
$proto32=array();
$proto32["m_sql"] = "";
$proto32["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto32["m_column"]=$obj;
$proto32["m_contained"] = array();
$proto32["m_strCase"] = "";
$proto32["m_havingmode"] = false;
$proto32["m_inBrackets"] = false;
$proto32["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto32);

$proto30["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto30);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="liquidos_administrados";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_liquidos_administrados = createSqlQuery_liquidos_administrados();


	
		;

												

$tdataliquidos_administrados[".sqlquery"] = $queryData_liquidos_administrados;



$tdataliquidos_administrados[".hasEvents"] = false;

?>