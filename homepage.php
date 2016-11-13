<!DOCTYPE html>
<html lang="en">
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
</div>";}
?>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Get Professional Service At Low Price On The GO">
    <meta name="author" content="Nitish Shah,Prakarity Nandi,">

    <title>Service Kart - Hire Expert On The GO!</title>
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/shop-homepage.css" rel="stylesheet">

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
.thumbnail {
    padding: 0;
    box-shadow: 8px 8px 5px rgba(0, 0, 0, 0.26);
}
.carousel {
    position: relative;
    box-shadow: 8px 8px 5px rgba(0, 0, 0, 0.26);
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

<body bgcolor="#b0bec5">

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
							<a class="navbar-brand" href="#">
        <img alt="Brand" src="favicon.ico">
                   <!-- for search bar-->
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
		echo "<li><a href='pro_login.html'><span class='glyphicon glyphicon-user'></span> Become a Professional</a></li><li><a href='kart.php'><span class='glyphicon glyphicon-shopping-cart'></span> Shopping Cart</a></li>";
	}
	else
	{
		$proid = $_SESSION['proid'];
		$sql = "select first_name,last_name from professional_signup where proID = $proid" ;
		$result = pg_query($session,$sql);
		if($row=pg_fetch_row($result))
		{
			echo " <li> <div class='dropdown nav navbar-nav'>
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
			
			echo " <li> <div class='dropdown nav navbar-nav'>
  <button class='btn btn-default navbar-btn' type='button' id='dropdownMenu1' data-toggle='dropdown' ><span class='glyphicon glyphicon-user'></span> ".$row[0]." ".$row[1]."</a>
    <span class='caret'></span>
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
	
	</ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
<?php include("errorlogic.php"); ?>
    <!-- Page Content -->
    <div class="container">

        <div class="row">

            
            <div class="col-lg-12">

                <div class="row carousel-holder">

                    <div class="col-lg-12">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img class="slide-image" src="image/img.jpg"" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="image/img2.png"" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="image/img3.jpg"" alt="">
                                </div>
                            </div>
                            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>
                    </div>

                </div>

                <div class="row">
<div class="col-lg-12"><h3 id="1"><u> Health And Fitness</u><br/>
<h3></div>
                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <a href="display_cat_pro.php?catid=1"><img src="image/yoga.jpg" alt=""></a>
                            <div class="caption">
                                <!--<h4 class="pull-right">$24.99</h4>-->
                                <h4><a href="display_cat_pro.php?catid=1">Yoga Trainer At Home</a></h4>
								<br><strong> NO.OF Experts:</strong> <?php $sql1 = "select count(proID) from professional_profile where category=1";$re=pg_query($session,$sql1);if($row=pg_fetch_row($re)){if($row[0] > 0){echo "$row[0]";}else{echo "Comming Soon..";}} ?>
								</div>
                                                   </div>
                    </div>
<div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <a href="display_cat_pro.php?catid=2"><img src="image/salon.jpg" alt=""></a>
                            <div class="caption">
                                <!--<h4 class="pull-right">$24.99</h4>-->
                                <h4><a href="display_cat_pro.php?catid=2">Salon At Home</a>
                                </h4>
                                <br><strong> NO.OF Experts:</strong> <?php $sql1 = "select count(proID) from professional_profile where category=2";$re=pg_query($session,$sql1);if($row=pg_fetch_row($re)){if($row[0] > 0){echo "$row[0]";}else{echo "Comming Soon..";}} ?>
                            </div>
                           <!-- <div class="ratings">
                                <p class="pull-right">15 reviews</p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                </p>
                            </div>-->
                        </div>
                    </div>
<div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <a href="display_cat_pro.php?catid=3"><img src="image/fitness.jpg" alt=""></a>
                            <div class="caption">
                                <!--<h4 class="pull-right">$24.99</h4>-->
                                <h4><a href="display_cat_pro.php?catid=3">Fitness Trainer At Home</a>
                                </h4>
                                <br><strong> NO.OF Experts:</strong> <?php $sql1 = "select count(proID) from professional_profile where category=3";$re=pg_query($session,$sql1);if($row=pg_fetch_row($re)){if($row[0] > 0){echo "$row[0]";}else{echo "Comming Soon..";}} ?>
                            </div>
                           <!-- <div class="ratings">
                                <p class="pull-right">15 reviews</p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                </p>
                            </div>-->
                        </div>
                    </div>
<div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <a href="display_cat_pro.php?catid=3"><img src="image/diet.jpg" alt=""></a>
                            <div class="caption">
                                <!--<h4 class="pull-right">$24.99</h4>-->
                                <h4><a href="display_cat_pro.php?catid=3">Dietician</a>
                                </h4>
                                <br><strong> NO.OF Experts:</strong> <?php $sql1 = "select count(proID) from professional_profile where category=3";$re=pg_query($session,$sql1);if($row=pg_fetch_row($re)){if($row[0] > 0){echo "$row[0]";}else{echo "Comming Soon..";}} ?>:
                            </div>
                           <!-- <div class="ratings">
                                <p class="pull-right">15 reviews</p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                </p>
                            </div>-->
                        </div>
                    </div>
<div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                           <a href="display_cat_pro.php?catid=4"><img src="image/physio.jpg" alt=""></a>
                            <div class="caption">
                                <!--<h4 class="pull-right">$24.99</h4>-->
                                <h4><a href="display_cat_pro.php?catid=4">Physiotheraphy At Home</a>
                                </h4>
                                <br><strong> NO.OF Experts:</strong> <?php $sql1 = "select count(proID) from professional_profile where category=4";$re=pg_query($session,$sql1);if($row=pg_fetch_row($re)){if($row[0] > 0){echo "$row[0]";}else{echo "Comming Soon..";}} ?>
                            </div>
                           <!-- <div class="ratings">
                                <p class="pull-right">15 reviews</p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                </p>
                            </div>-->
                        </div>
                    </div>
<div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <a href="display_cat_pro.php?catid=1"><img src="image/yoga3.jpg" alt=""></a>
                            <div class="caption">
                                <!--<h4 class="pull-right">$24.99</h4>-->
                                <h4><a href="display_cat_pro.php?catid=1">Yoga Classes At Studio</a>
                                </h4>
                                <br><strong> NO.OF Experts:</strong> <?php $sql1 = "select count(proID) from professional_profile where category=1";$re=pg_query($session,$sql1);if($row=pg_fetch_row($re)){if($row[0] > 0){echo "$row[0]";}else{echo "Comming Soon..";}} ?>:
                            </div>
                           <!-- <div class="ratings">
                                <p class="pull-right">15 reviews</p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                </p>
                            </div>-->
                        </div>
                    </div>
<div class="col-lg-12"><h3 id="2"><u>Maintainance</u><br></h3></div>
                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <a href="display_cat_pro.php?catid=5"><img src="image/ac.jpg" alt=""></a>
                            <div class="caption">
                                <!--<h4 class="pull-right">$24.99</h4>-->
                                <h4><a href="display_cat_pro.php?catid=5">AC Service And Repair</a>
                                </h4>
                                <br><strong> NO.OF Experts:</strong> <?php $sql1 = "select count(proID) from professional_profile where category=5";$re=pg_query($session,$sql1);if($row=pg_fetch_row($re)){if($row[0] > 0){echo "$row[0]";}else{echo "Comming Soon..";}} ?></p>
								
                            </div>
                           <!-- <div class="ratings">
                                <p class="pull-right">15 reviews</p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>	
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                </p>
                            </div>-->
                        </div>
                    </div>
<div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <a href="display_cat_pro.php?catid=6"><img src="image/laptop.jpg" alt=""></a>
                            <div class="caption">
                                <!--<h4 class="pull-right">$24.99</h4>-->
                                <h4><a href="display_cat_pro.php?catid=6">Laptop Repair</a>
                                </h4>
                                <br><strong> NO.OF Experts:</strong> <?php $sql1 = "select count(proID) from professional_profile where category=6";$re=pg_query($session,$sql1);if($row=pg_fetch_row($re)){if($row[0] > 0){echo "$row[0]";}else{echo "Comming Soon..";}} ?>
                            </div>
                           <!-- <div class="ratings">
                                <p class="pull-right">15 reviews</p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                </p>
                            </div>-->
                        </div>
                    </div>
<div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <a href="display_cat_pro.php?catid=7"><img src="image/mobile.jpg" alt=""></a>
                            <div class="caption">
                                <!--<h4 class="pull-right">$24.99</h4>-->
                                <h4><a href="display_cat_pro.php?catid=7">Mobile Repair</a>
                                </h4>
                                <br><strong> NO.OF Experts:</strong> <?php $sql1 = "select count(proID) from professional_profile where category=7";$re=pg_query($session,$sql1);if($row=pg_fetch_row($re)){if($row[0] > 0){echo "$row[0]";}else{echo "Comming Soon..";}} ?>
                            </div>
                           <!-- <div class="ratings">
                                <p class="pull-right">15 reviews</p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                </p>
                            </div>-->
                        </div>
                    </div>
<div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <a href="display_cat_pro.php?catid=8"><img src="image/laundry.jpg" alt=""></a>
                            <div class="caption">
                                <!--<h4 class="pull-right">$24.99</h4>-->
                                <h4><a href="display_cat_pro.php?catid=8">Doorstep Laundry</a>
                                </h4>
                                <br><strong> NO.OF Experts:</strong> <?php $sql1 = "select count(proID) from professional_profile where category=8";$re=pg_query($session,$sql1);if($row=pg_fetch_row($re)){if($row[0] > 0){echo "$row[0]";}else{echo "Comming Soon..";}} ?>
                            </div>
                           <!-- <div class="ratings">
                                <p class="pull-right">15 reviews</p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                </p>
                            </div>-->
                        </div>
                    </div>
<div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <a href="display_cat_pro.php?catid=9"><img src="image/tvrepair.jpg" alt=""></a>
                            <div class="caption">
                                <!--<h4 class="pull-right">$24.99</h4>-->
                                <h4><a href="display_cat_pro.php?catid=9">TV Repair And Installatiion</a>
                                </h4>
                                <br><strong> NO.OF Experts:</strong> <?php $sql1 = "select count(proID) from professional_profile where category=9";$re=pg_query($session,$sql1);if($row=pg_fetch_row($re)){if($row[0] > 0){echo "$row[0]";}else{echo "Comming Soon..";}} ?>
                            </div>
                           <!-- <div class="ratings">
                                <p class="pull-right">15 reviews</p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                </p>
                            </div>-->
                        </div>
                    </div>
<div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <a href="display_cat_pro.php?catid=10"><img src="image/wp.jpg" alt=""></a>
                            <div class="caption">
                                <!--<h4 class="pull-right">$24.99</h4>-->
                                <h4><a href="display_cat_pro.php?catid=10">Water Purifier Repair</a>
                                </h4>
                                <br><strong> NO.OF Experts:</strong> <?php $sql1 = "select count(proID) from professional_profile where category=10";$re=pg_query($session,$sql1);if($row=pg_fetch_row($re)){if($row[0] > 0){echo "$row[0]";}else{echo "Comming Soon..";}} ?>
                            </div>
                           <!-- <div class="ratings">
                                <p class="pull-right">15 reviews</p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                </p>
                            </div>-->
                        </div>
                    </div>
<div class="col-lg-12"><h3 id="3"><u>Wedding And Events</u><br></h3></div>
                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <a href="display_cat_pro.php?catid=11"><img src="image/photographer.jpg" alt=""></a>
                            <div class="caption">
                                <!--<h4 class="pull-right">$24.99</h4>-->
                                <h4><a href="display_cat_pro.php?catid=11">Wedding Photographer</a>
                                </h4>
                                <br><strong> NO.OF Experts:</strong> <?php $sql1 = "select count(proID) from professional_profile where category=11";$re=pg_query($session,$sql1);if($row=pg_fetch_row($re)){if($row[0] > 0){echo "$row[0]";}else{echo "Comming Soon..";}} ?></p>
								
                            </div>
                           <!-- <div class="ratings">
                                <p class="pull-right">15 reviews</p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                </p>
                            </div>-->
                        </div>
                    </div>
<div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <a href="display_cat_pro.php?catid=12"><img src="image/birthday.jpg" alt=""></a>
                            <div class="caption">
                                <!--<h4 class="pull-right">$24.99</h4>-->
                                <h4><a href="display_cat_pro.php?catid=12">Birthday Party Planner</a>
                                </h4>
                                <br><strong> NO.OF Experts:</strong> <?php $sql1 = "select count(proID) from professional_profile where category=12";$re=pg_query($session,$sql1);if($row=pg_fetch_row($re)){if($row[0] > 0){echo "$row[0]";}else{echo "Comming Soon..";}} ?>
                            </div>
                           <!-- <div class="ratings">
                                <p class="pull-right">15 reviews</p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                </p>
                            </div>-->
                        </div>
                    </div>
<div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <a href="display_cat_pro.php?catid=13"><img src="image/wedding-makeup.jpg" alt=""></a>
                            <div class="caption">
                                <!--<h4 class="pull-right">$24.99</h4>-->
                                <h4><a href="display_cat_pro.php?catid=13">Bridal Makeup Artist</a>
                                </h4>
                                <br><strong> NO.OF Experts:</strong> <?php $sql1 = "select count(proID) from professional_profile where category=13";$re=pg_query($session,$sql1);if($row=pg_fetch_row($re)){if($row[0] > 0){echo "$row[0]";}else{echo "Comming Soon..";}} ?>
                            </div>
                           <!-- <div class="ratings">
                                <p class="pull-right">15 reviews</p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                </p>
                            </div>-->
                        </div>
                    </div>
<div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <a href="display_cat_pro.php?catid=14"><img src="image/bpd.jpg" alt=""></a>
                            <div class="caption">
                                <!--<h4 class="pull-right">$24.99</h4>-->
                                <h4><a href="display_cat_pro.php?catid=14">Birthday Party Decorator</a>
                                </h4>
                                <br><strong> NO.OF Experts:</strong> <?php $sql1 = "select count(proID) from professional_profile where category=14";$re=pg_query($session,$sql1);if($row=pg_fetch_row($re)){if($row[0] > 0){echo "$row[0]";}else{echo "Comming Soon..";}} ?>
                            </div>
                           <!-- <div class="ratings">
                                <p class="pull-right">15 reviews</p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                </p>
                            </div>-->
                        </div>
                    </div>
<div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <a href="display_cat_pro.php?catid=15"><img src="image/dj.jpg" alt=""></a>
                            <div class="caption">
                                <!--<h4 class="pull-right">$24.99</h4>-->
                                <h4><a href="display_cat_pro.php?catid=15">DJ For Weddings And Events</a>
                                </h4>
                                <br><strong> NO.OF Experts:</strong> <?php $sql1 = "select count(proID) from professional_profile where category=15";$re=pg_query($session,$sql1);if($row=pg_fetch_row($re)){if($row[0] > 0){echo "$row[0]";}else{echo "Comming Soon..";}} ?>
                            </div>
                           <!-- <div class="ratings">
                                <p class="pull-right">15 reviews</p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                </p>
                            </div>-->
                        </div>
                    </div>
<div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <a href="display_cat_pro.php?catid=16"><img src="image/bar.jpg" alt=""></a>
                            <div class="caption">
                                <!--<h4 class="pull-right">$24.99</h4>-->
                                <h4><a href="display_cat_pro.php?catid=16">Bartender</a>
                                </h4>
                                <br><strong> NO.OF Experts:</strong> <?php $sql1 = "select count(proID) from professional_profile where category=16";$re=pg_query($session,$sql1);if($row=pg_fetch_row($re)){if($row[0] > 0){echo "$row[0]";}else{echo "Comming Soon..";}} ?>
                            </div>
                           <!-- <div class="ratings">
                                <p class="pull-right">15 reviews</p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                </p>
                            </div>-->
                        </div>
                    </div>
<div class="col-lg-12"><h3 id="4"><u>Home Care</u><br></h3></div>
                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <a href="display_cat_pro.php?catid=17"><img src="image/id.jpg" alt=""></a>
                            <div class="caption">
                                <!--<h4 class="pull-right">$24.99</h4>-->
                                <h4><a href="display_cat_pro.php?catid=17"> Interior Designer</a>
                                </h4>
                                <br><strong> NO.OF Experts:</strong> <?php $sql1 = "select count(proID) from professional_profile where category=17";$re=pg_query($session,$sql1);if($row=pg_fetch_row($re)){if($row[0] > 0){echo "$row[0]";}else{echo "Comming Soon..";}} ?></p>
								
                            </div>
                           <!-- <div class="ratings">
                                <p class="pull-right">15 reviews</p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                </p>
                            </div>-->
                        </div>
                    </div>
<div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <a href="display_cat_pro.php?catid=18"><img src="image/carpenter.jpg" alt=""></a>
                            <div class="caption">
                                <!--<h4 class="pull-right">$24.99</h4>-->
                                <h4><a href="display_cat_pro.php?catid=18">Carpenter</a>
                                </h4>
                                <br><strong> NO.OF Experts:</strong> <?php $sql1 = "select count(proID) from professional_profile where category=18";$re=pg_query($session,$sql1);if($row=pg_fetch_row($re)){if($row[0] > 0){echo "$row[0]";}else{echo "Comming Soon..";}} ?>
                            </div>
                           <!-- <div class="ratings">
                                <p class="pull-right">15 reviews</p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                </p>
                            </div>-->
                        </div>
                    </div>
<div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <a href="display_cat_pro.php?catid=19"><img src="image/plumber.jpg" alt=""></a>
                            <div class="caption">
                                <!--<h4 class="pull-right">$24.99</h4>-->
                                <h4><a href="display_cat_pro.php?catid=19">Plumber</a>
                                </h4>
                                <br><strong> NO.OF Experts:</strong> <?php $sql1 = "select count(proID) from professional_profile where category=19";$re=pg_query($session,$sql1);if($row=pg_fetch_row($re)){if($row[0] > 0){echo "$row[0]";}else{echo "Comming Soon..";}} ?>
                            </div>
                           <!-- <div class="ratings">
                                <p class="pull-right">15 reviews</p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                </p>
                            </div>-->
                        </div>
                    </div>
<div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <a href="display_cat_pro.php?catid=20"><img src="image/electrician.jpg" alt=""></a>
                            <div class="caption">
                                <!--<h4 class="pull-right">$24.99</h4>-->
                                <h4><a href="display_cat_pro.php?catid=20">Electrician</a>
                                </h4>
                                <br><strong> NO.OF Experts:</strong> <?php $sql1 = "select count(proID) from professional_profile where category=20";$re=pg_query($session,$sql1);if($row=pg_fetch_row($re)){if($row[0] > 0){echo "$row[0]";}else{echo "Comming Soon..";}} ?>
                            </div>
                           <!-- <div class="ratings">
                                <p class="pull-right">15 reviews</p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                </p>
                            </div>-->
                        </div>
                    </div>
<div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <a href="display_cat_pro.php?catid=21"><img src="image/pest.jpg" alt=""></a>
                            <div class="caption">
                                <!--<h4 class="pull-right">$24.99</h4>-->
                                <h4><a href="display_cat_pro.php?catid=21">Pest Control</a>
                                </h4>
                                <br><strong> NO.OF Experts:</strong> <?php $sql1 = "select count(proID) from professional_profile where category=21";$re=pg_query($session,$sql1);if($row=pg_fetch_row($re)){if($row[0] > 0){echo "$row[0]";}else{echo "Comming Soon..";}} ?>
                            </div>
                           <!-- <div class="ratings">
                                <p class="pull-right">15 reviews</p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                </p>
                            </div>-->
                        </div>
                    </div>
<div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <a href="display_cat_pro.php?catid=22"><img src="image/construction.jpg" alt=""></a>
                            <div class="caption">
                                <!--<h4 class="pull-right">$24.99</h4>-->
                                <h4><a href="display_cat_pro.php?catid=22">Construction And Renovation</a>
                                </h4>
                                <br><strong> NO.OF Experts:</strong> <?php $sql1 = "select count(proID) from professional_profile where category=22";$re=pg_query($session,$sql1);if($row=pg_fetch_row($re)){if($row[0] > 0){echo "$row[0]";}else{echo "Comming Soon..";}} ?>
                            </div>
                           <!-- <div class="ratings">
                                <p class="pull-right">15 reviews</p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                </p>
                            </div>-->
                        </div>
                    </div>
<div class="col-lg-12"><h3 id="5"><u>Academic Tutor</u><br></h3></div>
                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <a href="display_cat_pro.php?catid=23"><img src="image/tutor.jpg" alt=""></a>
                            <div class="caption">
                                <!--<h4 class="pull-right">$24.99</h4>-->
                                <h4><a href="display_cat_pro.php?catid=23">Tutor For Classes I-V</a>
                                </h4>
                                <br><strong> NO.OF Experts:</strong> <?php $sql1 = "select count(proID) from professional_profile where category=23";$re=pg_query($session,$sql1);if($row=pg_fetch_row($re)){if($row[0] > 0){echo "$row[0]";}else{echo "Comming Soon..";}} ?></p>
								
                            </div>
                           <!-- <div class="ratings">
                                <p class="pull-right">15 reviews</p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                </p>
                            </div>-->
                        </div>
                    </div>
<div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                           <a href="display_cat_pro.php?catid=23"> <img src="image/learn.png" alt=""></a>
                            <div class="caption">
                                <!--<h4 class="pull-right">$24.99</h4>-->
                                <h4><a href="display_cat_pro.php?catid=23">Tutor For Classes VI-VIII</a>
                                </h4>
                                <br><strong> NO.OF Experts:</strong> <?php $sql1 = "select count(proID) from professional_profile where category=23";$re=pg_query($session,$sql1);if($row=pg_fetch_row($re)){if($row[0] > 0){echo "$row[0]";}else{echo "Comming Soon..";}} ?>
                            </div>
                           <!-- <div class="ratings">
                                <p class="pull-right">15 reviews</p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                </p>
                            </div>-->
                        </div>
                    </div>
<div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                           <a href="display_cat_pro.php?catid=23"><img src="image/tutor.jpg" alt=""></a>
                            <div class="caption">
                                <!--<h4 class="pull-right">$24.99</h4>-->
                                <h4><a href="display_cat_pro.php?catid=23">Tutor For Classes IX-X</a>
                                </h4>
                                <br><strong> NO.OF Experts:</strong> <?php $sql1 = "select count(proID) from professional_profile where category=23";$re=pg_query($session,$sql1);if($row=pg_fetch_row($re)){if($row[0] > 0){echo "$row[0]";}else{echo "Comming Soon..";}} ?>
                            </div>
                           <!-- <div class="ratings">
                                <p class="pull-right">15 reviews</p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                </p>
                            </div>-->
                        </div>
                    </div>
					
<br><div class="col-lg-12"><h3 id="6"><u>Hobbies And Interest</u><br></h3></div>
                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <a href="display_cat_pro.php?catid=24"><img src="image/guitar.jpg" alt=""></a>
                            <div class="caption">
                                <!--<h4 class="pull-right">$24.99</h4>-->
                                <h4><a href="display_cat_pro.php?catid=24">Guitar Lesson At Home</a>
                                </h4>
                                <br><strong> NO.OF Experts:</strong> <?php $sql1 = "select count(proID) from professional_profile where category=24";$re=pg_query($session,$sql1);if($row=pg_fetch_row($re)){if($row[0] > 0){echo "$row[0]";}else{echo "Comming Soon..";}} ?></p>
								
                            </div>
                           <!-- <div class="ratings">
                                <p class="pull-right">15 reviews</p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                </p>
                            </div>-->
                        </div>
                    </div>
<div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <a href="display_cat_pro.php?catid=25"><img src="image/zumba.jpg" alt=""></a>
                            <div class="caption">
                                <!--<h4 class="pull-right">$24.99</h4>-->
                                <h4><a href="display_cat_pro.php?catid=25">Zumba Fitness Dance</a>
                                </h4>
                                <br><strong> NO.OF Experts:</strong> <?php $sql1 = "select count(proID) from professional_profile where category=25";$re=pg_query($session,$sql1);if($row=pg_fetch_row($re)){if($row[0] > 0){echo "$row[0]";}else{echo "Comming Soon..";}} ?>
                            </div>
                           <!-- <div class="ratings">
                                <p class="pull-right">15 reviews</p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                </p>
                            </div>-->
                        </div>
                    </div>
<div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <a href="display_cat_pro.php?catid=24"><img src="image/guitar.jpg" alt=""></a>
                            <div class="caption">
                                <!--<h4 class="pull-right">$24.99</h4>-->
                                <h4><a href="display_cat_pro.php?catid=24">Guitar Classes</a>
                                </h4>
                                <br><strong> NO.OF Experts:</strong> <?php $sql1 = "select count(proID) from professional_profile where category=24";$re=pg_query($session,$sql1);if($row=pg_fetch_row($re)){if($row[0] > 0){echo "$row[0]";}else{echo "Comming Soon..";}} ?>
                            </div>
                           <!-- <div class="ratings">
                                <p class="pull-right">15 reviews</p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                </p>
                            </div>-->
                        </div>
                    </div>
<div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <a href="display_cat_pro.php?catid=26"><img src="image/semi-classical.jpg" alt=""></a>
                            <div class="caption">
                                <!--<h4 class="pull-right">$24.99</h4>-->
                                <h4><a href="display_cat_pro.php?catid=26">Bollywood Dance Classes</a>
                                </h4>
								<br><strong> NO.OF Experts:</strong> <?php $sql1 = "select count(proID) from professional_profile where category=26";$re=pg_query($session,$sql1);if($row=pg_fetch_row($re)){if($row[0] > 0){echo "$row[0]";}else{echo "Comming Soon..";}} ?>
                            </div>
                           <!-- <div class="ratings">
                                <p class="pull-right">15 reviews</p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                </p>
                            </div>-->
                        </div>
                    </div>

                    
                    <!--<div class="col-sm-4 col-lg-4 col-md-4">
                        <h4><a href="#">Like this template?</a>
                        </h4>
                        <p>If you like this template, then check out <a target="_blank" href="http://maxoffsky.com/code-blog/laravel-shop-tutorial-1-building-a-review-system/">this tutorial</a> on how to build a working review system for your online store!</p>
                        <a class="btn btn-primary" target="_blank" href="http://maxoffsky.com/code-blog/laravel-shop-tutorial-1-building-a-review-system/">View Tutorial</a>
                    </div>-->

                </div>

            </div>

        </div>

    </div>
    <!-- /.container -->

    <div class="container">

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; ServiceKart 2016</p>
					<p align="right"><a href="#">About</a> <a href="#">Contact Us</a></p>
					
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
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
</style>


</body>

</html>
