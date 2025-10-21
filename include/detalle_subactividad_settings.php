<?php
$tdatadetalle_subactividad = array();
$tdatadetalle_subactividad[".searchableFields"] = array();
$tdatadetalle_subactividad[".ShortName"] = "detalle_subactividad";
$tdatadetalle_subactividad[".OwnerID"] = "";
$tdatadetalle_subactividad[".OriginalTable"] = "detalle_subactividad";


$tdatadetalle_subactividad[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatadetalle_subactividad[".originalPagesByType"] = $tdatadetalle_subactividad[".pagesByType"];
$tdatadetalle_subactividad[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatadetalle_subactividad[".originalPages"] = $tdatadetalle_subactividad[".pages"];
$tdatadetalle_subactividad[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatadetalle_subactividad[".originalDefaultPages"] = $tdatadetalle_subactividad[".defaultPages"];

//	field labels
$fieldLabelsdetalle_subactividad = array();
$fieldToolTipsdetalle_subactividad = array();
$pageTitlesdetalle_subactividad = array();
$placeHoldersdetalle_subactividad = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsdetalle_subactividad["English"] = array();
	$fieldToolTipsdetalle_subactividad["English"] = array();
	$placeHoldersdetalle_subactividad["English"] = array();
	$pageTitlesdetalle_subactividad["English"] = array();
	$fieldLabelsdetalle_subactividad["English"]["id"] = "Id";
	$fieldToolTipsdetalle_subactividad["English"]["id"] = "";
	$placeHoldersdetalle_subactividad["English"]["id"] = "";
	$fieldLabelsdetalle_subactividad["English"]["subactividad_id"] = "Subactividad Id";
	$fieldToolTipsdetalle_subactividad["English"]["subactividad_id"] = "";
	$placeHoldersdetalle_subactividad["English"]["subactividad_id"] = "";
	$fieldLabelsdetalle_subactividad["English"]["paciente_id"] = "Paciente Id";
	$fieldToolTipsdetalle_subactividad["English"]["paciente_id"] = "";
	$placeHoldersdetalle_subactividad["English"]["paciente_id"] = "";
	$fieldLabelsdetalle_subactividad["English"]["fecha"] = "Fecha";
	$fieldToolTipsdetalle_subactividad["English"]["fecha"] = "";
	$placeHoldersdetalle_subactividad["English"]["fecha"] = "";
	$fieldLabelsdetalle_subactividad["English"]["observacion"] = "Observacion";
	$fieldToolTipsdetalle_subactividad["English"]["observacion"] = "";
	$placeHoldersdetalle_subactividad["English"]["observacion"] = "";
	$fieldLabelsdetalle_subactividad["English"]["responsable"] = "Responsable";
	$fieldToolTipsdetalle_subactividad["English"]["responsable"] = "";
	$placeHoldersdetalle_subactividad["English"]["responsable"] = "";
	$fieldLabelsdetalle_subactividad["English"]["area_servicio"] = "Area Servicio";
	$fieldToolTipsdetalle_subactividad["English"]["area_servicio"] = "";
	$placeHoldersdetalle_subactividad["English"]["area_servicio"] = "";
	if (count($fieldToolTipsdetalle_subactividad["English"]))
		$tdatadetalle_subactividad[".isUseToolTips"] = true;
}


	$tdatadetalle_subactividad[".NCSearch"] = true;



$tdatadetalle_subactividad[".shortTableName"] = "detalle_subactividad";
$tdatadetalle_subactividad[".nSecOptions"] = 0;

$tdatadetalle_subactividad[".mainTableOwnerID"] = "";
$tdatadetalle_subactividad[".entityType"] = 0;
$tdatadetalle_subactividad[".connId"] = "basedatosenfermeriaatlocalhost";


$tdatadetalle_subactividad[".strOriginalTableName"] = "detalle_subactividad";

	



$tdatadetalle_subactividad[".showAddInPopup"] = false;

$tdatadetalle_subactividad[".showEditInPopup"] = false;

$tdatadetalle_subactividad[".showViewInPopup"] = false;

$tdatadetalle_subactividad[".listAjax"] = false;
//	temporary
//$tdatadetalle_subactividad[".listAjax"] = false;

	$tdatadetalle_subactividad[".audit"] = false;

	$tdatadetalle_subactividad[".locking"] = false;


$pages = $tdatadetalle_subactividad[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatadetalle_subactividad[".edit"] = true;
	$tdatadetalle_subactividad[".afterEditAction"] = 1;
	$tdatadetalle_subactividad[".closePopupAfterEdit"] = 1;
	$tdatadetalle_subactividad[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatadetalle_subactividad[".add"] = true;
$tdatadetalle_subactividad[".afterAddAction"] = 1;
$tdatadetalle_subactividad[".closePopupAfterAdd"] = 1;
$tdatadetalle_subactividad[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatadetalle_subactividad[".list"] = true;
}



$tdatadetalle_subactividad[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatadetalle_subactividad[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatadetalle_subactividad[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatadetalle_subactividad[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatadetalle_subactividad[".printFriendly"] = true;
}



$tdatadetalle_subactividad[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatadetalle_subactividad[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatadetalle_subactividad[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatadetalle_subactividad[".isUseAjaxSuggest"] = true;





$tdatadetalle_subactividad[".ajaxCodeSnippetAdded"] = false;

$tdatadetalle_subactividad[".buttonsAdded"] = false;

$tdatadetalle_subactividad[".addPageEvents"] = false;

// use timepicker for search panel
$tdatadetalle_subactividad[".isUseTimeForSearch"] = false;


$tdatadetalle_subactividad[".badgeColor"] = "E8926F";


$tdatadetalle_subactividad[".allSearchFields"] = array();
$tdatadetalle_subactividad[".filterFields"] = array();
$tdatadetalle_subactividad[".requiredSearchFields"] = array();

$tdatadetalle_subactividad[".googleLikeFields"] = array();
$tdatadetalle_subactividad[".googleLikeFields"][] = "id";
$tdatadetalle_subactividad[".googleLikeFields"][] = "subactividad_id";
$tdatadetalle_subactividad[".googleLikeFields"][] = "paciente_id";
$tdatadetalle_subactividad[".googleLikeFields"][] = "fecha";
$tdatadetalle_subactividad[".googleLikeFields"][] = "observacion";
$tdatadetalle_subactividad[".googleLikeFields"][] = "responsable";
$tdatadetalle_subactividad[".googleLikeFields"][] = "area_servicio";



$tdatadetalle_subactividad[".tableType"] = "list";

$tdatadetalle_subactividad[".printerPageOrientation"] = 0;
$tdatadetalle_subactividad[".nPrinterPageScale"] = 100;

$tdatadetalle_subactividad[".nPrinterSplitRecords"] = 40;

$tdatadetalle_subactividad[".geocodingEnabled"] = false;










$tdatadetalle_subactividad[".pageSize"] = 20;

$tdatadetalle_subactividad[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatadetalle_subactividad[".strOrderBy"] = $tstrOrderBy;

$tdatadetalle_subactividad[".orderindexes"] = array();


$tdatadetalle_subactividad[".sqlHead"] = "SELECT id,  	subactividad_id,  	paciente_id,  	fecha,  	observacion,  	responsable,  	area_servicio";
$tdatadetalle_subactividad[".sqlFrom"] = "FROM detalle_subactividad";
$tdatadetalle_subactividad[".sqlWhereExpr"] = "";
$tdatadetalle_subactividad[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatadetalle_subactividad[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatadetalle_subactividad[".arrGroupsPerPage"] = $arrGPP;

$tdatadetalle_subactividad[".highlightSearchResults"] = true;

$tableKeysdetalle_subactividad = array();
$tableKeysdetalle_subactividad[] = "id";
$tdatadetalle_subactividad[".Keys"] = $tableKeysdetalle_subactividad;


$tdatadetalle_subactividad[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "detalle_subactividad";
	$fdata["Label"] = GetFieldLabel("detalle_subactividad","id");
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


	$tdatadetalle_subactividad["id"] = $fdata;
		$tdatadetalle_subactividad[".searchableFields"][] = "id";
//	subactividad_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "subactividad_id";
	$fdata["GoodName"] = "subactividad_id";
	$fdata["ownerTable"] = "detalle_subactividad";
	$fdata["Label"] = GetFieldLabel("detalle_subactividad","subactividad_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "subactividad_id";

		$fdata["sourceSingle"] = "subactividad_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "subactividad_id";

	
	
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
	$edata["LookupTable"] = "subactividades";
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


	$tdatadetalle_subactividad["subactividad_id"] = $fdata;
		$tdatadetalle_subactividad[".searchableFields"][] = "subactividad_id";
//	paciente_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "paciente_id";
	$fdata["GoodName"] = "paciente_id";
	$fdata["ownerTable"] = "detalle_subactividad";
	$fdata["Label"] = GetFieldLabel("detalle_subactividad","paciente_id");
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


	$tdatadetalle_subactividad["paciente_id"] = $fdata;
		$tdatadetalle_subactividad[".searchableFields"][] = "paciente_id";
//	fecha
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "fecha";
	$fdata["GoodName"] = "fecha";
	$fdata["ownerTable"] = "detalle_subactividad";
	$fdata["Label"] = GetFieldLabel("detalle_subactividad","fecha");
	$fdata["FieldType"] = 135;


	
	
			

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


	$tdatadetalle_subactividad["fecha"] = $fdata;
		$tdatadetalle_subactividad[".searchableFields"][] = "fecha";
//	observacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "observacion";
	$fdata["GoodName"] = "observacion";
	$fdata["ownerTable"] = "detalle_subactividad";
	$fdata["Label"] = GetFieldLabel("detalle_subactividad","observacion");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "observacion";

		$fdata["sourceSingle"] = "observacion";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "observacion";

	
	
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


	$tdatadetalle_subactividad["observacion"] = $fdata;
		$tdatadetalle_subactividad[".searchableFields"][] = "observacion";
//	responsable
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "responsable";
	$fdata["GoodName"] = "responsable";
	$fdata["ownerTable"] = "detalle_subactividad";
	$fdata["Label"] = GetFieldLabel("detalle_subactividad","responsable");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "responsable";

		$fdata["sourceSingle"] = "responsable";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "responsable";

	
	
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


	$tdatadetalle_subactividad["responsable"] = $fdata;
		$tdatadetalle_subactividad[".searchableFields"][] = "responsable";
//	area_servicio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "area_servicio";
	$fdata["GoodName"] = "area_servicio";
	$fdata["ownerTable"] = "detalle_subactividad";
	$fdata["Label"] = GetFieldLabel("detalle_subactividad","area_servicio");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "area_servicio";

		$fdata["sourceSingle"] = "area_servicio";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "area_servicio";

	
	
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


	$tdatadetalle_subactividad["area_servicio"] = $fdata;
		$tdatadetalle_subactividad[".searchableFields"][] = "area_servicio";


$tables_data["detalle_subactividad"]=&$tdatadetalle_subactividad;
$field_labels["detalle_subactividad"] = &$fieldLabelsdetalle_subactividad;
$fieldToolTips["detalle_subactividad"] = &$fieldToolTipsdetalle_subactividad;
$placeHolders["detalle_subactividad"] = &$placeHoldersdetalle_subactividad;
$page_titles["detalle_subactividad"] = &$pageTitlesdetalle_subactividad;


changeTextControlsToDate( "detalle_subactividad" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["detalle_subactividad"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["detalle_subactividad"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="pacientes";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="pacientes";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "pacientes";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["detalle_subactividad"][0] = $masterParams;
				$masterTablesData["detalle_subactividad"][0]["masterKeys"] = array();
	$masterTablesData["detalle_subactividad"][0]["masterKeys"][]="id_paciente";
				$masterTablesData["detalle_subactividad"][0]["detailKeys"] = array();
	$masterTablesData["detalle_subactividad"][0]["detailKeys"][]="paciente_id";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="subactividades";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="subactividades";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "subactividades";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["detalle_subactividad"][1] = $masterParams;
				$masterTablesData["detalle_subactividad"][1]["masterKeys"] = array();
	$masterTablesData["detalle_subactividad"][1]["masterKeys"][]="id";
				$masterTablesData["detalle_subactividad"][1]["detailKeys"] = array();
	$masterTablesData["detalle_subactividad"][1]["detailKeys"][]="subactividad_id";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_detalle_subactividad()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	subactividad_id,  	paciente_id,  	fecha,  	observacion,  	responsable,  	area_servicio";
$proto0["m_strFrom"] = "FROM detalle_subactividad";
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
	"m_strTable" => "detalle_subactividad",
	"m_srcTableName" => "detalle_subactividad"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "detalle_subactividad";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "subactividad_id",
	"m_strTable" => "detalle_subactividad",
	"m_srcTableName" => "detalle_subactividad"
));

$proto8["m_sql"] = "subactividad_id";
$proto8["m_srcTableName"] = "detalle_subactividad";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "paciente_id",
	"m_strTable" => "detalle_subactividad",
	"m_srcTableName" => "detalle_subactividad"
));

$proto10["m_sql"] = "paciente_id";
$proto10["m_srcTableName"] = "detalle_subactividad";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha",
	"m_strTable" => "detalle_subactividad",
	"m_srcTableName" => "detalle_subactividad"
));

$proto12["m_sql"] = "fecha";
$proto12["m_srcTableName"] = "detalle_subactividad";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "observacion",
	"m_strTable" => "detalle_subactividad",
	"m_srcTableName" => "detalle_subactividad"
));

$proto14["m_sql"] = "observacion";
$proto14["m_srcTableName"] = "detalle_subactividad";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "responsable",
	"m_strTable" => "detalle_subactividad",
	"m_srcTableName" => "detalle_subactividad"
));

$proto16["m_sql"] = "responsable";
$proto16["m_srcTableName"] = "detalle_subactividad";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "area_servicio",
	"m_strTable" => "detalle_subactividad",
	"m_srcTableName" => "detalle_subactividad"
));

$proto18["m_sql"] = "area_servicio";
$proto18["m_srcTableName"] = "detalle_subactividad";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "detalle_subactividad";
$proto21["m_srcTableName"] = "detalle_subactividad";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "id";
$proto21["m_columns"][] = "subactividad_id";
$proto21["m_columns"][] = "paciente_id";
$proto21["m_columns"][] = "fecha";
$proto21["m_columns"][] = "observacion";
$proto21["m_columns"][] = "responsable";
$proto21["m_columns"][] = "area_servicio";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "detalle_subactividad";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "detalle_subactividad";
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
$proto0["m_srcTableName"]="detalle_subactividad";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_detalle_subactividad = createSqlQuery_detalle_subactividad();


	
		;

							

$tdatadetalle_subactividad[".sqlquery"] = $queryData_detalle_subactividad;



$tdatadetalle_subactividad[".hasEvents"] = false;

?>