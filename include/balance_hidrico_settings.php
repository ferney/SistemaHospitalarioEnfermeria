<?php
$tdatabalance_hidrico = array();
$tdatabalance_hidrico[".searchableFields"] = array();
$tdatabalance_hidrico[".ShortName"] = "balance_hidrico";
$tdatabalance_hidrico[".OwnerID"] = "";
$tdatabalance_hidrico[".OriginalTable"] = "balance_hidrico";


$tdatabalance_hidrico[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatabalance_hidrico[".originalPagesByType"] = $tdatabalance_hidrico[".pagesByType"];
$tdatabalance_hidrico[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatabalance_hidrico[".originalPages"] = $tdatabalance_hidrico[".pages"];
$tdatabalance_hidrico[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatabalance_hidrico[".originalDefaultPages"] = $tdatabalance_hidrico[".defaultPages"];

//	field labels
$fieldLabelsbalance_hidrico = array();
$fieldToolTipsbalance_hidrico = array();
$pageTitlesbalance_hidrico = array();
$placeHoldersbalance_hidrico = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsbalance_hidrico["English"] = array();
	$fieldToolTipsbalance_hidrico["English"] = array();
	$placeHoldersbalance_hidrico["English"] = array();
	$pageTitlesbalance_hidrico["English"] = array();
	$fieldLabelsbalance_hidrico["English"]["id_balance"] = "Id Balance";
	$fieldToolTipsbalance_hidrico["English"]["id_balance"] = "";
	$placeHoldersbalance_hidrico["English"]["id_balance"] = "";
	$fieldLabelsbalance_hidrico["English"]["paciente_id"] = "Paciente Id";
	$fieldToolTipsbalance_hidrico["English"]["paciente_id"] = "";
	$placeHoldersbalance_hidrico["English"]["paciente_id"] = "";
	$fieldLabelsbalance_hidrico["English"]["fecha"] = "Fecha";
	$fieldToolTipsbalance_hidrico["English"]["fecha"] = "";
	$placeHoldersbalance_hidrico["English"]["fecha"] = "";
	$fieldLabelsbalance_hidrico["English"]["total_administrados"] = "Total Administrados";
	$fieldToolTipsbalance_hidrico["English"]["total_administrados"] = "";
	$placeHoldersbalance_hidrico["English"]["total_administrados"] = "";
	$fieldLabelsbalance_hidrico["English"]["total_eliminados"] = "Total Eliminados";
	$fieldToolTipsbalance_hidrico["English"]["total_eliminados"] = "";
	$placeHoldersbalance_hidrico["English"]["total_eliminados"] = "";
	$fieldLabelsbalance_hidrico["English"]["balance"] = "Balance";
	$fieldToolTipsbalance_hidrico["English"]["balance"] = "";
	$placeHoldersbalance_hidrico["English"]["balance"] = "";
	$fieldLabelsbalance_hidrico["English"]["gasto_urinario"] = "Gasto Urinario";
	$fieldToolTipsbalance_hidrico["English"]["gasto_urinario"] = "";
	$placeHoldersbalance_hidrico["English"]["gasto_urinario"] = "";
	if (count($fieldToolTipsbalance_hidrico["English"]))
		$tdatabalance_hidrico[".isUseToolTips"] = true;
}


	$tdatabalance_hidrico[".NCSearch"] = true;



$tdatabalance_hidrico[".shortTableName"] = "balance_hidrico";
$tdatabalance_hidrico[".nSecOptions"] = 0;

$tdatabalance_hidrico[".mainTableOwnerID"] = "";
$tdatabalance_hidrico[".entityType"] = 0;
$tdatabalance_hidrico[".connId"] = "basedatosenfermeriaatlocalhost";


$tdatabalance_hidrico[".strOriginalTableName"] = "balance_hidrico";

	



$tdatabalance_hidrico[".showAddInPopup"] = false;

$tdatabalance_hidrico[".showEditInPopup"] = false;

$tdatabalance_hidrico[".showViewInPopup"] = false;

$tdatabalance_hidrico[".listAjax"] = false;
//	temporary
//$tdatabalance_hidrico[".listAjax"] = false;

	$tdatabalance_hidrico[".audit"] = false;

	$tdatabalance_hidrico[".locking"] = false;


$pages = $tdatabalance_hidrico[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatabalance_hidrico[".edit"] = true;
	$tdatabalance_hidrico[".afterEditAction"] = 1;
	$tdatabalance_hidrico[".closePopupAfterEdit"] = 1;
	$tdatabalance_hidrico[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatabalance_hidrico[".add"] = true;
$tdatabalance_hidrico[".afterAddAction"] = 1;
$tdatabalance_hidrico[".closePopupAfterAdd"] = 1;
$tdatabalance_hidrico[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatabalance_hidrico[".list"] = true;
}



$tdatabalance_hidrico[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatabalance_hidrico[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatabalance_hidrico[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatabalance_hidrico[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatabalance_hidrico[".printFriendly"] = true;
}



$tdatabalance_hidrico[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatabalance_hidrico[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatabalance_hidrico[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatabalance_hidrico[".isUseAjaxSuggest"] = true;





$tdatabalance_hidrico[".ajaxCodeSnippetAdded"] = false;

$tdatabalance_hidrico[".buttonsAdded"] = false;

$tdatabalance_hidrico[".addPageEvents"] = false;

// use timepicker for search panel
$tdatabalance_hidrico[".isUseTimeForSearch"] = false;


$tdatabalance_hidrico[".badgeColor"] = "DAA520";


$tdatabalance_hidrico[".allSearchFields"] = array();
$tdatabalance_hidrico[".filterFields"] = array();
$tdatabalance_hidrico[".requiredSearchFields"] = array();

$tdatabalance_hidrico[".googleLikeFields"] = array();
$tdatabalance_hidrico[".googleLikeFields"][] = "id_balance";
$tdatabalance_hidrico[".googleLikeFields"][] = "paciente_id";
$tdatabalance_hidrico[".googleLikeFields"][] = "fecha";
$tdatabalance_hidrico[".googleLikeFields"][] = "total_administrados";
$tdatabalance_hidrico[".googleLikeFields"][] = "total_eliminados";
$tdatabalance_hidrico[".googleLikeFields"][] = "balance";
$tdatabalance_hidrico[".googleLikeFields"][] = "gasto_urinario";



$tdatabalance_hidrico[".tableType"] = "list";

$tdatabalance_hidrico[".printerPageOrientation"] = 0;
$tdatabalance_hidrico[".nPrinterPageScale"] = 100;

$tdatabalance_hidrico[".nPrinterSplitRecords"] = 40;

$tdatabalance_hidrico[".geocodingEnabled"] = false;










$tdatabalance_hidrico[".pageSize"] = 20;

$tdatabalance_hidrico[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatabalance_hidrico[".strOrderBy"] = $tstrOrderBy;

$tdatabalance_hidrico[".orderindexes"] = array();


$tdatabalance_hidrico[".sqlHead"] = "SELECT id_balance,  	paciente_id,  	fecha,  	total_administrados,  	total_eliminados,  	balance,  	gasto_urinario";
$tdatabalance_hidrico[".sqlFrom"] = "FROM balance_hidrico";
$tdatabalance_hidrico[".sqlWhereExpr"] = "";
$tdatabalance_hidrico[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatabalance_hidrico[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatabalance_hidrico[".arrGroupsPerPage"] = $arrGPP;

$tdatabalance_hidrico[".highlightSearchResults"] = true;

$tableKeysbalance_hidrico = array();
$tableKeysbalance_hidrico[] = "id_balance";
$tdatabalance_hidrico[".Keys"] = $tableKeysbalance_hidrico;


$tdatabalance_hidrico[".hideMobileList"] = array();




//	id_balance
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_balance";
	$fdata["GoodName"] = "id_balance";
	$fdata["ownerTable"] = "balance_hidrico";
	$fdata["Label"] = GetFieldLabel("balance_hidrico","id_balance");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id_balance";

		$fdata["sourceSingle"] = "id_balance";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_balance";

	
	
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


	$tdatabalance_hidrico["id_balance"] = $fdata;
		$tdatabalance_hidrico[".searchableFields"][] = "id_balance";
//	paciente_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "paciente_id";
	$fdata["GoodName"] = "paciente_id";
	$fdata["ownerTable"] = "balance_hidrico";
	$fdata["Label"] = GetFieldLabel("balance_hidrico","paciente_id");
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


	$tdatabalance_hidrico["paciente_id"] = $fdata;
		$tdatabalance_hidrico[".searchableFields"][] = "paciente_id";
//	fecha
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "fecha";
	$fdata["GoodName"] = "fecha";
	$fdata["ownerTable"] = "balance_hidrico";
	$fdata["Label"] = GetFieldLabel("balance_hidrico","fecha");
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


	$tdatabalance_hidrico["fecha"] = $fdata;
		$tdatabalance_hidrico[".searchableFields"][] = "fecha";
//	total_administrados
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "total_administrados";
	$fdata["GoodName"] = "total_administrados";
	$fdata["ownerTable"] = "balance_hidrico";
	$fdata["Label"] = GetFieldLabel("balance_hidrico","total_administrados");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "total_administrados";

		$fdata["sourceSingle"] = "total_administrados";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "total_administrados";

	
	
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


	$tdatabalance_hidrico["total_administrados"] = $fdata;
		$tdatabalance_hidrico[".searchableFields"][] = "total_administrados";
//	total_eliminados
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "total_eliminados";
	$fdata["GoodName"] = "total_eliminados";
	$fdata["ownerTable"] = "balance_hidrico";
	$fdata["Label"] = GetFieldLabel("balance_hidrico","total_eliminados");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "total_eliminados";

		$fdata["sourceSingle"] = "total_eliminados";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "total_eliminados";

	
	
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


	$tdatabalance_hidrico["total_eliminados"] = $fdata;
		$tdatabalance_hidrico[".searchableFields"][] = "total_eliminados";
//	balance
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "balance";
	$fdata["GoodName"] = "balance";
	$fdata["ownerTable"] = "balance_hidrico";
	$fdata["Label"] = GetFieldLabel("balance_hidrico","balance");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "balance";

		$fdata["sourceSingle"] = "balance";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "balance";

	
	
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


	$tdatabalance_hidrico["balance"] = $fdata;
		$tdatabalance_hidrico[".searchableFields"][] = "balance";
//	gasto_urinario
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "gasto_urinario";
	$fdata["GoodName"] = "gasto_urinario";
	$fdata["ownerTable"] = "balance_hidrico";
	$fdata["Label"] = GetFieldLabel("balance_hidrico","gasto_urinario");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "gasto_urinario";

		$fdata["sourceSingle"] = "gasto_urinario";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "gasto_urinario";

	
	
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


	$tdatabalance_hidrico["gasto_urinario"] = $fdata;
		$tdatabalance_hidrico[".searchableFields"][] = "gasto_urinario";


$tables_data["balance_hidrico"]=&$tdatabalance_hidrico;
$field_labels["balance_hidrico"] = &$fieldLabelsbalance_hidrico;
$fieldToolTips["balance_hidrico"] = &$fieldToolTipsbalance_hidrico;
$placeHolders["balance_hidrico"] = &$placeHoldersbalance_hidrico;
$page_titles["balance_hidrico"] = &$pageTitlesbalance_hidrico;


changeTextControlsToDate( "balance_hidrico" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["balance_hidrico"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["balance_hidrico"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="pacientes";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="pacientes";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "pacientes";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["balance_hidrico"][0] = $masterParams;
				$masterTablesData["balance_hidrico"][0]["masterKeys"] = array();
	$masterTablesData["balance_hidrico"][0]["masterKeys"][]="id_paciente";
				$masterTablesData["balance_hidrico"][0]["detailKeys"] = array();
	$masterTablesData["balance_hidrico"][0]["detailKeys"][]="paciente_id";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_balance_hidrico()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_balance,  	paciente_id,  	fecha,  	total_administrados,  	total_eliminados,  	balance,  	gasto_urinario";
$proto0["m_strFrom"] = "FROM balance_hidrico";
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
	"m_strName" => "id_balance",
	"m_strTable" => "balance_hidrico",
	"m_srcTableName" => "balance_hidrico"
));

$proto6["m_sql"] = "id_balance";
$proto6["m_srcTableName"] = "balance_hidrico";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "paciente_id",
	"m_strTable" => "balance_hidrico",
	"m_srcTableName" => "balance_hidrico"
));

$proto8["m_sql"] = "paciente_id";
$proto8["m_srcTableName"] = "balance_hidrico";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha",
	"m_strTable" => "balance_hidrico",
	"m_srcTableName" => "balance_hidrico"
));

$proto10["m_sql"] = "fecha";
$proto10["m_srcTableName"] = "balance_hidrico";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "total_administrados",
	"m_strTable" => "balance_hidrico",
	"m_srcTableName" => "balance_hidrico"
));

$proto12["m_sql"] = "total_administrados";
$proto12["m_srcTableName"] = "balance_hidrico";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "total_eliminados",
	"m_strTable" => "balance_hidrico",
	"m_srcTableName" => "balance_hidrico"
));

$proto14["m_sql"] = "total_eliminados";
$proto14["m_srcTableName"] = "balance_hidrico";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "balance",
	"m_strTable" => "balance_hidrico",
	"m_srcTableName" => "balance_hidrico"
));

$proto16["m_sql"] = "balance";
$proto16["m_srcTableName"] = "balance_hidrico";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "gasto_urinario",
	"m_strTable" => "balance_hidrico",
	"m_srcTableName" => "balance_hidrico"
));

$proto18["m_sql"] = "gasto_urinario";
$proto18["m_srcTableName"] = "balance_hidrico";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "balance_hidrico";
$proto21["m_srcTableName"] = "balance_hidrico";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "id_balance";
$proto21["m_columns"][] = "paciente_id";
$proto21["m_columns"][] = "fecha";
$proto21["m_columns"][] = "total_administrados";
$proto21["m_columns"][] = "total_eliminados";
$proto21["m_columns"][] = "balance";
$proto21["m_columns"][] = "gasto_urinario";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "balance_hidrico";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "balance_hidrico";
$proto22=array();
$proto22["m_sql"] = "";
$proto22["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto22["m_column"]=$obj;
$proto22["m_contained"] = array();
$proto22["m_strCase"] = "";
$proto22["m_havingmode"] = false;
$proto22["m_inBrackets"] = false;
$proto22["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto22);

$proto20["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto20);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="balance_hidrico";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_balance_hidrico = createSqlQuery_balance_hidrico();


	
		;

							

$tdatabalance_hidrico[".sqlquery"] = $queryData_balance_hidrico;



$tdatabalance_hidrico[".hasEvents"] = false;

?>