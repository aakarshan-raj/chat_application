
<?php 



$hour = getdate(time())['hours'];
$min = getdate(time())['minutes'];

if(strlen($hour)<2){
	$hour = "0".$hour;
}
if(strlen($min)<2){
	$min = "0".$min;
}

$time = $hour.":".$min;
$old_time = "11:05";
echo $time."<br>";
echo $old_time."<br>";


if($time[3] == $old_time[3]){

if($time[4]+5<$old_time[4]){
	echo "Test Case when minutes are different";
}

}

elseif($time[3] != $old_time[3]){
	if($time[3] == 5 && $old_time[3] == 0){
		$old_time[3]= $old_time[3]+6;
		

	}

	if($time[3].$time[4]+5<$old_time[3].$old_time[4]){
       echo "Test Case comparing 2 digit minutes";

	}


}



?>