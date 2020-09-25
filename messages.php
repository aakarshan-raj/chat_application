<head>
	<meta http-equiv="refresh" content="5">

<link rel="stylesheet" type="text/css" href="style/chat_style.css">
</head>
<body>
	<div id = "chat_plane">
<?php 
     session_start();  
include "db.php";
include "functions.php";
global $connection;
$number_of_messages = boom(100);
$query_message = "SELECT * FROM chat_data WHERE id > $number_of_messages ORDER BY id DESC ";
$result_message = mysqli_query($connection,$query_message);
if(!$result_message){ echo mysqli_error($connection);}
while($row = mysqli_fetch_assoc($result_message)){
   $time = $row['send_time'];
   $name = $row['name'];
   $message = $row['message'];
 echo "[".$time."]"." ".$name." says:".strip_tags($message);
 echo "<br>";	
}



alpha(current_time());


?>
</div>
</body>