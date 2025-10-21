<?php
$tdataactividades = array();
$tdataactividades[".searchableFields"] = array();
$tdataactividades[".ShortName"] = "actividades";
$tdataactividades[".OwnerID"] = "";
$tdataactividades[".OriginalTable"] = "actividades";


$tdataactividades[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataactividades[".originalPagesByType"] = $tdataactividades[".pagesByType"];
$tdataactividades[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataactividades[".originalPages"] = $tdataactividades[".pages"];
$tdataactividades[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataactividades[".originalDefaultPages"] = $tdataactividades[".defaultPages"];

//	field labels
$fieldLabelsactividades = array();
$fieldToolTipsactividades = array();
$pageTitlesactividades = array();
$placeHoldersactividades = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsactividades["English"] = array();
	$fieldToolTipsactividades["English"] = array();
	$placeHoldersactividades["English"] = array();
	$pageTitlesactividades["English"] = array();
	$fieldLabelsactividades["English"]["id"] = "Id";
	$fieldToolTipsactividades["English"]["id"] = "";
	$placeHoldersactividades["English"]["id"] = "";
	$fieldLabelsactividades["English"]["nombre"] = "Nombre";
	$fieldToolTipsactividades["English"]["nombre"] = "";
	$placeHoldersactividades["English"]["nombre"] = "";
	if (count($fieldToolTipsactividades["English"]))
		$tdataactividades[".isUseToolTips"] = true;
}


	$tdataactividades[".NCSearch"] = true;



$tdataactividades[".shortTableName"] = "actividades";
$tdataactividades[".nSecOptions"] = 0;

$tdataactividades[".mainTableOwnerID"] = "";
$tdataactividades[".entityType"] = 0;
$tdataactividades[".connId"] = "basedatosenfermeriaatlocalhost";


$tdataactividades[".strOriginalTableName"] = "actividades";

	



$tdataactividades[".showAddInPopup"] = false;

$tdataactividades[".showEditInPopup"] = false;

$tdataactividades[".showViewInPopup"] = false;

$tdataactividades[".listAjax"] = false;
//	temporary
//$tdataactividades[".listAjax"] = false;

	$tdataactividades[".audit"] = false;

	$tdataactividades[".locking"] = false;


$pages = $tdataactividades[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataactividades[".edit"] = true;
	$tdataactividades[".afterEditAction"] = 1;
	$tdataactividades[".closePopupAfterEdit"] = 1;
	$tdataactividades[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataactividades[".add"] = true;
$tdataactividades[".afterAddAction"] = 1;
$tdataactividades[".closePopupAfterAdd"] = 1;
$tdataactividades[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataactividades[".list"] = true;
}



$tdataactividades[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataactividades[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataactividades[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataactividades[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataactividades[".printFriendly"] = true;
}



$tdataactividades[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataactividades[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataactividades[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataactividades[".isUseAjaxSuggest"] = true;





$tdataactividades[".ajaxCodeSnippetAdded"] = false;

$tdataactividades[".buttonsAdded"] = false;

$tdataactividades[".addPageEvents"] = false;

// use timepicker for search panel
$tdataactividades[".isUseTimeForSearch"] = false;


$tdataactividades[".badgeColor"] = "3CB371";


$tdataactividades[".allSearchFields"] = array();
$tdataactividades[".filterFields"] = array();
$tdataactividades[".requiredSearchFields"] = array();

$tdataactividades[".googleLikeFields"] = array();
$tdataactividades[".googleLikeFields"][] = "id";
$tdataactividades[".googleLikeFields"][] = "nombre";



$tdataactividades[".tableType"] = "list";

$tdataactividades[".printerPageOrientation"] = 0;
$tdataactividades[".nPrinterPageScale"] = 100;

$tdataactividades[".nPrinterSplitRecords"] = 40;

$tdataactividades[".geocodingEnabled"] = false;










$tdataactividades[".pageSize"] = 20;

$tdataactividades[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataactividades[".strOrderBy"] = $tstrOrderBy;

$tdataactividades[".orderindexes"] = array();


$tdataactividades[".sqlHead"] = "SELECT id,  	nombre";
$tdataactividades[".sqlFrom"] = "FROM actividades";
$tdataactividades[".sqlWhereExpr"] = "";
$tdataactividades[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataactividades[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataactividades[".arrGroupsPerPage"] = $arrGPP;

$tdataactividades[".highlightSearchResults"] = true;

$tableKeysactividades = array();
$tableKeysactividades[] = "id";
$tdataactividades[".Keys"] = $tableKeysactividades;


$tdataactividades[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "actividades";
	$fdata["Label"] = GetFieldLabel("actividades","id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id";

		$fdata["sourceSingle"] = "id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id";

	
	
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


	$tdataactividades["id"] = $fdata;
		$tdataactividades[".searchableFields"][] = "id";
//	nombre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "nombre";
	$fdata["GoodName"] = "nombre";
	$fdata["ownerTable"] = "actividades";
	$fdata["Label"] = GetFieldLabel("actividades","nombre");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "nombre";

		$fdata["sourceSingle"] = "nombre";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nombre";

	
	
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


	$tdataactividades["nombre"] = $fdata;
		$tdataactividades[".searchableFields"][] = "nombre";


$tables_data["actividades"]=&$tdataactividades;
$field_labels["actividades"] = &$fieldLabelsactividades;
$fieldToolTips["actividades"] = &$fieldToolTipsactividades;
$placeHolders["actividades"] = &$placeHoldersactividades;
$page_titles["actividades"] = &$pageTitlesactividades;


changeTextControlsToDate( "actividades" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["actividades"] = array();
//	subactividades
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="subactividades";
		$detailsParam["dOriginalTable"] = "subactividades";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "subactividades";
	$detailsParam["dCaptionTable"] = GetTableCaption("subactividades");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["actividades"][$dIndex] = $detailsParam;

	
		$detailsTablesData["actividades"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["actividades"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["actividades"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["actividades"][$dIndex]["detailKeys"][]="actividad_id";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["actividades"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_actividades()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	nombre";
$proto0["m_strFrom"] = "FROM actividades";
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
	"m_strName" => "id",
	"m_strTable" => "actividades",
	"m_srcTableName" => "actividades"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "actividades";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "nombre",
	"m_strTable" => "actividades",
	"m_srcTableName" => "actividades"
));

$proto8["m_sql"] = "nombre";
$proto8["m_srcTableName"] = "actividades";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "actividades";
$proto11["m_srcTableName"] = "actividades";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "id";
$proto11["m_columns"][] = "nombre";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "actividades";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "actividades";
$proto12=array();
$proto12["m_sql"] = "";
$proto12["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto12["m_column"]=$obj;
$proto12["m_contained"] = array();
$proto12["m_strCase"] = "";
$proto12["m_havingmode"] = false;
$proto12["m_inBrackets"] = false;
$proto12["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto12);

$proto10["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto10);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="actividades";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_actividades = createSqlQuery_actividades();


	
		;

		

$tdataactividades[".sqlquery"] = $queryData_actividades;



$tdataactividades[".hasEvents"] = false;

?>