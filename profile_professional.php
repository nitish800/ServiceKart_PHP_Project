<?php
session_start();
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

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
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

if(isset($_SESSION['proid'])){	
	
echo "<div class='container'>
    <div class='col-md-14'>
<div class='panel panel-default'>
  <div class='panel-heading'>  <h4 >Orders</h4></div>
   <div class='panel-body'>

    <table class='table table-striped custab'>
    <thead>
        <tr>
            <th>ID</th>
            <th>Order date</th>
            <th>Customer Name</th>
			<th>Customer Address</th>
			<th>Customer Phone No</th>
            <th class='text-center'>Action</th>
        </tr>
    </thead>";
	
	$proid = $_SESSION['proid'];
	$sql = "select orderID,order_date,customer_id,order_status from customer_orders where proid=$proid";
	$result = pg_query($session,$sql);
	while($row = pg_fetch_row($result))
		{
			
            echo "<tr>";
            echo  "<td>".$row[0]."</td>";
			echo  "<td>".$row[1]."</td>";	
			$sql2 = "Select first_name,last_name from customer_signup where custID=$row[2]";
			$sql3 = "select address,city,pincode,phone_no from customer_edit where custID=$row[2]";
			$ret4=pg_query($session,$sql2);
			$ret5=pg_query($session,$sql3);
			if($row2 = pg_fetch_row($ret4))
			echo  "<td>".$row2[0]." ".$row2[1]."</td>";
			if($row3 = pg_fetch_row($ret5)){
			 echo "<td>".$row3[0]." ".$row3[1]." ".$row3[2]."</td>";
			 echo  "<td>".$row3[3]."</td>";
             
			}
			if($row[3] == 'Confirmed')
			{
				echo  "<td><span class='label label-success'>Confirmed!</span></td>";
			}elseif($row[3] == 'Rejected')
			{
				echo  "<td><span class='label label-danger'>Rejected!</span></td>";
				
			}elseif($row[3]=='Delivered')
			{
			echo  "<td><span class='label label-info'>Delivered!</span></td>";	
			}
			else{
             echo   "<td class='text-center'><a class='btn btn-info btn-xs' href='accept.php?orderid=".$row[0]."'><span class='glyphicon glyphicon-edit'></span> Accept</a> <a href='reject.php?orderid=".$row[0]."' class='btn btn-danger btn-xs'><span class='glyphicon glyphicon-remove'></span> Reject</a></td>";
			}
		   echo "</tr>";
		}
            
	}       
    echo "</table>
    </div>
	</div>
	</div>
	</div>";

?>
    <!-- Page Content -->
    <div class="container">

        
	<div class="row">
		<div class="col-md-12 ">
<div class="panel panel-default">
  <div class="panel-heading">  <h4 >Profile</h4></div>
   <div class="panel-body">
        <?php
if(isset($_REQUEST['prod'])  || isset($_SESSION['proid'])){
if(isset($_REQUEST['prod']))
{
$proid = $_REQUEST['prod'];
}

$s=0;
$sk=0;
$sql2 = "select first_name,last_name from professional_signup where proID=$proid";
$re2=pg_query($session,$sql2);
if($row=pg_fetch_row($re2))
{$sk=1;}
$sql3 = "select photo_loc,experience,category from professional_profile where proID=$proid";
$re3=pg_query($session,$sql3);
if($row2=pg_fetch_row($re3))
{
	
	$s=1;
}
}
else{
	$sk=0;
	$s=0;
}
 ?>     
    <div class="box box-info">
        
            <div class="box-body">
                     <div class="col-sm-6">
                     <div  align="center"> <img alt="User Pic" src="<?php if($s==1){echo $row2[0];}else{ echo "https://x1.xingassets.com/assets/frontend_minified/img/users/nobody_m.original.jpg"; } ?>" id="profile-image1" class="img-circle img-responsive"> 
                
       </div>
              
              <br>
    
              <!-- /input-group -->
            </div>
            <div class="col-sm-6">
            <h4 style="color:#00b1b1;"><?php if($sk==1){echo $row[0]." ".$row[1]; }else{echo "none";} ?></h4></span>
                         
            </div><?php if(isset($_SESSION['proid'])) 
			{echo "<div class='col-md-4'>
  <a href='edit_profile_professionals.php' class='btn btn-success'><span class='glyphicon glyphicon-edit'></span> Edit</a>
    
			</div>"; }

else{
	 if(!isset($_SESSION['proid']) && isset($_REQUEST['prod'])){
	echo "<a href='kart.php?prod=".$_REQUEST['prod']."'  class='btn btn-success'>  <span class='glyphicon glyphicon-shopping-cart'></span> Add To Cart</a> ";
	}
	if(!isset($_SESSION['proid']) && isset($_REQUEST['prod']) && isset($_SESSION['cusid'])){
	echo "   <a href='reviewbox.php?prod=".$_REQUEST['prod']."'  class='btn btn-success'>  <span class='glyphicon glyphicon-edit'></span> Write A Review</a>";
	}
	
}			?>
            <div class="clearfix"></div>
            <hr style="margin:5px 0 5px 0;">
    
              
<div class="col-sm-5 col-xs-6 tital " >First Name:</div><div class="col-sm-7 col-xs-6 "><?php if($sk==1){ echo $row[0];}else{echo "none";}  ?></div>
     <div class="clearfix"></div>
<div class="bot-border"></div>

<div class="col-sm-5 col-xs-6 tital " >Last Name:</div><div class="col-sm-7"> <?php if($sk==1){ echo $row[1];}else{echo "none";}  ?></div>
  <div class="clearfix"></div>
<div class="bot-border"></div>

<div class="col-sm-5 col-xs-6 tital " >Skill</div><div class="col-sm-7"><?php
	if($s==1)
	{
	  $sqlcat = "select category from categories where catID=$row2[2]";
	  $ret=pg_query($session,$sqlcat);
	  if($rowcat=pg_fetch_row($ret))
	  {
		  
		  echo $rowcat[0];
	  }
	}else{echo "none";}
	  ?></div>

  <div class="clearfix"></div>
<div class="bot-border"></div>

<div class="col-sm-5 col-xs-6 tital " >Experience</div><div class="col-sm-7"><?php if($s==1){echo $row2[1];}else{ echo "None"; } ?></div>

  <div class="clearfix"></div>
<div class="bot-border"></div>

            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        </div>
</div> 
    </div>
	
</div>

<div class="comment-tabs">
            <ul class="nav nav-tabs" role="tablist">
                <li class="active"><a href="#comments-logout" role="tab" data-toggle="tab"><h4 class="reviews text-capitalize">Reviews	</h4></a></li>
                </ul>            
            <div class="tab-content">
			<ul class="media-list">
<?php
if(isset($_REQUEST['prod'])){
$proid = $_REQUEST['prod'];
}elseif(isset($_SESSION['proid'])){
		$proid =$_SESSION['proid']; 
	}

$sql = "select stars,comment,from_cusID,review_date from rating where to_proID=$proid";
	$result = pg_query($session,$sql);
	$cout = 0;
		while($row = pg_fetch_row($result))
		{   $cout=1;
				$sqlforcust = "select image,first_name,last_name from customer_signup where custID = $row[2]";
				$custreturn = pg_query($session,$sqlforcust);
			
			
		if($custdata=pg_fetch_row($custreturn))
		{
			echo "<li class='media'>
                        <a class='pull-left' href='#'>
                          <img id='profile-image3' class='media-object img-circle' src='".$custdata[0]."' alt='profile'>
                        </a>
                        <div class='media-body'>
                          <div class='well well-lg'>
                              <h4 class='media-heading text-uppercase reviews'>".$custdata[1]." ".$custdata[2]." "." </h4>
							  <div class='ratings'>";
                               
                                echo "<p>";
			$temp = $row[0];
			while($temp>0 && $temp[0]<6)
								{
                                  echo  "<span class='glyphicon glyphicon-star'></span>";
								  $temp -=1;
								}   
                               echo "</p>";
						echo "</div>
                              <ul class='media-date text-uppercase reviews list-inline'>
                                <li class='aaaa'>".$row[3]."</li>
                              </ul>
                              <p class='media-comment'>".$row[1]."</p>
							</div>
							</div>";
                        

}

}
if($cout==0){	
	echo "<p class='media-comment'>No Review Yet!</p>";
} 
}
?>                   
                    </ul> 
                </div>






  
    <script>
              $(function() {
    $('#profile-image1').on('click', function() {
        $('#profile-image-upload').click();
    });
});       
              </script> 
</div>

            
    <!-- /.container -->

    <!-- jQuery Version 1.11.1 -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
	<style>              input.hidden {
    position: absolute;
    left: -9999px;
}

#profile-image1 {
    cursor: pointer;
  
     width: 100px;
    height: 100px;
	border:2px solid #03b1ce ;}
	
#profile-image3 {
    cursor: pointer;
  
     width: 100px;
    height: 100px;
	margin-top:30%;
	border:2px solid #03b1ce ;}
	
.tital{ font-size:16px; font-weight:500;}
	 .bot-border{ border-bottom:1px #f8f8f8 solid;  margin:5px 0  5px 0}




.page-header { position: relative; }
.reviews {
    color: #555;    
    font-weight: bold;
    margin: 10px auto 20px;
}
.notes {
    color: #999;
    font-size: 12px;
}
.media .media-object { max-width: 100px; }
.media-body { position: relative; }
.media-date { 
    position: absolute; 
    right: 25px;
    top: 25px;
}
.media-date li { padding: 0; }
.media-date li:first-child:before { content: ''; }
.media-date li:before { 
    content: '.'; 
    margin-left: -2px; 
    margin-right: 2px;
}
.media-comment { margin-bottom: 20px; }
.media-replied { margin: 0 0 20px 50px; }
.media-replied .media-heading { padding-left: 6px; }

.btn-circle {
    font-weight: bold;
    font-size: 12px;
    padding: 6px 15px;
    border-radius: 20px;
}
.btn-circle span { padding-right: 6px; }
.embed-responsive { margin-bottom: 20px; }
.tab-content {
    padding: 50px 15px;
    border: 1px solid #ddd;
    border-top: 0;
    border-bottom-right-radius: 4px;
    border-bottom-left-radius: 4px;
}
 .navbar-form .input-group .input-group-btn {
    width:1%;}
	
	
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

</style>
</body>

</html>
