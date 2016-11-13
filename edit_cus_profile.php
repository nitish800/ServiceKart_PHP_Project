<?php
session_start();
if(!isset($_SESSION['cusid']))
{
	$_SESSION['err'] = 4;
	header("Location:homepage.php");
}
$_SESSION['proid'] = null;
$name = $_REQUEST["photo"]; 									//taking input name from the FORM

$fi = $_FILES["photo"]["name"];   //geting file

$path = "profileimage/".$fi;   //where to save image / which folder

move_uploaded_file($_FILES["photo"]["tmp_name"],$path);  //move tmp  file to real folder, user to upload.

$email = $_REQUEST['email'];
$f_name = $_REQUEST['fname'];
$l_name = $_REQUEST['lname'];
$address = $_REQUEST['address'];
$city = $_REQUEST['city'];
$pincode = $_REQUEST['pincode'];
$country = $_REQUEST['country'];
$phone_no = $_REQUEST['ph_no'];
$age = $_REQUEST['age'];
$gender = $_REQUEST['gender'];
$cusid= $_SESSION['cusid'];


//TODO : display all the data if exists in html form

//TODO : image upload part for customer profile



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

$sql = "select age from customer_edit where custID=$cusid";
$result = pg_query($session,$sql);
if($row=pg_fetch_row($result))
{
	//TODO : Image update
	$sql2 = "update customer_signup set email='$email',first_name='$f_name',last_name='$l_name',image='$path' where custID=$cusid ";
	$sql3 = "update customer_edit set address='$address', city='$city', pincode='$pincode', country='$country', phone_no='$phone_no', age='$age', gender='$gender' where custID='$cusid'";
	$re2=pg_query($session,$sql2);
	$re3 = pg_query($session,$sql3);
	if($re2 && $re3 >0)
	{
		$_SESSION['err']=5;
		header("Location:profile_customer.php");
	}
	else{
		$_SESSION['err']=6;
		header("Location:profile_customer.php");
	}
	
	
}
else
{
	$sql2 = "update customer_signup set email='$email',first_name='$f_name',last_name='$l_name' where custID=$cusid ";
	$sql3 = "insert into customer_edit (address, city, pincode,country, phone_no, age, gender, custID) values ('$address','$city','$pincode','$country','$phone_no',$age,'$gender',$cusid)";
	$re2=pg_query($session,$sql2);
	$re3 = pg_query($session,$sql3);
	if($re2 && $re3 >0)
	{
		$_SESSION['err']=5;
		header("Location:profile_customer.php");
	}
	else{
		$_SESSION['err']=6;
		header("Location:profile_customer.php");
	}
}






?>