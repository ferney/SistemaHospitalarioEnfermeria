<?php
$tdataantecedentes = array();
$tdataantecedentes[".searchableFields"] = array();
$tdataantecedentes[".ShortName"] = "antecedentes";
$tdataantecedentes[".OwnerID"] = "";
$tdataantecedentes[".OriginalTable"] = "antecedentes";


$tdataantecedentes[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataantecedentes[".originalPagesByType"] = $tdataantecedentes[".pagesByType"];
$tdataantecedentes[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataantecedentes[".originalPages"] = $tdataantecedentes[".pages"];
$tdataantecedentes[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataantecedentes[".originalDefaultPages"] = $tdataantecedentes[".defaultPages"];

//	field labels
$fieldLabelsantecedentes = array();
$fieldToolTipsantecedentes = array();
$pageTitlesantecedentes = array();
$placeHoldersantecedentes = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsantecedentes["English"] = array();
	$fieldToolTipsantecedentes["English"] = array();
	$placeHoldersantecedentes["English"] = array();
	$pageTitlesantecedentes["English"] = array();
	$fieldLabelsantecedentes["English"]["id_antecedente"] = "Id Antecedente";
	$fieldToolTipsantecedentes["English"]["id_antecedente"] = "";
	$placeHoldersantecedentes["English"]["id_antecedente"] = "";
	$fieldLabelsantecedentes["English"]["paciente_id"] = "Paciente Id";
	$fieldToolTipsantecedentes["English"]["paciente_id"] = "";
	$placeHoldersantecedentes["English"]["paciente_id"] = "";
	$fieldLabelsantecedentes["English"]["alergicos"] = "Alergicos";
	$fieldToolTipsantecedentes["English"]["alergicos"] = "";
	$placeHoldersantecedentes["English"]["alergicos"] = "";
	$fieldLabelsantecedentes["English"]["enfermedad_actual"] = "Enfermedad Actual";
	$fieldToolTipsantecedentes["English"]["enfermedad_actual"] = "";
	$placeHoldersantecedentes["English"]["enfermedad_actual"] = "";
	$fieldLabelsantecedentes["English"]["farmacologicos"] = "Farmacologicos";
	$fieldToolTipsantecedentes["English"]["farmacologicos"] = "";
	$placeHoldersantecedentes["English"]["farmacologicos"] = "";
	$fieldLabelsantecedentes["English"]["familiares"] = "Familiares";
	$fieldToolTipsantecedentes["English"]["familiares"] = "";
	$placeHoldersantecedentes["English"]["familiares"] = "";
	$fieldLabelsantecedentes["English"]["patologicos"] = "Patologicos";
	$fieldToolTipsantecedentes["English"]["patologicos"] = "";
	$placeHoldersantecedentes["English"]["patologicos"] = "";
	$fieldLabelsantecedentes["English"]["quirurgicos"] = "Quirurgicos";
	$fieldToolTipsantecedentes["English"]["quirurgicos"] = "";
	$placeHoldersantecedentes["English"]["quirurgicos"] = "";
	if (count($fieldToolTipsantecedentes["English"]))
		$tdataantecedentes[".isUseToolTips"] = true;
}


	$tdataantecedentes[".NCSearch"] = true;



$tdataantecedentes[".shortTableName"] = "antecedentes";
$tdataantecedentes[".nSecOptions"] = 0;

$tdataantecedentes[".mainTableOwnerID"] = "";
$tdataantecedentes[".entityType"] = 0;
$tdataantecedentes[".connId"] = "basedatosenfermeriaatlocalhost";


$tdataantecedentes[".strOriginalTableName"] = "antecedentes";

	



$tdataantecedentes[".showAddInPopup"] = false;

$tdataantecedentes[".showEditInPopup"] = false;

$tdataantecedentes[".showViewInPopup"] = false;

$tdataantecedentes[".listAjax"] = false;
//	temporary
//$tdataantecedentes[".listAjax"] = false;

	$tdataantecedentes[".audit"] = false;

	$tdataantecedentes[".locking"] = false;


$pages = $tdataantecedentes[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataantecedentes[".edit"] = true;
	$tdataantecedentes[".afterEditAction"] = 1;
	$tdataantecedentes[".closePopupAfterEdit"] = 1;
	$tdataantecedentes[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataantecedentes[".add"] = true;
$tdataantecedentes[".afterAddAction"] = 1;
$tdataantecedentes[".closePopupAfterAdd"] = 1;
$tdataantecedentes[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataantecedentes[".list"] = true;
}



$tdataantecedentes[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataantecedentes[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataantecedentes[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataantecedentes[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataantecedentes[".printFriendly"] = true;
}



$tdataantecedentes[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataantecedentes[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataantecedentes[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataantecedentes[".isUseAjaxSuggest"] = true;





$tdataantecedentes[".ajaxCodeSnippetAdded"] = false;

$tdataantecedentes[".buttonsAdded"] = false;

$tdataantecedentes[".addPageEvents"] = false;

// use timepicker for search panel
$tdataantecedentes[".isUseTimeForSearch"] = false;


$tdataantecedentes[".badgeColor"] = "6493EA";


$tdataantecedentes[".allSearchFields"] = array();
$tdataantecedentes[".filterFields"] = array();
$tdataantecedentes[".requiredSearchFields"] = array();

$tdataantecedentes[".googleLikeFields"] = array();
$tdataantecedentes[".googleLikeFields"][] = "id_antecedente";
$tdataantecedentes[".googleLikeFields"][] = "paciente_id";
$tdataantecedentes[".googleLikeFields"][] = "alergicos";
$tdataantecedentes[".googleLikeFields"][] = "enfermedad_actual";
$tdataantecedentes[".googleLikeFields"][] = "farmacologicos";
$tdataantecedentes[".googleLikeFields"][] = "familiares";
$tdataantecedentes[".googleLikeFields"][] = "patologicos";
$tdataantecedentes[".googleLikeFields"][] = "quirurgicos";



$tdataantecedentes[".tableType"] = "list";

$tdataantecedentes[".printerPageOrientation"] = 0;
$tdataantecedentes[".nPrinterPageScale"] = 100;

$tdataantecedentes[".nPrinterSplitRecords"] = 40;

$tdataantecedentes[".geocodingEnabled"] = false;










$tdataantecedentes[".pageSize"] = 20;

$tdataantecedentes[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataantecedentes[".strOrderBy"] = $tstrOrderBy;

$tdataantecedentes[".orderindexes"] = array();


$tdataantecedentes[".sqlHead"] = "SELECT id_antecedente,  	paciente_id,  	alergicos,  	enfermedad_actual,  	farmacologicos,  	familiares,  	patologicos,  	quirurgicos";
$tdataantecedentes[".sqlFrom"] = "FROM antecedentes";
$tdataantecedentes[".sqlWhereExpr"] = "";
$tdataantecedentes[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataantecedentes[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataantecedentes[".arrGroupsPerPage"] = $arrGPP;

$tdataantecedentes[".highlightSearchResults"] = true;

$tableKeysantecedentes = array();
$tableKeysantecedentes[] = "id_antecedente";
$tdataantecedentes[".Keys"] = $tableKeysantecedentes;


$tdataantecedentes[".hideMobileList"] = array();




//	id_antecedente
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_antecedente";
	$fdata["GoodName"] = "id_antecedente";
	$fdata["ownerTable"] = "antecedentes";
	$fdata["Label"] = GetFieldLabel("antecedentes","id_antecedente");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id_antecedente";

		$fdata["sourceSingle"] = "id_antecedente";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_antecedente";

	
	
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


	$tdataantecedentes["id_antecedente"] = $fdata;
		$tdataantecedentes[".searchableFields"][] = "id_antecedente";
//	paciente_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "paciente_id";
	$fdata["GoodName"] = "paciente_id";
	$fdata["ownerTable"] = "antecedentes";
	$fdata["Label"] = GetFieldLabel("antecedentes","paciente_id");
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


	$tdataantecedentes["paciente_id"] = $fdata;
		$tdataantecedentes[".searchableFields"][] = "paciente_id";
//	alergicos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "alergicos";
	$fdata["GoodName"] = "alergicos";
	$fdata["ownerTable"] = "antecedentes";
	$fdata["Label"] = GetFieldLabel("antecedentes","alergicos");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "alergicos";

		$fdata["sourceSingle"] = "alergicos";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "alergicos";

	
	
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


	$tdataantecedentes["alergicos"] = $fdata;
		$tdataantecedentes[".searchableFields"][] = "alergicos";
//	enfermedad_actual
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "enfermedad_actual";
	$fdata["GoodName"] = "enfermedad_actual";
	$fdata["ownerTable"] = "antecedentes";
	$fdata["Label"] = GetFieldLabel("antecedentes","enfermedad_actual");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "enfermedad_actual";

		$fdata["sourceSingle"] = "enfermedad_actual";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "enfermedad_actual";

	
	
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


	$tdataantecedentes["enfermedad_actual"] = $fdata;
		$tdataantecedentes[".searchableFields"][] = "enfermedad_actual";
//	farmacologicos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "farmacologicos";
	$fdata["GoodName"] = "farmacologicos";
	$fdata["ownerTable"] = "antecedentes";
	$fdata["Label"] = GetFieldLabel("antecedentes","farmacologicos");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "farmacologicos";

		$fdata["sourceSingle"] = "farmacologicos";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "farmacologicos";

	
	
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


	$tdataantecedentes["farmacologicos"] = $fdata;
		$tdataantecedentes[".searchableFields"][] = "farmacologicos";
//	familiares
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "familiares";
	$fdata["GoodName"] = "familiares";
	$fdata["ownerTable"] = "antecedentes";
	$fdata["Label"] = GetFieldLabel("antecedentes","familiares");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "familiares";

		$fdata["sourceSingle"] = "familiares";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "familiares";

	
	
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


	$tdataantecedentes["familiares"] = $fdata;
		$tdataantecedentes[".searchableFields"][] = "familiares";
//	patologicos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "patologicos";
	$fdata["GoodName"] = "patologicos";
	$fdata["ownerTable"] = "antecedentes";
	$fdata["Label"] = GetFieldLabel("antecedentes","patologicos");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "patologicos";

		$fdata["sourceSingle"] = "patologicos";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "patologicos";

	
	
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


	$tdataantecedentes["patologicos"] = $fdata;
		$tdataantecedentes[".searchableFields"][] = "patologicos";
//	quirurgicos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "quirurgicos";
	$fdata["GoodName"] = "quirurgicos";
	$fdata["ownerTable"] = "antecedentes";
	$fdata["Label"] = GetFieldLabel("antecedentes","quirurgicos");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "quirurgicos";

		$fdata["sourceSingle"] = "quirurgicos";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "quirurgicos";

	
	
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


	$tdataantecedentes["quirurgicos"] = $fdata;
		$tdataantecedentes[".searchableFields"][] = "quirurgicos";


$tables_data["antecedentes"]=&$tdataantecedentes;
$field_labels["antecedentes"] = &$fieldLabelsantecedentes;
$fieldToolTips["antecedentes"] = &$fieldToolTipsantecedentes;
$placeHolders["antecedentes"] = &$placeHoldersantecedentes;
$page_titles["antecedentes"] = &$pageTitlesantecedentes;


changeTextControlsToDate( "antecedentes" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["antecedentes"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["antecedentes"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="pacientes";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="pacientes";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "pacientes";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["antecedentes"][0] = $masterParams;
				$masterTablesData["antecedentes"][0]["masterKeys"] = array();
	$masterTablesData["antecedentes"][0]["masterKeys"][]="id_paciente";
				$masterTablesData["antecedentes"][0]["detailKeys"] = array();
	$masterTablesData["antecedentes"][0]["detailKeys"][]="paciente_id";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_antecedentes()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_antecedente,  	paciente_id,  	alergicos,  	enfermedad_actual,  	farmacologicos,  	familiares,  	patologicos,  	quirurgicos";
$proto0["m_strFrom"] = "FROM antecedentes";
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
	"m_strName" => "id_antecedente",
	"m_strTable" => "antecedentes",
	"m_srcTableName" => "antecedentes"
));

$proto6["m_sql"] = "id_antecedente";
$proto6["m_srcTableName"] = "antecedentes";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "paciente_id",
	"m_strTable" => "antecedentes",
	"m_srcTableName" => "antecedentes"
));

$proto8["m_sql"] = "paciente_id";
$proto8["m_srcTableName"] = "antecedentes";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "alergicos",
	"m_strTable" => "antecedentes",
	"m_srcTableName" => "antecedentes"
));

$proto10["m_sql"] = "alergicos";
$proto10["m_srcTableName"] = "antecedentes";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "enfermedad_actual",
	"m_strTable" => "antecedentes",
	"m_srcTableName" => "antecedentes"
));

$proto12["m_sql"] = "enfermedad_actual";
$proto12["m_srcTableName"] = "antecedentes";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "farmacologicos",
	"m_strTable" => "antecedentes",
	"m_srcTableName" => "antecedentes"
));

$proto14["m_sql"] = "farmacologicos";
$proto14["m_srcTableName"] = "antecedentes";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "familiares",
	"m_strTable" => "antecedentes",
	"m_srcTableName" => "antecedentes"
));

$proto16["m_sql"] = "familiares";
$proto16["m_srcTableName"] = "antecedentes";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "patologicos",
	"m_strTable" => "antecedentes",
	"m_srcTableName" => "antecedentes"
));

$proto18["m_sql"] = "patologicos";
$proto18["m_srcTableName"] = "antecedentes";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "quirurgicos",
	"m_strTable" => "antecedentes",
	"m_srcTableName" => "antecedentes"
));

$proto20["m_sql"] = "quirurgicos";
$proto20["m_srcTableName"] = "antecedentes";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto22=array();
$proto22["m_link"] = "SQLL_MAIN";
			$proto23=array();
$proto23["m_strName"] = "antecedentes";
$proto23["m_srcTableName"] = "antecedentes";
$proto23["m_columns"] = array();
$proto23["m_columns"][] = "id_antecedente";
$proto23["m_columns"][] = "paciente_id";
$proto23["m_columns"][] = "alergicos";
$proto23["m_columns"][] = "enfermedad_actual";
$proto23["m_columns"][] = "farmacologicos";
$proto23["m_columns"][] = "familiares";
$proto23["m_columns"][] = "patologicos";
$proto23["m_columns"][] = "quirurgicos";
$obj = new SQLTable($proto23);

$proto22["m_table"] = $obj;
$proto22["m_sql"] = "antecedentes";
$proto22["m_alias"] = "";
$proto22["m_srcTableName"] = "antecedentes";
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
$proto0["m_srcTableName"]="antecedentes";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_antecedentes = createSqlQuery_antecedentes();


	
		;

								

$tdataantecedentes[".sqlquery"] = $queryData_antecedentes;



$tdataantecedentes[".hasEvents"] = false;

?>