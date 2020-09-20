<?php 
include "db.php";




function delete_user($user){
    global $connection;
	$query = "DELETE FROM users WHERE username = '$user'";
	$result = mysqli_query($connection,$query);
	

}

?>