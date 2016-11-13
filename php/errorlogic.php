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

session_start();
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
  <strong>Warning!</strong>Unauthorise Action..
</div>";
	}elseif($_SESSION['err'] ==5){
		echo "<div class='alert alert-warning alert-dismissible' role='alert'>
  <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
  <strong>Warning!</strong> Better check yourself, you're not looking too good.
</div>";
	}elseif($_SESSION['err'] ==6){
		echo "<div class='alert alert-warning alert-dismissible' role='alert'>
  <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
  <strong>Warning!</strong> Better check yourself, you're not looking too good.
</div>";
	}elseif($_SESSION['err'] ==7){
		echo "<div class='alert alert-warning alert-dismissible' role='alert'>
  <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
  <strong>Warning!</strong> Better check yourself, you're not looking too good.
</div>";
	}elseif($_SESSION['err'] ==8){
		echo "<div class='alert alert-warning alert-dismissible' role='alert'>
  <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
  <strong>Warning!</strong> Better check yourself, you're not looking too good.
</div>";
	}elseif($_SESSION['err'] ==9){
		echo "<div class='alert alert-warning alert-dismissible' role='alert'>
  <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
  <strong>Warning!</strong> Better check yourself, you're not looking too good.
</div>";
	}elseif($_SESSION['err'] ==10){
		echo "<div class='alert alert-warning alert-dismissible' role='alert'>
  <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
  <strong>Warning!</strong> Better check yourself, you're not looking too good.
</div>";
	}elseif($_SESSION['err'] ==11){
		echo "<div class='alert alert-warning alert-dismissible' role='alert'>
  <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
  <strong>Warning!</strong> Better check yourself, you're not looking too good.
</div>";
	}elseif($_SESSION['err'] ==12){
		echo "<div class='alert alert-warning alert-dismissible' role='alert'>
  <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
  <strong>Warning!</strong> Better check yourself, you're not looking too good.
</div>";
	}elseif($_SESSION['err'] ==13){
		echo "<div class='alert alert-warning alert-dismissible' role='alert'>
  <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
  <strong>Warning!</strong> Better check yourself, you're not looking too good.
</div>";
	}elseif($_SESSION['err'] ==14){
		echo "<div class='alert alert-warning alert-dismissible' role='alert'>
  <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
  <strong>Warning!</strong> Better check yourself, you're not looking too good.
</div>";
	}
	
}









?>