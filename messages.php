<head>
	<meta http-equiv="refresh" content="3">

<link rel="stylesheet" type="text/css" href="chat_style.css">
</head>
<body>
	<div id = "chat_plane">
<?php 
       
include "db.php";
global $connection;

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
</div>
</body>