<?php
session_start();

if(!isset($_SESSION['proid']))
{
	$_SESSION['err'] = 7;
	header("Location:homepage.php");
}

$orderid = $_REQUEST['orderid'];
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

$sql = "update customer_orders set order_status='Rejected' where orderID=$orderid ";

$result = pg_query($session,$sql);

if($result)
{
	$_SESSION['err'] = 10;
	
	header("Location:profile_professional.php");
}

else
{
	$_SESSION['err'] = 11;
	header("Location:profile_professional.php");
}



?>
