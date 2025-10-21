<?php
$tdataescala_correccion = array();
$tdataescala_correccion[".searchableFields"] = array();
$tdataescala_correccion[".ShortName"] = "escala_correccion";
$tdataescala_correccion[".OwnerID"] = "";
$tdataescala_correccion[".OriginalTable"] = "escala_correccion";


$tdataescala_correccion[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataescala_correccion[".originalPagesByType"] = $tdataescala_correccion[".pagesByType"];
$tdataescala_correccion[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataescala_correccion[".originalPages"] = $tdataescala_correccion[".pages"];
$tdataescala_correccion[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataescala_correccion[".originalDefaultPages"] = $tdataescala_correccion[".defaultPages"];

//	field labels
$fieldLabelsescala_correccion = array();
$fieldToolTipsescala_correccion = array();
$pageTitlesescala_correccion = array();
$placeHoldersescala_correccion = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsescala_correccion["English"] = array();
	$fieldToolTipsescala_correccion["English"] = array();
	$placeHoldersescala_correccion["English"] = array();
	$pageTitlesescala_correccion["English"] = array();
	$fieldLabelsescala_correccion["English"]["rango_id"] = "Rango Id";
	$fieldToolTipsescala_correccion["English"]["rango_id"] = "";
	$placeHoldersescala_correccion["English"]["rango_id"] = "";
	$fieldLabelsescala_correccion["English"]["glucemia_min"] = "Glucemia Min";
	$fieldToolTipsescala_correccion["English"]["glucemia_min"] = "";
	$placeHoldersescala_correccion["English"]["glucemia_min"] = "";
	$fieldLabelsescala_correccion["English"]["glucemia_max"] = "Glucemia Max";
	$fieldToolTipsescala_correccion["English"]["glucemia_max"] = "";
	$placeHoldersescala_correccion["English"]["glucemia_max"] = "";
	$fieldLabelsescala_correccion["English"]["valor_correccion"] = "Valor Correccion";
	$fieldToolTipsescala_correccion["English"]["valor_correccion"] = "";
	$placeHoldersescala_correccion["English"]["valor_correccion"] = "";
	if (count($fieldToolTipsescala_correccion["English"]))
		$tdataescala_correccion[".isUseToolTips"] = true;
}


	$tdataescala_correccion[".NCSearch"] = true;



$tdataescala_correccion[".shortTableName"] = "escala_correccion";
$tdataescala_correccion[".nSecOptions"] = 0;

$tdataescala_correccion[".mainTableOwnerID"] = "";
$tdataescala_correccion[".entityType"] = 0;
$tdataescala_correccion[".connId"] = "basedatosenfermeriaatlocalhost";


$tdataescala_correccion[".strOriginalTableName"] = "escala_correccion";

	



$tdataescala_correccion[".showAddInPopup"] = false;

$tdataescala_correccion[".showEditInPopup"] = false;

$tdataescala_correccion[".showViewInPopup"] = false;

$tdataescala_correccion[".listAjax"] = false;
//	temporary
//$tdataescala_correccion[".listAjax"] = false;

	$tdataescala_correccion[".audit"] = false;

	$tdataescala_correccion[".locking"] = false;


$pages = $tdataescala_correccion[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataescala_correccion[".edit"] = true;
	$tdataescala_correccion[".afterEditAction"] = 1;
	$tdataescala_correccion[".closePopupAfterEdit"] = 1;
	$tdataescala_correccion[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataescala_correccion[".add"] = true;
$tdataescala_correccion[".afterAddAction"] = 1;
$tdataescala_correccion[".closePopupAfterAdd"] = 1;
$tdataescala_correccion[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataescala_correccion[".list"] = true;
}



$tdataescala_correccion[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataescala_correccion[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataescala_correccion[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataescala_correccion[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataescala_correccion[".printFriendly"] = true;
}



$tdataescala_correccion[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataescala_correccion[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataescala_correccion[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataescala_correccion[".isUseAjaxSuggest"] = true;





$tdataescala_correccion[".ajaxCodeSnippetAdded"] = false;

$tdataescala_correccion[".buttonsAdded"] = false;

$tdataescala_correccion[".addPageEvents"] = false;

// use timepicker for search panel
$tdataescala_correccion[".isUseTimeForSearch"] = false;


$tdataescala_correccion[".badgeColor"] = "DC143C";


$tdataescala_correccion[".allSearchFields"] = array();
$tdataescala_correccion[".filterFields"] = array();
$tdataescala_correccion[".requiredSearchFields"] = array();

$tdataescala_correccion[".googleLikeFields"] = array();
$tdataescala_correccion[".googleLikeFields"][] = "rango_id";
$tdataescala_correccion[".googleLikeFields"][] = "glucemia_min";
$tdataescala_correccion[".googleLikeFields"][] = "glucemia_max";
$tdataescala_correccion[".googleLikeFields"][] = "valor_correccion";



$tdataescala_correccion[".tableType"] = "list";

$tdataescala_correccion[".printerPageOrientation"] = 0;
$tdataescala_correccion[".nPrinterPageScale"] = 100;

$tdataescala_correccion[".nPrinterSplitRecords"] = 40;

$tdataescala_correccion[".geocodingEnabled"] = false;










$tdataescala_correccion[".pageSize"] = 20;

$tdataescala_correccion[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataescala_correccion[".strOrderBy"] = $tstrOrderBy;

$tdataescala_correccion[".orderindexes"] = array();


$tdataescala_correccion[".sqlHead"] = "SELECT rango_id,  	glucemia_min,  	glucemia_max,  	valor_correccion";
$tdataescala_correccion[".sqlFrom"] = "FROM escala_correccion";
$tdataescala_correccion[".sqlWhereExpr"] = "";
$tdataescala_correccion[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataescala_correccion[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataescala_correccion[".arrGroupsPerPage"] = $arrGPP;

$tdataescala_correccion[".highlightSearchResults"] = true;

$tableKeysescala_correccion = array();
$tableKeysescala_correccion[] = "rango_id";
$tdataescala_correccion[".Keys"] = $tableKeysescala_correccion;


$tdataescala_correccion[".hideMobileList"] = array();




//	rango_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "rango_id";
	$fdata["GoodName"] = "rango_id";
	$fdata["ownerTable"] = "escala_correccion";
	$fdata["Label"] = GetFieldLabel("escala_correccion","rango_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "rango_id";

		$fdata["sourceSingle"] = "rango_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "rango_id";

	
	
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


	$tdataescala_correccion["rango_id"] = $fdata;
		$tdataescala_correccion[".searchableFields"][] = "rango_id";
//	glucemia_min
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "glucemia_min";
	$fdata["GoodName"] = "glucemia_min";
	$fdata["ownerTable"] = "escala_correccion";
	$fdata["Label"] = GetFieldLabel("escala_correccion","glucemia_min");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "glucemia_min";

		$fdata["sourceSingle"] = "glucemia_min";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "glucemia_min";

	
	
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


	$tdataescala_correccion["glucemia_min"] = $fdata;
		$tdataescala_correccion[".searchableFields"][] = "glucemia_min";
//	glucemia_max
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "glucemia_max";
	$fdata["GoodName"] = "glucemia_max";
	$fdata["ownerTable"] = "escala_correccion";
	$fdata["Label"] = GetFieldLabel("escala_correccion","glucemia_max");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "glucemia_max";

		$fdata["sourceSingle"] = "glucemia_max";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "glucemia_max";

	
	
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


	$tdataescala_correccion["glucemia_max"] = $fdata;
		$tdataescala_correccion[".searchableFields"][] = "glucemia_max";
//	valor_correccion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "valor_correccion";
	$fdata["GoodName"] = "valor_correccion";
	$fdata["ownerTable"] = "escala_correccion";
	$fdata["Label"] = GetFieldLabel("escala_correccion","valor_correccion");
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


	$tdataescala_correccion["valor_correccion"] = $fdata;
		$tdataescala_correccion[".searchableFields"][] = "valor_correccion";


$tables_data["escala_correccion"]=&$tdataescala_correccion;
$field_labels["escala_correccion"] = &$fieldLabelsescala_correccion;
$fieldToolTips["escala_correccion"] = &$fieldToolTipsescala_correccion;
$placeHolders["escala_correccion"] = &$placeHoldersescala_correccion;
$page_titles["escala_correccion"] = &$pageTitlesescala_correccion;


changeTextControlsToDate( "escala_correccion" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["escala_correccion"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["escala_correccion"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_escala_correccion()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "rango_id,  	glucemia_min,  	glucemia_max,  	valor_correccion";
$proto0["m_strFrom"] = "FROM escala_correccion";
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
	"m_strName" => "rango_id",
	"m_strTable" => "escala_correccion",
	"m_srcTableName" => "escala_correccion"
));

$proto6["m_sql"] = "rango_id";
$proto6["m_srcTableName"] = "escala_correccion";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "glucemia_min",
	"m_strTable" => "escala_correccion",
	"m_srcTableName" => "escala_correccion"
));

$proto8["m_sql"] = "glucemia_min";
$proto8["m_srcTableName"] = "escala_correccion";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "glucemia_max",
	"m_strTable" => "escala_correccion",
	"m_srcTableName" => "escala_correccion"
));

$proto10["m_sql"] = "glucemia_max";
$proto10["m_srcTableName"] = "escala_correccion";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "valor_correccion",
	"m_strTable" => "escala_correccion",
	"m_srcTableName" => "escala_correccion"
));

$proto12["m_sql"] = "valor_correccion";
$proto12["m_srcTableName"] = "escala_correccion";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "escala_correccion";
$proto15["m_srcTableName"] = "escala_correccion";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "rango_id";
$proto15["m_columns"][] = "glucemia_min";
$proto15["m_columns"][] = "glucemia_max";
$proto15["m_columns"][] = "valor_correccion";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "escala_correccion";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "escala_correccion";
$proto16=array();
$proto16["m_sql"] = "";
$proto16["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto16["m_column"]=$obj;
$proto16["m_contained"] = array();
$proto16["m_strCase"] = "";
$proto16["m_havingmode"] = false;
$proto16["m_inBrackets"] = false;
$proto16["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto16);

$proto14["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto14);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="escala_correccion";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_escala_correccion = createSqlQuery_escala_correccion();


	
		;

				

$tdataescala_correccion[".sqlquery"] = $queryData_escala_correccion;



$tdataescala_correccion[".hasEvents"] = false;

?>