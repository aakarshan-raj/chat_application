<?php 

include "db.php";
global $connection;

if(isset($_POST['submit'])){
	$message = $_POST['message'];
	$hours = getdate(time())['hours'];
	$min  = getdate(time())['minutes'];
	$now = $hours.":".$min;
	$query = "INSERT into chat_data(send_time,name,message) VALUES('$now','name','$message')";
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
   $time = $row['send_time'];
   $name = $row['name'];
   $message = $row['message'];
 echo "[".$time."]"." ".$name." says:".$message;
 echo "<br>";	
}

?>
</head> 

</div>
<div id = "send">
<form action = "chat.php" method="post">
	<br>
<label><input type="submit" name="submit" class = "button" value = "send"></label><input id = "box" type="text" name="message" size = 150 maxlength="150" placeholder= 'name'>

</form>
</div>