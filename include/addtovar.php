<? 
session_start();
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");?>
<?
parse_str($_POST["razmer"], $searcharray);//разбор serialize
if(is_array($_SESSION['BASKET'][$_POST['id']])){
	foreach($searcharray as $key=>$val){
	if(isset($_SESSION['BASKET'][$_POST['id']][$key])){
			$_SESSION['BASKET'][$_POST['id']][$key] = $_SESSION['BASKET'][$_POST['id']][$key] + $val;
		} else {
			$_SESSION['BASKET'][$_POST['id']][$key] = $val;
		}
	}
}else{
	$_SESSION['BASKET'][$_POST['id']] = $searcharray;
}
?>