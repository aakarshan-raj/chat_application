<?php 
session_start();
include "db.php";
global $connection;
if(!$_SESSION['name']){
	$fucking_name = $_POST["name"];
	$query = "delete from users where username = '$fucking_name'";
	$result = mysqli_query($connection,$query);
	header("Location:index.php");
}
?>
<frameset rows = "95%,10%">

<frame name = "messages" src = "messages.php" noresize>
<frame name = "send_box" src = "send_box.php" noresize scrolling="no">

</frameset>

