

<?php 
include "db.php";
include "functions.php";
global $connection;
session_start();

if(isset($_POST['submit'])){
	$name  = clean($connection,$_POST['name']);
	$query_to_select = "select * from users";
	$result_query = mysqli_query($connection,$query_to_select);
	$all_users = array();
	while($row = mysqli_fetch_assoc($result_query)){
		$name_from_database = $row['username'];
        $all_users[$name_from_database] = $name_from_database;
	}
	if($all_users[$name]){
		echo "user already exists";

	}
	else{
   
	$_SESSION['name'] = $name;
	$query = "INSERT into users(username) VALUES('$name')";
	$result = mysqli_query($connection,$query);
	header("Location:chat.php");
}
}


?>
<link rel="stylesheet" type="text/css" href="style/index_style.css">

<div>
<form action="index.php" method="post">
	<input type="text" name="name" placeholder="Alias/Aka">
	<input type="submit" name="submit" value = "Enter the chat">
	<br>
	


</form>

</div>