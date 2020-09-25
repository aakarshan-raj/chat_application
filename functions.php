<?php 
include "db.php";

function clean($connection,$words){

  return strip_tags(mysqli_real_escape_string($connection,$words));

}


function delete_user($user){
    global $connection;
	$query = "DELETE FROM users WHERE username = '$user'";
	$result = mysqli_query($connection,$query);
	if(!$result){ echo "User not deleted"; }
	}

function boom($number_of_messages){
global $connection;
$query_to_get_number_of_messages = "SELECT count(*) FROM chat_data";
$result = mysqli_query($connection,$query_to_get_number_of_messages);
while($row = mysqli_fetch_assoc($result)){
	$nom = $row['count(*)'];
}
$nom =  $nom-$number_of_messages;
return $nom;
}
  function current_time(){
 $hour = getdate(time())['hours'];
$min = getdate(time())['minutes'];

if(strlen($hour)<2){
	$hour = "0".$hour;
}
if(strlen($min)<2){
	$min = "0".$min;
}
$current_time = $hour.":".$min;

return $current_time;
  }


function alpha($cur_time){
	global $connection;

$all_user = "SELECT * FROM users";
$all_user_result = mysqli_query($connection,$all_user);
$user_time = "SELECT send_time,name FROM chat_data";
$user_time_result = mysqli_query($connection,$user_time);
if(!$user_time_result){ echo "F failed"; }
while($chat_data = mysqli_fetch_assoc($user_time_result))
{
 $qname = $chat_data['name'];
 $qtime = $chat_data['send_time'];

 
if($qtime[3] == $cur_time[3])
{
  if($qtime[4]+10<$cur_time[4])
  {
  	delete_user($qname);

  }
}

elseif($qtime[3] != $cur_time[3])
{
	if($qtime[3] == 5 && $cur_time[3] == 0)
	{
		$cur_time[3] = $cur_time[3]+6;
    }

	if($qtime[3].$qtime[4]+10<$cur_time[3].$cur_time[4])
	{
		delete_user($qname);
    }
}
}


}

?>