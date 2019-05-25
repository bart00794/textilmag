<?
IncludeModuleLangFile(__file__);
$module_id="myellinks.subelement";
global $DBType;
CModule::AddAutoloadClasses(
	$module_id,
	array(
		"myellinksBase"					=>"classes/".$DBType."/myellinks.base.php",
		"myellinksElement"					=>"classes/general/myellinks.element.php",
		"myellinksAddForm"					=>"classes/general/myellinks.add.form.php",
		"myellinksSubelementInterface"		=>"classes/element/myellinks.subelement.interface.php",

	)
);
