<?php
$_SESSION['cart'][$_POST['id']]=$_POST['qt'];
echo count($_SESSION['cart']);
?>