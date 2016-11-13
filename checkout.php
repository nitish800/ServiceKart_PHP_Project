<?php

/*
customer_id int references customer_signup(custID) == $_SESSION['cusid']
due_amount int not null == $_SESSION['kart_total'] 
total_products int NOT NULL == $_SESSION['kart_count'] 
service text, ==$_SESSION['kart_service']


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
$amount =$_SESSION['kart_total'];
$count = $_SESSION['kart_count'] ;
$services = $_SESSION['kart_service'];
$proids = $_SESSION['proids'];

if(!empty($cus) && !empty($amount) && !empty($count) && !empty($services) && !empty('proids'))
{
	foreach ($proids as $value)
	$sql = "insert into customer_orders (customer_id,due_amount,total_products,service,proid) values ($cus,$amount,$count,'$services',$value)";
	$result = pg_query($session,$sql);
	if($result)
	{
		$sql2 = "delete from kart where kart_id = $cus";
		$result2 = pg_query($session,$sql2);
		
		
		
		$_SESSION['kart_total'] = null;
		$_SESSION['kart_count'] = null;
		$_SESSION['kart_service'] =null;
		
		header("Location:profile_customer.php");
	}
}
else
{
	$_SESSION['err']=14;
	header("Location:homepage.php");
	
}



?>