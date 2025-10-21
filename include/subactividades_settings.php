<?php
$tdatasubactividades = array();
$tdatasubactividades[".searchableFields"] = array();
$tdatasubactividades[".ShortName"] = "subactividades";
$tdatasubactividades[".OwnerID"] = "";
$tdatasubactividades[".OriginalTable"] = "subactividades";


$tdatasubactividades[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatasubactividades[".originalPagesByType"] = $tdatasubactividades[".pagesByType"];
$tdatasubactividades[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatasubactividades[".originalPages"] = $tdatasubactividades[".pages"];
$tdatasubactividades[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatasubactividades[".originalDefaultPages"] = $tdatasubactividades[".defaultPages"];

//	field labels
$fieldLabelssubactividades = array();
$fieldToolTipssubactividades = array();
$pageTitlessubactividades = array();
$placeHolderssubactividades = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelssubactividades["English"] = array();
	$fieldToolTipssubactividades["English"] = array();
	$placeHolderssubactividades["English"] = array();
	$pageTitlessubactividades["English"] = array();
	$fieldLabelssubactividades["English"]["id"] = "Id";
	$fieldToolTipssubactividades["English"]["id"] = "";
	$placeHolderssubactividades["English"]["id"] = "";
	$fieldLabelssubactividades["English"]["actividad_id"] = "Actividad Id";
	$fieldToolTipssubactividades["English"]["actividad_id"] = "";
	$placeHolderssubactividades["English"]["actividad_id"] = "";
	$fieldLabelssubactividades["English"]["nombre"] = "Nombre";
	$fieldToolTipssubactividades["English"]["nombre"] = "";
	$placeHolderssubactividades["English"]["nombre"] = "";
	if (count($fieldToolTipssubactividades["English"]))
		$tdatasubactividades[".isUseToolTips"] = true;
}


	$tdatasubactividades[".NCSearch"] = true;



$tdatasubactividades[".shortTableName"] = "subactividades";
$tdatasubactividades[".nSecOptions"] = 0;

$tdatasubactividades[".mainTableOwnerID"] = "";
$tdatasubactividades[".entityType"] = 0;
$tdatasubactividades[".connId"] = "basedatosenfermeriaatlocalhost";


$tdatasubactividades[".strOriginalTableName"] = "subactividades";

	



$tdatasubactividades[".showAddInPopup"] = false;

$tdatasubactividades[".showEditInPopup"] = false;

$tdatasubactividades[".showViewInPopup"] = false;

$tdatasubactividades[".listAjax"] = false;
//	temporary
//$tdatasubactividades[".listAjax"] = false;

	$tdatasubactividades[".audit"] = false;

	$tdatasubactividades[".locking"] = false;


$pages = $tdatasubactividades[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatasubactividades[".edit"] = true;
	$tdatasubactividades[".afterEditAction"] = 1;
	$tdatasubactividades[".closePopupAfterEdit"] = 1;
	$tdatasubactividades[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatasubactividades[".add"] = true;
$tdatasubactividades[".afterAddAction"] = 1;
$tdatasubactividades[".closePopupAfterAdd"] = 1;
$tdatasubactividades[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatasubactividades[".list"] = true;
}



$tdatasubactividades[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatasubactividades[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatasubactividades[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatasubactividades[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatasubactividades[".printFriendly"] = true;
}



$tdatasubactividades[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatasubactividades[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatasubactividades[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatasubactividades[".isUseAjaxSuggest"] = true;





$tdatasubactividades[".ajaxCodeSnippetAdded"] = false;

$tdatasubactividades[".buttonsAdded"] = false;

$tdatasubactividades[".addPageEvents"] = false;

// use timepicker for search panel
$tdatasubactividades[".isUseTimeForSearch"] = false;


$tdatasubactividades[".badgeColor"] = "7B68EE";


$tdatasubactividades[".allSearchFields"] = array();
$tdatasubactividades[".filterFields"] = array();
$tdatasubactividades[".requiredSearchFields"] = array();

$tdatasubactividades[".googleLikeFields"] = array();
$tdatasubactividades[".googleLikeFields"][] = "id";
$tdatasubactividades[".googleLikeFields"][] = "actividad_id";
$tdatasubactividades[".googleLikeFields"][] = "nombre";



$tdatasubactividades[".tableType"] = "list";

$tdatasubactividades[".printerPageOrientation"] = 0;
$tdatasubactividades[".nPrinterPageScale"] = 100;

$tdatasubactividades[".nPrinterSplitRecords"] = 40;

$tdatasubactividades[".geocodingEnabled"] = false;










$tdatasubactividades[".pageSize"] = 20;

$tdatasubactividades[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatasubactividades[".strOrderBy"] = $tstrOrderBy;

$tdatasubactividades[".orderindexes"] = array();


$tdatasubactividades[".sqlHead"] = "SELECT id,  	actividad_id,  	nombre";
$tdatasubactividades[".sqlFrom"] = "FROM subactividades";
$tdatasubactividades[".sqlWhereExpr"] = "";
$tdatasubactividades[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatasubactividades[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatasubactividades[".arrGroupsPerPage"] = $arrGPP;

$tdatasubactividades[".highlightSearchResults"] = true;

$tableKeyssubactividades = array();
$tableKeyssubactividades[] = "id";
$tdatasubactividades[".Keys"] = $tableKeyssubactividades;


$tdatasubactividades[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "subactividades";
	$fdata["Label"] = GetFieldLabel("subactividades","id");
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


	$tdatasubactividades["id"] = $fdata;
		$tdatasubactividades[".searchableFields"][] = "id";
//	actividad_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "actividad_id";
	$fdata["GoodName"] = "actividad_id";
	$fdata["ownerTable"] = "subactividades";
	$fdata["Label"] = GetFieldLabel("subactividades","actividad_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "actividad_id";

		$fdata["sourceSingle"] = "actividad_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "actividad_id";

	
	
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
	$edata["LookupTable"] = "actividades";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "nombre";

	

	
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


	$tdatasubactividades["actividad_id"] = $fdata;
		$tdatasubactividades[".searchableFields"][] = "actividad_id";
//	nombre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "nombre";
	$fdata["GoodName"] = "nombre";
	$fdata["ownerTable"] = "subactividades";
	$fdata["Label"] = GetFieldLabel("subactividades","nombre");
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


	$tdatasubactividades["nombre"] = $fdata;
		$tdatasubactividades[".searchableFields"][] = "nombre";


$tables_data["subactividades"]=&$tdatasubactividades;
$field_labels["subactividades"] = &$fieldLabelssubactividades;
$fieldToolTips["subactividades"] = &$fieldToolTipssubactividades;
$placeHolders["subactividades"] = &$placeHolderssubactividades;
$page_titles["subactividades"] = &$pageTitlessubactividades;


changeTextControlsToDate( "subactividades" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["subactividades"] = array();
//	detalle_subactividad
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="detalle_subactividad";
		$detailsParam["dOriginalTable"] = "detalle_subactividad";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "detalle_subactividad";
	$detailsParam["dCaptionTable"] = GetTableCaption("detalle_subactividad");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["subactividades"][$dIndex] = $detailsParam;

	
		$detailsTablesData["subactividades"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["subactividades"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["subactividades"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["subactividades"][$dIndex]["detailKeys"][]="subactividad_id";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["subactividades"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="actividades";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="actividades";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "actividades";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["subactividades"][0] = $masterParams;
				$masterTablesData["subactividades"][0]["masterKeys"] = array();
	$masterTablesData["subactividades"][0]["masterKeys"][]="id";
				$masterTablesData["subactividades"][0]["detailKeys"] = array();
	$masterTablesData["subactividades"][0]["detailKeys"][]="actividad_id";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_subactividades()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	actividad_id,  	nombre";
$proto0["m_strFrom"] = "FROM subactividades";
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
	"m_strTable" => "subactividades",
	"m_srcTableName" => "subactividades"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "subactividades";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "actividad_id",
	"m_strTable" => "subactividades",
	"m_srcTableName" => "subactividades"
));

$proto8["m_sql"] = "actividad_id";
$proto8["m_srcTableName"] = "subactividades";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "nombre",
	"m_strTable" => "subactividades",
	"m_srcTableName" => "subactividades"
));

$proto10["m_sql"] = "nombre";
$proto10["m_srcTableName"] = "subactividades";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "subactividades";
$proto13["m_srcTableName"] = "subactividades";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "id";
$proto13["m_columns"][] = "actividad_id";
$proto13["m_columns"][] = "nombre";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "subactividades";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "subactividades";
$proto14=array();
$proto14["m_sql"] = "";
$proto14["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto14["m_column"]=$obj;
$proto14["m_contained"] = array();
$proto14["m_strCase"] = "";
$proto14["m_havingmode"] = false;
$proto14["m_inBrackets"] = false;
$proto14["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto14);

$proto12["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto12);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="subactividades";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_subactividades = createSqlQuery_subactividades();


	
		;

			

$tdatasubactividades[".sqlquery"] = $queryData_subactividades;



$tdatasubactividades[".hasEvents"] = false;

?>