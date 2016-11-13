<?php
session_start();
if(!isset($_SESSION['proid']))
{
	$_SESSION['err'] = 4;
	header("Location:homepage.php");
}


$photo = $_REQUEST["photo"];
$fi = $_FILES["photo"]["name"];   
$path = "proprofileimage/".$fi; 
move_uploaded_file($_FILES["photo"]["tmp_name"],$path); 

$ap = $_REQUEST["ap"];
$fi2 = $_FILES["ap"]["name"];   
$path2 = "addressproof/".$fi2; 
move_uploaded_file($_FILES["ap"]["tmp_name"],$path2); 

$ip = $_REQUEST["ip"];
$fi3 = $_FILES["ip"]["name"];   
$path3 = "identityproof/".$fi3; 
move_uploaded_file($_FILES["ip"]["tmp_name"],$path3);



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
$proid= $_SESSION['proid'];
$experience = $_REQUEST['experience'];
$Expected_salary = $_REQUEST['exp_salary'];
$qualification = $_REQUEST['qualification'];
$category = $_REQUEST['occupation'];
$fee = $_REQUEST['fee'];


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

$sql = "select age from professional_profile where proID=$proid";
$result = pg_query($session,$sql);
if($result)
{
	
}else{
	echo "Database error";
}
if($row=pg_fetch_row($result))
{
	$sql2 = "update professional_signup set email='$email',first_name='$f_name',last_name='$l_name' where proID=$proid ";
	$sql3 = "update professional_profile set address='$address', city='$city', pincode='$pincode', country='$country', phone_no='$phone_no', age=$age, gender='$gender',experience=$experience,photo_loc='$path', Expected_salary='$Expected_salary', qualification='$qualification', category=$category,fee=$fee where proID=$proid";
	$re2=pg_query($session,$sql2);
	$re3 = pg_query($session,$sql3);
	if($re2>0 && $re3 >0)
	{
		$_SESSION['err']=5;
		header("Location:profile_professional.php");
	}
	else{
		$_SESSION['err']=6;
		header("Location:profile_professional.php");
	}
	
	
}
else
{
	$sql2 = "update professional_signup set email='$email',first_name='$f_name',last_name='$l_name' where proID=$proid ";
	$sql3 = "insert into professional_profile (address,city,pincode,country,phone_no,age,gender,proID,experience,Expected_salary,qualification,category,fee,photo_loc,identity_proof,address_proof) values ('$address','$city','$pincode','$country','$phone_no',$age,'$gender',$proid,$experience,$Expected_salary,'$qualification',$category,$fee,'$path','$path3','$path2')";
	$re2=pg_query($session,$sql2);
	$re3 = pg_query($session,$sql3);
	if($re2 >0 && re3 >0)
	{
		$_SESSION['err']=5;
		header("Location:profile_professional.php");
	}
	else{
		$_SESSION['err']=6;
		header("Location:profile_professional.php");
	}
}






?>