<?php include_once "db.php";
// 編輯會員資料，將註冊reg的api修改加入判斷式，就可以少一個檔案
// 或是增加編輯會員api檔案，save_mem.php
if(!isset($_POST['id'])){
    $_POST['regdate']=date("Y-m-d");
}
$Mem->save($_POST);

if(isset($_POST['id'])){
    to("../back.php?do=mem");
}

?>