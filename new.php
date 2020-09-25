<?php


include "db.php";
$query_to_get_number_of_messages = "SELECT count(*) FROM chat_data";
$result = mysqli_query($connection,$query_to_get_number_of_messages);
while($row = mysqli_fetch_assoc($result)){
	$opp = $row['count(*)'];
}

$query_message = "SELECT * FROM chat_data WHERE id > $opp-100 ORDER BY id DESC ";
$result_message = mysqli_query($connection,$query_message);
while($row = mysqli_fetch_assoc($result_message)){
   $time = $row['send_time'];
   $name = $row['name'];
   $message = $row['message'];
 echo "[".$time."]"." ".$name." says:".strip_tags($message);
 echo "<br>";	
}


?>