<?php
include_once "db.php";
// 陣列轉字串
$_POST['pr']=serialize(($_POST['pr']));

$Admin->save($_POST);
to("../back.php?do=admin");
?>