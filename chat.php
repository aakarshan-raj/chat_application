<?php 

include "db.php";
global $connection;

if(isset($_POST['submit'])){
	$message = $_POST['message'];
	$query = "INSERT into chat_data(datee,name,message) VALUES(now(),'name','$message')";
	$result = mysqli_query($connection,$query);
	if(!$result){ echo " error ".mysqli_error($connection);}
}


?>



 <head>
<link rel="stylesheet" type="text/css" href="chat_style.css">
<div id = "chat_plane">
<?php 
$query_message = "SELECT * FROM chat_data ORDER BY id DESC";
$result_message = mysqli_query($connection,$query_message);
while($row = mysqli_fetch_assoc($result_message)){
	// $row['name'] = $result_message['name'];
	// $row['time'] = $result_message['datee'];
	// $row['message'] = $result_message['message'];
 echo $row['datee']." ".$row['name']." ".$row['message'];
 echo "<br><hr>";	
}

?>
</head> 

</div>
<div id = "send">
<form action = "chat.php" method="post">
	<br>
<label><input type="submit" name="submit" value = "send"></label><input id = "box" type="text" name="message" size = 150 maxlength="200" placeholder= 'name'>

</form>
</div>