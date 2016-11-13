<?php

/*
5 = update succesful
6 = update failed
7 = Not Signed In as Professional
8 = order confirmed!
9 = order update failed
10 = Order Rejected
11 = Order Reject Failed
12 = prod not set in kart
13 = categories missing chose a service
14 = no item selected
echo "<div class='alert alert-warning alert-dismissible' role='alert'>
  <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
  <strong>Warning!</strong> Better check yourself, you're not looking too good.
</div>"
*/


if(isset($_SESSION['err']))
{
	if($_SESSION['err'] == 0){
		
		echo "<div class='alert alert-success alert-dismissible' role='alert'>
  <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
  <strong>Signup Succesfull!</strong> 
</div>";
		
	}elseif($_SESSION['err'] == 1){
		
		echo "<div class='alert alert-warning alert-dismissible' role='alert'>
  <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
  <strong>Signup Failed!</strong>
</div>";
		
	}elseif($_SESSION['err'] == 2){
		echo "<div class='alert alert-success alert-dismissible' role='alert'>
  <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
  <strong>Login Succesfull!</strong> </div>";
		
	}elseif($_SESSION['err'] == 3){
		echo "<div class='alert alert-warning alert-dismissible' role='alert'>
  <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
  <strong>Login Failed!</strong>
</div>";
	}elseif($_SESSION['err'] ==4){
		echo "<div class='alert alert-warning alert-dismissible' role='alert'>
  <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
  <strong>Warning!</strong>Unauthorise Action, You are Not Logged In.
</div>";
	}elseif($_SESSION['err'] ==5){
		echo "<div class='alert alert-success alert-dismissible' role='alert'>
  <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
  <strong>Hooray!</strong> Profile Update Succesful.
</div>";
	}elseif($_SESSION['err'] ==6){
		echo "<div class='alert alert-warning alert-dismissible' role='alert'>
  <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
  <strong>Warning!</strong> Profile Update Failed!
</div>";
	}elseif($_SESSION['err'] ==7){
		echo "<div class='alert alert-warning alert-dismissible' role='alert'>
  <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
  <strong>Warning!</strong> Not Logged In As PROFESSIONAL!
</div>";
	}elseif($_SESSION['err'] ==8){
		echo "<div class='alert alert-success alert-dismissible' role='alert'>
  <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
  <strong>Hurray!</strong> Order confirmed!.
</div>";
	}elseif($_SESSION['err'] ==9){
		echo "<div class='alert alert-warning alert-dismissible' role='alert'>
  <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
  <strong>Warning!</strong> Order Failed!
</div>";

	}elseif($_SESSION['err'] ==10){
		echo "<div class='alert alert-warning alert-dismissible' role='alert'>
  <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
  <strong>Warning!</strong> Order Rejected!
</div>";
	}elseif($_SESSION['err'] ==11){
		echo "<div class='alert alert-warning alert-dismissible' role='alert'>
  <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
  <strong>Warning!</strong> Order Rejection Failed
</div>";
	}elseif($_SESSION['err'] ==12){
		echo "<div class='alert alert-warning alert-dismissible' role='alert'>
  <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
  <strong>Warning!</strong> No Product Selected!.
</div>";
	}elseif($_SESSION['err'] ==13){
		echo "<div class='alert alert-warning alert-dismissible' role='alert'>
  <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
  <strong>Warning!</strong> Choose A Category Of Service First
</div>";
	}elseif($_SESSION['err'] ==14){
		echo "<div class='alert alert-warning alert-dismissible' role='alert'>
  <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
  <strong>Warning!</strong> Kart Error!
</div>";
	}elseif($_SESSION['err'] ==15){
		echo "<div class='alert alert-warning alert-dismissible' role='alert'>
  <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
  <strong>Warning!</strong> Empty Review!
</div>";
	}elseif($_SESSION['err'] ==18){
		echo "<div class='alert alert-success alert-dismissible' role='alert'>
  <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
  <strong>Bye Bye!</strong> You Have Succesfully logout!
</div>";
	}
	
	$_SESSION['err']=null;
	
	
}









?>