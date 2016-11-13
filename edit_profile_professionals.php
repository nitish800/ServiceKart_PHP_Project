<?php
session_start();
if(!isset($_SESSION['proid']))
{
	$_SESSION['err'] = 4;
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


?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Service Kart - Hire Expert On The GO!</title>
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <style>
    body {
        padding-top: 70px;
        /* Required padding for .navbar-fixed-top. Remove if using .navbar-static-top. Change if height of navigation changes. */
    }
	.navbar-inverse .navbar-nav > li > a {
    color: #ffffff;
}
.navbar-inverse {
    background-color: #009688;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.26);
	border-color:#009688;
}
.h3, h3 {
font-size: 29px;
font-family: "Comic Sans MS";
}
    </style>
	<script>
function showresult(str) {
  if (str.length<2) {
    document.getElementById("livesearch").innerHTML="";
    return;
  }
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("livesearch").innerHTML=this.responseText;
    }
  }
  xmlhttp.open("GET","livesearch.php?q="+str,true);
  xmlhttp.send();
}
</script>
<style>
#livesearch
{
    position: absolute;
    width: auto; 
    background: white;
    
    max-height: 200px;
    overflow-y: auto;
    border: 1px solid gray;
	padding-left: 10px;

    /*This is relative to the navbar now*/
    left: 0;
    right: 0;
    top: 33px;
}
.form-control{
font-size: 16px;
}
.navbar-brand {
	padding-top:10px;
    padding-bottom: 0px;
    padding-left: 1px;
    padding-right: 0px;
}
</style>


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                
            </div>
			
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                   <!-- for search bar-->
				   <a class="navbar-brand" href="#">
        <img alt="Brand" src="favicon.ico">
				   <li class="dropdown dropdown-lg">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">Services <b class="caret"></b></a>
				
				<ul class="dropdown-menu dropdown-menu-lg row">
					<li class="col-sm-4">
						<ul>
							<li class="dropdown-header">Health & Fitness</li>
							<li><a href="display_cat_pro.php?catid=1">Yoga Trainer At Home</a></li>
							<li><a href="display_cat_pro.php?catid=2">Salon At Home</a></li>
							<li><a href="display_cat_pro.php?catid=3">Fitness Trainer At Home</a></li>
							<li><a href="#">Dietician</a></li>
							<li><a href="display_cat_pro.php?catid=4">Physiotheraphy At Home</a></li>
							<li><a href="display_cat_pro.php?catid=1">Yoga Classes At Studio</a></li>
							<li class="divider"></li>
							<li class="dropdown-header">Maintenance</li>
							<li><a href="display_cat_pro.php?catid=5">AC Service And Repair</a></li>
							<li><a href="display_cat_pro.php?catid=6">Laptop Repair</a></li>
							<li><a href="display_cat_pro.php?catid=7">Mobile Repair</a></li>
							<li><a href="display_cat_pro.php?catid=8">Doorstep Laundry</a></li>
							<li><a href="display_cat_pro.php?catid=9">TV Repair</a></li>
							<li><a href="display_cat_pro.php?catid=10">Water Purifier Repair</a></li>
						</ul>
					</li>
					<li class="col-sm-4">
						<ul>
							<li class="dropdown-header">Wedding & Events</li>
							<li><a href="display_cat_pro.php?catid=11">Wedding Photographer</a></li>
							<li><a href="display_cat_pro.php?catid=12">Birthday Party planner</a></li>
							<li><a href="display_cat_pro.php?catid=13">Bride Makeup Artist</a></li>
							<li><a href="display_cat_pro.php?catid=14">Birthday Party Decorator</a></li>
							<li><a href="display_cat_pro.php?catid=15">DJ</a></li>
							<li><a href="display_cat_pro.php?catid=16">Bartender</a></li>
							<li class="divider"></li>
							<li class="dropdown-header">Home Care</li>
							<li><a href="display_cat_pro.php?catid=17">Interior Designer</a></li>
							<li><a href="display_cat_pro.php?catid=18">Carpenter</a></li>
							<li><a href="display_cat_pro.php?catid=19">Plumber</a></li>
							<li><a href="display_cat_pro.php?catid=20">Electrician</a></li>
							<li><a href="display_cat_pro.php?catid=21">Pest Control</a></li>
							<li><a href="display_cat_pro.php?catid=22">Construction & Renovation</a></li>
						</ul>
					</li>
					<li class="col-sm-4">
						<ul>
							<li class="dropdown-header">Academic tutor</li>
							<li><a href="display_cat_pro.php?catid=23">Class I-V</a></li>
							<li><a href="display_cat_pro.php?catid=23">Class VI-VIII</a></li>
							<li><a href="display_cat_pro.php?catid=23">Class IX-X</a></li>
							<li class="divider"></li>
							<li class="dropdown-header">Hobbies & Interest</li>
							<li><a href="display_cat_pro.php?catid=24">Guitar Lesson at Home</a></li>
							<li><a href="display_cat_pro.php?catid=25">Zumba Fitness Dance</a></li>
							<li><a href="display_cat_pro.php?catid=26">Bollywood Dance Class</a></li>
						</ul>
					</li>
					
				</ul>
				
			</li>
                </ul>
				<div class="col-sm-6 col-md-6">
        <form class="navbar-form" role="search">
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Search"  onkeyup="showresult(this.value)" name="q" autocomplete='off'>
			<ul id="livesearch"></ul>
			<div class="input-group-btn"><button class="btn btn-default"><i class="glyphicon glyphicon-search"></i></button>
</div></div></form></div>
	<ul class="nav navbar-nav navbar-right">
	<?php
	if(!isset($_SESSION['proid']))
	{
		echo "<li><a href='pro_login.html'><span class='glyphicon glyphicon-user'></span> Become a Professional</a></li>";
	}
	else
	{
		$proid = $_SESSION['proid'];
		$sql = "select first_name,last_name from professional_signup where proID = $proid" ;
		$result = pg_query($session,$sql);
		if($row=pg_fetch_row($result))
		{
			echo "<li> <div class='dropdown nav navbar-nav'>
  <button class='btn btn-default navbar-btn' type='button' id='dropdownMenu1' data-toggle='dropdown' ><span class='glyphicon glyphicon-user'></span> ".$row[0]." ".$row[1]."</a>
    <span class='caret'>  </span>
  </button>
  <ul class='dropdown-menu' aria-labelledby='dropdownMenu1'>
    <li><a href='profile_professional.php'><span class='glyphicon glyphicon-user'></span> Profile</a></li>
    <li><a href='edit_profile_professionals.php'><span class='glyphicon glyphicon-edit'></span> Edit Profile</a></li>
    <li role='separator' class='divider'></li>
    <li><a href='logout.php'><span class='glyphicon glyphicon-log-out'></span> Logout</a></li>
  </ul>
</div></li>";
			
			
		}
	}
	
	?>
	
	
	<?php
	
	if(!isset($_SESSION['cusid']))
	{
		echo "<li><a href='cus_login.html'><span class='glyphicon glyphicon-log-in'></span> Login/signup</a></li>";
	}
	else
	{
		$cusid = $_SESSION['cusid'];
		$sql = "select first_name,last_name from customer_signup where custID = $cusid" ;
		$result = pg_query($session,$sql);
		if($row=pg_fetch_row($result))
		{
			
			echo "<li> <div class='dropdown nav navbar-nav'>
  <button class='btn btn-default navbar-btn' type='button' id='dropdownMenu1' data-toggle='dropdown' ><span class='glyphicon glyphicon-user'></span> ".$row[0]." ".$row[1]."</a>
    <span class='caret'>  </span>
  </button>
  <ul class='dropdown-menu' aria-labelledby='dropdownMenu1'>
    <li><a href='profile_customer.php'><span class='glyphicon glyphicon-user'></span> Profile</a></li>
    <li><a href='edit_profile_customer.php'><span class='glyphicon glyphicon-edit'></span> Edit Profile</a></li>
    <li role='separator' class='divider'></li>
    <li><a href='logout.php'><span class='glyphicon glyphicon-log-out'></span> Logout</a></li>
  </ul>
</div></li>";
			
		}
		
	}
	
	?>
	<li><a href="kart.php">  <span class="glyphicon glyphicon-shopping-cart"></span> Shopping Cart</a></li>
	</ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
	<?php include("errorlogic.php"); ?>
<?php
 //to display old data in form if already exists
$flag = 0;
$proid = $_SESSION['proid'];
$sql = "select age from professional_profile where proID=$proid";
$result = pg_query($session,$sql);
if($row=pg_fetch_row($result))
{ $flag=1;
$sql3 = "select address, city, pincode,country, phone_no, age, gender, experience,Expected_salary,qualification,category,fee from professional_profile where proID=$proid";	
$re3 = pg_query($session,$sql3);

if($row3 = pg_fetch_row($re3)){$flag=1;}	
}
$sql2 = "select email,first_name,last_name from professional_signup where proID=$proid";
$re2=pg_query($session,$sql2);
if($row5 = pg_fetch_row($re2)){}

?>	
	

	
<div class="container">
<div class="row">
<div class="col-md-10 ">
<form class="form-horizontal" method="post" action="edit_pro_profile.php" enctype="multipart/form-data">
<fieldset>

<!-- Form Name -->
<legend>User profile form requirement</legend>

<!-- Text input-->




<div class="form-group">
  <label class="col-md-4 control-label" for="Name">First Name *</label>  
  <div class="col-md-4">
 <div class="input-group">
       <div class="input-group-addon">
        <i class="fa fa-user">
        </i>
       </div>
       <input id="Name (Full name)" name="fname" type="text" value="<?php echo $row5[1]; ?>" pattern="[A-Za-z]+" required title="Enter your First name"  x-moz-errormessage="Enter Your First Name"
 class="form-control input-md">
      </div>

    
  </div>

  
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="Name">Last Name *</label>  
  <div class="col-md-4">
 <div class="input-group">
       <div class="input-group-addon">
        <i class="fa fa-user">
        </i>
       </div>
       <input id="Name (Full name)" name="lname" type="text" value="<?php echo $row5[2]; ?>" pattern="[A-Za-z]+" required title="Enter your last name"  x-moz-errormessage="Enter Your last Name" class="form-control input-md">
      </div>

    
  </div>

  
</div>

<!-- File Button --> 
<div class="form-group">
  <label class="col-md-4 control-label" for="Upload photo">Upload photo *</label>
  <div class="col-md-4">
    <input id="Upload photo" name="photo" class="input-file" type="file" required title="Upload Your Photo"  x-moz-errormessage="Upload Your Photo">
  </div>
</div>

<!-- Text input-->

<!-- Multiple Radios (inline) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="Gender">Gender *</label>
  <div class="col-md-4"> 
    <label class="radio-inline" for="Gender-0">
      <input type="radio" name="gender" id="Gender-0" value="male" checked="checked">
      Male
    </label> 
    <label class="radio-inline" for="Gender-1">
      <input type="radio" name="gender" id="Gender-1" value="female">
      Female
    </label> 
      </div>
</div>
<!-- age -->
<div class="form-group">
  <label class="col-md-4 control-label" for="Primary Occupation">Age *</label>  
  <div class="col-md-4">
  <div class="input-group">
       <div class="input-group-addon">
     <i class="fa fa-briefcase"></i>
        
       </div>
      <input id="Primary Occupation" name="age" type="text" value="<?php if($flag==1){echo $row3[5];}else{echo "age";} ?>" pattern="[0-9]+" required title="Enter Your Age" x-moz-errormessage="Enter Your Age" class="form-control input-md">
      </div>
  
    
  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label col-xs-12" for="Permanent Address">Permanent Address *</label>  
  <div class="col-md-4  col-xs-6">
  <input id="Permanent Address" name="address" type="text" value="<?php if($flag==1){echo $row3[0];}else{echo "address";} ?>" required title="Enter a Address" x-moz-errormessage="Enter a address" class="form-control input-md ">
  </div>
  
  <div class="col-md-2  col-xs-4">
  <input id="Permanent Address" name="city" type="text" value="<?php if($flag==1){echo $row3[1];}else{echo "city";} ?>" pattern="[A-Za-z]+" required title="Enter a City name" x-moz-errormessage="Enter Your City Name" class="form-control input-md ">
  </div>

  <div class="col-md-2 col-xs-4">

  <input id="Permanent Address" name="pincode" type="text" value="<?php if($flag==1){echo $row3[2];}else{echo "pincode";} ?>" pattern="^\d{6}$" required title="Enter a pincode" x-moz-errormessage="Enter a Pincode" class="form-control input-md ">
  </div>

</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="Permanent Address"></label>  
  <div class="col-md-2  col-xs-4">
  <input id="Permanent Address" name="country" type="text" value="<?php if($flag==1){echo $row3[3];}else{echo "Country";} ?>" pattern="[A-Za-z]+" required title="Enter a country name" x-moz-errormessage="Enter Your Country Name" class="form-control input-md ">
  
  </div>  
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Primary Occupation">Primary Occupation *</label>  
  <div class="col-md-4">
  <div class="input-group">
       <div class="input-group-addon">
     <i class="fa fa-briefcase"></i>
        
       </div>
      <select id="Primary Occupation" name="occupation" type="text" class="form-control input-md">
	  <?php
	  $sqlcat = "select catID,category from categories";
	  $ret=pg_query($session,$sqlcat);
	  while($rowcat=pg_fetch_row($ret))
	  {
		  
		  echo "<option value='".$rowcat[0]."' >".$rowcat[1]."</option>";
	  }
	  
	  ?>
	  </select>
      </div>
  
    
  </div>
</div>

<!-- Text input-->

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Skills">Qualification *</label>  
  <div class="col-md-4">
  <div class="input-group">
       <div class="input-group-addon">
     <i class="fa fa-graduation-cap"></i>
        
       </div>
     <select id="Skills" name="qualification" type="text" class="form-control input-md">
	    <option value="Below Metric">Below Metric</option>
		<option value="Metric Pass">Metric Pass</option>
		<option value="Post Metric Pass">Post Metric Pass</option>
		<option value="Under Graduate">Under Graduate</option>
		<option value="Graduate">Graduate</option>
		<option value="post Graduate">Post Graduate</option>
	</select>
      </div>
 
    

  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Phone number ">Phone number *</label>  
  <div class="col-md-4">
  <div class="input-group">
       <div class="input-group-addon">
     <i class="fa fa-phone"></i>
        
       </div>
    <input id="Phone number " name="ph_no" type="text" value="<?php if($flag==1){echo $row3[4];}else{echo "Phone NO";} ?>" pattern="^\d{10}$" required title="Enter a valid 10 digit phone no" x-moz-errormessage="Enter Your Phone No" class="form-control input-md">
    
      </div>
      
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Email Address">Email Address *</label>  
  <div class="col-md-4">
  <div class="input-group">
       <div class="input-group-addon">
     <i class="fa fa-envelope-o"></i>
        
       </div>
    <input id="Email Address" name="email" type="text" value="<?php if($flag==1){echo $row5[0];}else{echo "email";} ?>" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required title="Enter a valid e-mail address" x-moz-errormessage="Enter a Valid e-mail Address" class="form-control input-md">
    
      </div>
  
  </div>
</div>

<!-- Text input-->

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Available Service Area">Expected Salary *</label>  
  <div class="col-md-4">
  <div class="input-group">
       <div class="input-group-addon">
     <i class="fa fa-street-view"></i>
        
       </div>
   <input id="Available Service Area" name="exp_salary" type="text" value="<?php if($flag==1){echo $row3[8];}else{echo "In Rs";} ?>" pattern="[0-9]+" required title="Enter Expected Salary" x-moz-errormessage="Enter Expected Salary" class="form-control input-md">
    
      </div>
  
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Citizenship No.">Minimum Fees Per Service *</label>  
  <div class="col-md-4">
  <div class="input-group">
       <div class="input-group-addon">
     <i class="fa fa-sticky-note-o"></i>
        
       </div>
   <input id="Citizenship No." name="fee" type="text" value="<?php if($flag==1){echo $row3[11];}else{echo "In Rs";} ?>" pattern="[0-9]+" required title="Enter Fees" x-moz-errormessage="Enter Fees" class="form-control input-md">
    
      </div>
 
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Working Experience (time period)">Working Experience (time period) *</label>  
  <div class="col-md-4">
  <div class="input-group">
       <div class="input-group-addon">
     <i class="fa fa-clock-o"></i>
        
       </div>
    <input id="Working Experience (time period)" name="experience" type="text" value="<?php if($flag==1){echo $row3[7];}else{echo "Working Experience";} ?>" pattern="[0-9]+" required title="Enter Your Working Experience" x-moz-errormessage="Enter Your Working Experience" class="form-control input-md">
    
    
      </div>
 
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="Upload photo">Upload Adharcard *</label>
  <div class="col-md-4">
    <input id="Upload photo" name="ip" class="input-file" type="file" required>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="Upload photo">Upload Address Proof *</label>
  <div class="col-md-4">
    <input id="Upload photo" name="ap" class="input-file" type="file" required>
  </div>
</div>

<!-- Textarea -->


<div class="form-group">
  <label class="col-md-4 control-label" ></label>  
  <div class="col-md-4">
  <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-thumbs-up"></span> Submit</button>
  <button type="reset" class="btn btn-danger" value=""><span class="glyphicon glyphicon-remove-sign"></span> Clear</button>
    
  </div>
</div>

</fieldset>
</form>
</div>
<div class="col-md-2 hidden-xs">
<img src="http://websamplenow.com/30/userprofile/images/avatar.jpg" class="img-responsive img-thumbnail ">
  </div>

    </div>

            
    <!-- /.container -->

    <!-- jQuery Version 1.11.1 -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
	 
	<style>
.dropdown-menu-lg {
  width: 600px;
  padding: 20px 0px;
}
.dropdown-menu-lg > li > ul {
  padding: 0;
  margin: 0;
}
.dropdown-menu-lg > li > ul > li {
  list-style: none;
}
.dropdown-menu-lg > li > ul > li > a {
  display: block;
  padding: 3px 20px;
  clear: both;
  font-weight: normal;
  line-height: 1.428571429;
  color: #333333;
  white-space: normal;
}
.dropdown-menu-lg > li ul > li > a:hover,
.dropdown-menu-lg > li ul > li > a:focus {
  text-decoration: none;
  color: #262626;
  background-color: #f5f5f5;
}
.dropdown-menu-lg .disabled > a,
.dropdown-menu-lg .disabled > a:hover,
.dropdown-menu-lg .disabled > a:focus {
  color: #999999;
}
.dropdown-menu-lg .disabled > a:hover,
.dropdown-menu-lg .disabled > a:focus {
  text-decoration: none;
  background-color: transparent;
  background-image: none;
  filter: progid:DXImageTransform.Microsoft.gradient(enabled = false);
  cursor: not-allowed;
}
.dropdown-menu-lg .dropdown-header {
  color: #428bca;
  font-size: 18px;
}
@media (max-width: 768px) {
  .dropdown-menu-lg {
    margin-left: 0 ;
    margin-right: 0 ;
  }
  .dropdown-menu-lg > li {
    margin-bottom: 30px;
  }
  .dropdown-menu-lg > li:last-child {
    margin-bottom: 0;
  }
  .dropdown-menu-lg .dropdown-header {
    padding: 3px 15px !important;
  }
}
	.navbar-form .input-group .input-group-btn {
    width:1%;}

input:valid
{
 border:solid green 1px;
}
input:invalid 
{
    border:1px solid red; 
}
input:required 
{
    border:1px solid #00a2d1; 
}	</style>
	
</body>

</html>
