

<?php 
include "db.php";
global $connection;
session_start();

if(isset($_POST['submit'])){
	$name  = $_POST['name'];
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

<style type="text/css">
	

	div{
		width: 400px;
		height: 300px;
		background-color: #ADECB4;
		border: 10px solid #E98FEC;
		margin-left: 38%;
		margin-top: 10%;

	}
	form{
		margin-top: 25%;
		margin-left: 35%;
		background-color:oranges;

	}
	input[type = "text"]{
		border-radius: 10px;
		height: 30px;
		width: 200px;
		margin-top: 17%;
		margin-left: -14%;
		font-size:20px;


	}
	input[type = "submit"]{
		width: 180px;
		margin-left: -10%;
		margin-top: 20px;
		font-size: 20px;
}
body{
	background-color: #C0E0E9;
}

</style>
<div>
<form action="index.php" method="post">
	<input type="text" name="name" placeholder="Alias/Aka">
	<input type="submit" name="submit" value = "Enter the chat">
	<br>
	


</form>

</div>