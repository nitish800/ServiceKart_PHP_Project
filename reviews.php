<?php

/*rating

stars int,
comment text,
from_cusID int references customer_signup(custID),
to_proID int references professional_signup(proID),

*/


session_start();
$_SESSION['proid']=null;
if(!isset($_SESSION['cusid']))
{
	$_SESSION['err'] = 4;
	header("Location:cus_login.html");
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
if(isset($_REQUEST['comment']) && isset($_REQUEST['rating']) && isset($_REQUEST['prod']))
{
	$comment = $_REQUEST['comment'];
	$rating = $_REQUEST['rating'];
	$prod = $_REQUEST['prod'];
	$sql = "insert into rating (stars,comment,from_cusID,to_proID) values ($rating,'$comment',$cus,$prod)";
	$result = pg_query($session,$sql);
	if($result)
	{
		
		header("Location:profile_professional.php?prod=$prod");
	}
}
else
{
	$_SESSION['err']=15;
	header("Location:homepage.php");
	
}






?>


