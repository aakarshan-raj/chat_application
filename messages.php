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

//User checking functionality, if last message of user was 5 min ago, disconnect him (two cases: user goes away, destory the name, but if user  )

$all_user = "SELECT * FROM users";
$all_user_result = mysqli_query($connection,$all_user);
$user_time = "SELECT send_time,name FROM chat_data";
$user_time_result = mysqli_query($connection,$user_time);
if(!$user_time_result){ echo "F failed"; }
while($chat_data = mysqli_fetch_assoc($user_time_result))
{

 $qname = $chat_data['name'];
 $qtime = $chat_data['send_time'];
if($qtime[3] == $current_time[3]){
  if($qtime[4]+5<$current_time[4]){
	delete_user($qname);
                                  }
                                 }
elseif($qtime[3] != $current_time[3]){
	if($qtime[3] == 5 && $current_time[3] == 0){
		$current_time[3]= $current_time[3]+6;
		                                       }

	if($qtime[3].$qtime[4]+5<$current_time[3].$current_time[4]){
       delete_user($qname);
                                                               

                                 }
}


}



?>
</div>
</body>