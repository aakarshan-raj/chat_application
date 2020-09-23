
<?php 
session_start();
include "functions.php";
include "db.php";
global $connection;
$name = clean($connection,$_SESSION["name"]);

if(isset($_POST['submit'])){
	$message = clean($connection,$_POST['message']);

	
	$now = current_time();
	$query = "INSERT into chat_data(send_time,name,message) VALUES('$now','$name','$message')";
	$result = mysqli_query($connection,$query);
	if(!$result){ echo " error ".mysqli_error($connection);}
}


?>

<head>
	<link rel="stylesheet" type="text/css" href="style/chat_style.css">

</head>
<div id = "send">
<form action = "" method="post" >
	<br>
<label><input type="submit" name="submit" class = "button" value = "send"></label><input id = "box" type="text" name="message" size = 150 maxlength="150" <?php  echo "placeholder = '$name'"; ?>>

</form>
</div>