<?php
session_start();

unset($_SESSION['mem'],$_SESSION['admin']);

// 登出後便刪除購物車(非必要)
if(isset($_SESSION['cart'])){
    unset($_SESSION['cart']);
}
header('location:../index.php');