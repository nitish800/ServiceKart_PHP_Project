<?php

session_start();

$_SESSION['proid']=null;
if(!isset($_SESSION['cusid']))
{
	$_SESSION['err'] = 4;
	header("Location:cus_login.html");
}
if(!empty($_REQUEST['prod']))
{
$proid = $_REQUEST['prod'];
}
else{
	$_SESSION['err'] = 12;
	header("Location:homepage.php");
}


$host = 'host=127.0.0.1';
$port = 'port=5432';
$dbname = 'dbname=ServiceKart';
$credential = 'user=postgres password=###alpha@@@123';
$session = pg_connect("$host $port $dbname $credential");
if($session)
{
	
}else
{
			echo "<div class='alert alert-warning alert-dismissible' role='alert'>
  <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
  <strong>Database Error!</strong> 
</div>";
}

$cus = $_SESSION['cusid'];


$testsql="select kart_pro_id from kart where kart_id=$cus";
$testexecute = pg_query($session,$testsql);
$testresult = pg_fetch_row($testexecute);
if($testresult[0] == $proid)
{
$sql = "delete from kart where kart_id = $cus and kart_pro_id=$proid";
$result = pg_query($session,$sql);
header("Location:kart.php");
}












?>