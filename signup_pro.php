<?php
session_start();
$f_name = $_REQUEST['fname'];
$l_name = $_REQUEST['lname'];
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

$sql = "insert into professional_signup (first_name ,last_name ,email ,password) values ('$f_name','$l_name','$email','$pass')";

$result = pg_query($session,$sql);

if($result>0)
{
	$sql2 = "select proID from professional_signup where email='$email'";
	$result2 = pg_query($session,$sql2);
	
		if($row=pg_fetch_row($result2))
		{
			$_SESSION['proid'] = $row[0];
			$_SESSION['err'] = 0;
			$_SESSION['cusid'] = null;
			header("Location:homepage.php");
		}
}
else{
	$_SESSION['err'] = 1;
	header("Location:homepage.php");
}

pg_close($session);


?>