<?php
session_start();
$email = $_REQUEST['email'];
$pass = $_REQUEST['pass'];

//db connection


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
$sql = "select custID from customer_signup where email='$email' and password_txt='$pass'";


$result = pg_query($session,$sql);

if($row=pg_fetch_row($result))
{
			$_SESSION['cusid'] = $row[0];
			$_SESSION['err'] = 2;
			$_SESSION['proid'] = null;
			header("Location:homepage.php");
}
else{
	$_SESSION['err'] = 3;
	header("Location:cus_login.html");
}

pg_close($session);


?>