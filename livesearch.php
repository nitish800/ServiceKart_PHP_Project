<?php
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
$q = $_REQUEST['q'];

$sql = "select catID,category from categories where category like '%$q%'";

$ret = pg_query($session,$sql);
$response = "";
while($row=pg_fetch_row($ret))
{
	
	
	$response .= "<span style='font-size:16px;'><a href='display_cat_pro.php?catid=".$row[0]."'><b>".$row[1]."</b></a></span></br>";
	
	
}
if($response=="")
{
	echo "no suggestion";
}
else
{
	echo $response;
}
pg_close($session);
?>