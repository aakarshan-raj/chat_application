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

$query_message = "SELECT * FROM chat_data ORDER BY id DESC ";
$result_message = mysqli_query($connection,$query_message);
while($row = mysqli_fetch_assoc($result_message)){
   $time = $row['send_time'];
   $name = $row['name'];
   $message = $row['message'];
 echo "[".$time."]"." ".$name." says:".strip_tags($message);
 echo "<br>";	
}

//current time;


$hour = getdate(time())['hours'];
$min = getdate(time())['minutes'];

if(strlen($hour)<2){
	$hour = "0".$hour;
}
if(strlen($min)<2){
	$min = "0".$min;
}
$current_time = $hour.":".$min;


alpha();


?>
</div>
</body>