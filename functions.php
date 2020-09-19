<?php 
include "db.php";




function delete_user($user){
    global $connection;
	$query = "DELETE FROM users WHERE username = '$user'";
	$result = mysqli_query($connection,$query);
	if(!$result){ echo "Failed"; }
	else{ echo "passes"; }

}

?>