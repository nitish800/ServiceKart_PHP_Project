<?php
session_start();
$_SESSION['cusid']=null;
$_SESSION['proid'] = null;
$_SESSION['err'] = 18;

header("location:homepage.php");


?>