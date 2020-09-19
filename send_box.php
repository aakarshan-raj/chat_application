
<?php 
session_start();
include "db.php";
global $connection;
$name = $_SESSION["name"];

if(isset($_POST['submit'])){
	$message = strip_tags(mysqli_real_escape_string($connection,$_POST['message']));
	$hours = getdate(time())['hours'];
	$min  = getdate(time())['minutes'];
	if(strlen($hours)<2){
		$hours = "0".$hours;
	}
	if(strlen($min)<2){
		$min = "0".$min;
	}
	
	$now = $hours.":".$min;
	$query = "INSERT into chat_data(send_time,name,message) VALUES('$now','$name','$message')";
	$result = mysqli_query($connection,$query);
	if(!$result){ echo " error ".mysqli_error($connection);}
}


?>

<head>
	<link rel="stylesheet" type="text/css" href="style/chat_style.css">

</head>
<div id = "send">
<form action = "" method="post">
	<br>
<label><input type="submit" name="submit" class = "button" value = "send"></label><input id = "box" type="text" name="message" size = 150 maxlength="150" placeholder= <?php  echo $_SESSION['name']; ?>>

</form>
</div>