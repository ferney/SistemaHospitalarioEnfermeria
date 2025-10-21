<?php
$tdatamedicamentos = array();
$tdatamedicamentos[".searchableFields"] = array();
$tdatamedicamentos[".ShortName"] = "medicamentos";
$tdatamedicamentos[".OwnerID"] = "";
$tdatamedicamentos[".OriginalTable"] = "medicamentos";


$tdatamedicamentos[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatamedicamentos[".originalPagesByType"] = $tdatamedicamentos[".pagesByType"];
$tdatamedicamentos[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatamedicamentos[".originalPages"] = $tdatamedicamentos[".pages"];
$tdatamedicamentos[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatamedicamentos[".originalDefaultPages"] = $tdatamedicamentos[".defaultPages"];

//	field labels
$fieldLabelsmedicamentos = array();
$fieldToolTipsmedicamentos = array();
$pageTitlesmedicamentos = array();
$placeHoldersmedicamentos = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmedicamentos["English"] = array();
	$fieldToolTipsmedicamentos["English"] = array();
	$placeHoldersmedicamentos["English"] = array();
	$pageTitlesmedicamentos["English"] = array();
	$fieldLabelsmedicamentos["English"]["id_medicamento"] = "Id Medicamento";
	$fieldToolTipsmedicamentos["English"]["id_medicamento"] = "";
	$placeHoldersmedicamentos["English"]["id_medicamento"] = "";
	$fieldLabelsmedicamentos["English"]["paciente_id"] = "Paciente Id";
	$fieldToolTipsmedicamentos["English"]["paciente_id"] = "";
	$placeHoldersmedicamentos["English"]["paciente_id"] = "";
	$fieldLabelsmedicamentos["English"]["fecha"] = "Fecha";
	$fieldToolTipsmedicamentos["English"]["fecha"] = "";
	$placeHoldersmedicamentos["English"]["fecha"] = "";
	$fieldLabelsmedicamentos["English"]["nombre"] = "Nombre";
	$fieldToolTipsmedicamentos["English"]["nombre"] = "";
	$placeHoldersmedicamentos["English"]["nombre"] = "";
	$fieldLabelsmedicamentos["English"]["cantidad"] = "Cantidad";
	$fieldToolTipsmedicamentos["English"]["cantidad"] = "";
	$placeHoldersmedicamentos["English"]["cantidad"] = "";
	$fieldLabelsmedicamentos["English"]["via"] = "Via";
	$fieldToolTipsmedicamentos["English"]["via"] = "";
	$placeHoldersmedicamentos["English"]["via"] = "";
	$fieldLabelsmedicamentos["English"]["dosis"] = "Dosis";
	$fieldToolTipsmedicamentos["English"]["dosis"] = "";
	$placeHoldersmedicamentos["English"]["dosis"] = "";
	$fieldLabelsmedicamentos["English"]["administrado"] = "Administrado";
	$fieldToolTipsmedicamentos["English"]["administrado"] = "";
	$placeHoldersmedicamentos["English"]["administrado"] = "";
	if (count($fieldToolTipsmedicamentos["English"]))
		$tdatamedicamentos[".isUseToolTips"] = true;
}


	$tdatamedicamentos[".NCSearch"] = true;



$tdatamedicamentos[".shortTableName"] = "medicamentos";
$tdatamedicamentos[".nSecOptions"] = 0;

$tdatamedicamentos[".mainTableOwnerID"] = "";
$tdatamedicamentos[".entityType"] = 0;
$tdatamedicamentos[".connId"] = "basedatosenfermeriaatlocalhost";


$tdatamedicamentos[".strOriginalTableName"] = "medicamentos";

	



$tdatamedicamentos[".showAddInPopup"] = false;

$tdatamedicamentos[".showEditInPopup"] = false;

$tdatamedicamentos[".showViewInPopup"] = false;

$tdatamedicamentos[".listAjax"] = false;
//	temporary
//$tdatamedicamentos[".listAjax"] = false;

	$tdatamedicamentos[".audit"] = false;

	$tdatamedicamentos[".locking"] = false;


$pages = $tdatamedicamentos[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatamedicamentos[".edit"] = true;
	$tdatamedicamentos[".afterEditAction"] = 1;
	$tdatamedicamentos[".closePopupAfterEdit"] = 1;
	$tdatamedicamentos[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatamedicamentos[".add"] = true;
$tdatamedicamentos[".afterAddAction"] = 1;
$tdatamedicamentos[".closePopupAfterAdd"] = 1;
$tdatamedicamentos[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatamedicamentos[".list"] = true;
}



$tdatamedicamentos[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatamedicamentos[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatamedicamentos[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatamedicamentos[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatamedicamentos[".printFriendly"] = true;
}



$tdatamedicamentos[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatamedicamentos[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatamedicamentos[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatamedicamentos[".isUseAjaxSuggest"] = true;





$tdatamedicamentos[".ajaxCodeSnippetAdded"] = false;

$tdatamedicamentos[".buttonsAdded"] = false;

$tdatamedicamentos[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamedicamentos[".isUseTimeForSearch"] = false;


$tdatamedicamentos[".badgeColor"] = "4682B4";


$tdatamedicamentos[".allSearchFields"] = array();
$tdatamedicamentos[".filterFields"] = array();
$tdatamedicamentos[".requiredSearchFields"] = array();

$tdatamedicamentos[".googleLikeFields"] = array();
$tdatamedicamentos[".googleLikeFields"][] = "id_medicamento";
$tdatamedicamentos[".googleLikeFields"][] = "paciente_id";
$tdatamedicamentos[".googleLikeFields"][] = "fecha";
$tdatamedicamentos[".googleLikeFields"][] = "nombre";
$tdatamedicamentos[".googleLikeFields"][] = "cantidad";
$tdatamedicamentos[".googleLikeFields"][] = "via";
$tdatamedicamentos[".googleLikeFields"][] = "dosis";
$tdatamedicamentos[".googleLikeFields"][] = "administrado";



$tdatamedicamentos[".tableType"] = "list";

$tdatamedicamentos[".printerPageOrientation"] = 0;
$tdatamedicamentos[".nPrinterPageScale"] = 100;

$tdatamedicamentos[".nPrinterSplitRecords"] = 40;

$tdatamedicamentos[".geocodingEnabled"] = false;










$tdatamedicamentos[".pageSize"] = 20;

$tdatamedicamentos[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatamedicamentos[".strOrderBy"] = $tstrOrderBy;

$tdatamedicamentos[".orderindexes"] = array();


$tdatamedicamentos[".sqlHead"] = "SELECT id_medicamento,  	paciente_id,  	fecha,  	nombre,  	cantidad,  	via,  	dosis,  	administrado";
$tdatamedicamentos[".sqlFrom"] = "FROM medicamentos";
$tdatamedicamentos[".sqlWhereExpr"] = "";
$tdatamedicamentos[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamedicamentos[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamedicamentos[".arrGroupsPerPage"] = $arrGPP;

$tdatamedicamentos[".highlightSearchResults"] = true;

$tableKeysmedicamentos = array();
$tableKeysmedicamentos[] = "id_medicamento";
$tdatamedicamentos[".Keys"] = $tableKeysmedicamentos;


$tdatamedicamentos[".hideMobileList"] = array();




//	id_medicamento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_medicamento";
	$fdata["GoodName"] = "id_medicamento";
	$fdata["ownerTable"] = "medicamentos";
	$fdata["Label"] = GetFieldLabel("medicamentos","id_medicamento");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id_medicamento";

		$fdata["sourceSingle"] = "id_medicamento";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_medicamento";

	
	
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


	$tdatamedicamentos["id_medicamento"] = $fdata;
		$tdatamedicamentos[".searchableFields"][] = "id_medicamento";
//	paciente_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "paciente_id";
	$fdata["GoodName"] = "paciente_id";
	$fdata["ownerTable"] = "medicamentos";
	$fdata["Label"] = GetFieldLabel("medicamentos","paciente_id");
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


	$tdatamedicamentos["paciente_id"] = $fdata;
		$tdatamedicamentos[".searchableFields"][] = "paciente_id";
//	fecha
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "fecha";
	$fdata["GoodName"] = "fecha";
	$fdata["ownerTable"] = "medicamentos";
	$fdata["Label"] = GetFieldLabel("medicamentos","fecha");
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


	$tdatamedicamentos["fecha"] = $fdata;
		$tdatamedicamentos[".searchableFields"][] = "fecha";
//	nombre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "nombre";
	$fdata["GoodName"] = "nombre";
	$fdata["ownerTable"] = "medicamentos";
	$fdata["Label"] = GetFieldLabel("medicamentos","nombre");
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
			$edata["EditParams"].= " maxlength=150";

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


	$tdatamedicamentos["nombre"] = $fdata;
		$tdatamedicamentos[".searchableFields"][] = "nombre";
//	cantidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "cantidad";
	$fdata["GoodName"] = "cantidad";
	$fdata["ownerTable"] = "medicamentos";
	$fdata["Label"] = GetFieldLabel("medicamentos","cantidad");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cantidad";

		$fdata["sourceSingle"] = "cantidad";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cantidad";

	
	
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


	$tdatamedicamentos["cantidad"] = $fdata;
		$tdatamedicamentos[".searchableFields"][] = "cantidad";
//	via
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "via";
	$fdata["GoodName"] = "via";
	$fdata["ownerTable"] = "medicamentos";
	$fdata["Label"] = GetFieldLabel("medicamentos","via");
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


	$tdatamedicamentos["via"] = $fdata;
		$tdatamedicamentos[".searchableFields"][] = "via";
//	dosis
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "dosis";
	$fdata["GoodName"] = "dosis";
	$fdata["ownerTable"] = "medicamentos";
	$fdata["Label"] = GetFieldLabel("medicamentos","dosis");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "dosis";

		$fdata["sourceSingle"] = "dosis";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dosis";

	
	
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


	$tdatamedicamentos["dosis"] = $fdata;
		$tdatamedicamentos[".searchableFields"][] = "dosis";
//	administrado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "administrado";
	$fdata["GoodName"] = "administrado";
	$fdata["ownerTable"] = "medicamentos";
	$fdata["Label"] = GetFieldLabel("medicamentos","administrado");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "administrado";

		$fdata["sourceSingle"] = "administrado";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "administrado";

	
	
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


	$tdatamedicamentos["administrado"] = $fdata;
		$tdatamedicamentos[".searchableFields"][] = "administrado";


$tables_data["medicamentos"]=&$tdatamedicamentos;
$field_labels["medicamentos"] = &$fieldLabelsmedicamentos;
$fieldToolTips["medicamentos"] = &$fieldToolTipsmedicamentos;
$placeHolders["medicamentos"] = &$placeHoldersmedicamentos;
$page_titles["medicamentos"] = &$pageTitlesmedicamentos;


changeTextControlsToDate( "medicamentos" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["medicamentos"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["medicamentos"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="pacientes";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="pacientes";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "pacientes";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["medicamentos"][0] = $masterParams;
				$masterTablesData["medicamentos"][0]["masterKeys"] = array();
	$masterTablesData["medicamentos"][0]["masterKeys"][]="id_paciente";
				$masterTablesData["medicamentos"][0]["detailKeys"] = array();
	$masterTablesData["medicamentos"][0]["detailKeys"][]="paciente_id";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_medicamentos()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_medicamento,  	paciente_id,  	fecha,  	nombre,  	cantidad,  	via,  	dosis,  	administrado";
$proto0["m_strFrom"] = "FROM medicamentos";
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
	"m_strName" => "id_medicamento",
	"m_strTable" => "medicamentos",
	"m_srcTableName" => "medicamentos"
));

$proto6["m_sql"] = "id_medicamento";
$proto6["m_srcTableName"] = "medicamentos";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "paciente_id",
	"m_strTable" => "medicamentos",
	"m_srcTableName" => "medicamentos"
));

$proto8["m_sql"] = "paciente_id";
$proto8["m_srcTableName"] = "medicamentos";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha",
	"m_strTable" => "medicamentos",
	"m_srcTableName" => "medicamentos"
));

$proto10["m_sql"] = "fecha";
$proto10["m_srcTableName"] = "medicamentos";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "nombre",
	"m_strTable" => "medicamentos",
	"m_srcTableName" => "medicamentos"
));

$proto12["m_sql"] = "nombre";
$proto12["m_srcTableName"] = "medicamentos";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "cantidad",
	"m_strTable" => "medicamentos",
	"m_srcTableName" => "medicamentos"
));

$proto14["m_sql"] = "cantidad";
$proto14["m_srcTableName"] = "medicamentos";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "via",
	"m_strTable" => "medicamentos",
	"m_srcTableName" => "medicamentos"
));

$proto16["m_sql"] = "via";
$proto16["m_srcTableName"] = "medicamentos";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "dosis",
	"m_strTable" => "medicamentos",
	"m_srcTableName" => "medicamentos"
));

$proto18["m_sql"] = "dosis";
$proto18["m_srcTableName"] = "medicamentos";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "administrado",
	"m_strTable" => "medicamentos",
	"m_srcTableName" => "medicamentos"
));

$proto20["m_sql"] = "administrado";
$proto20["m_srcTableName"] = "medicamentos";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto22=array();
$proto22["m_link"] = "SQLL_MAIN";
			$proto23=array();
$proto23["m_strName"] = "medicamentos";
$proto23["m_srcTableName"] = "medicamentos";
$proto23["m_columns"] = array();
$proto23["m_columns"][] = "id_medicamento";
$proto23["m_columns"][] = "paciente_id";
$proto23["m_columns"][] = "fecha";
$proto23["m_columns"][] = "nombre";
$proto23["m_columns"][] = "cantidad";
$proto23["m_columns"][] = "via";
$proto23["m_columns"][] = "dosis";
$proto23["m_columns"][] = "administrado";
$obj = new SQLTable($proto23);

$proto22["m_table"] = $obj;
$proto22["m_sql"] = "medicamentos";
$proto22["m_alias"] = "";
$proto22["m_srcTableName"] = "medicamentos";
$proto24=array();
$proto24["m_sql"] = "";
$proto24["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto24["m_column"]=$obj;
$proto24["m_contained"] = array();
$proto24["m_strCase"] = "";
$proto24["m_havingmode"] = false;
$proto24["m_inBrackets"] = false;
$proto24["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto24);

$proto22["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto22);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="medicamentos";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_medicamentos = createSqlQuery_medicamentos();


	
		;

								

$tdatamedicamentos[".sqlquery"] = $queryData_medicamentos;



$tdatamedicamentos[".hasEvents"] = false;

?>