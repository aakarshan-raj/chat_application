<?php 


$connection = mysqli_connect("localhost","padmin","password","blog");


// $query_for_chat_data = "CREATE TABLE `chat_data` ( `id` int(8) NOT NULL AUTO_INCREMENT, `send_time` text NOT NULL, `name` varchar(40) NOT NULL, `message` text NOT NULL, PRIMARY KEY (`id`) ) ENGINE=InnoDB AUTO_INCREMENT=153 DEFAULT CHARSET=latin1";
// $query_for_users = "CREATE TABLE `user` ( `username` text NOT NULL ) ENGINE=InnoDB DEFAULT CHARSET=latin1";



// $result1 = mysqli_query($connection,$query_for_chat_data);
// $result2 = mysqli_query($connection,$query_for_users);

// if(!$result1 || !$result2){
// 	die("Table Creation Failed");
// }

// else{
// 	echo "table created succesfully";
// }

$query = "SELECT count(*) FROM catrgory";
$result = mysqli_query($connection,$query);
if(!$result){

	echo "boom".mysqli_error($connection);
}

while($row = mysqli_fetch_assoc($result)){
	echo $row['count(*)'];
}

?>