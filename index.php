

<?php 
session_start();

if(isset($_POST['submit'])){
	$_SESSION['name'] = $_POST['name'];
	header("Location:chat.php");
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