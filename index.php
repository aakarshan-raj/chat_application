<?php 

include "db.php";
global $connection;

?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>zhn32zasffh5t6rj.onion</title>
</head>
<body>
	
	<div id = "me" style="color:red">
	
</div>

<form method = "post" action = "index.php" id="enter"> 
<h2 id="gret">Enter the blackBox</h2>
<textarea rows="20" cols="30" name="data">
	
</textarea>
<br>
<input type="submit" name="Enter" value="Enter" id = "butt">
</form>
	
</body>
</html>

<!-- <meta name="viewport" content="width=device-width, initial-scale=1.0">
 -->

 <?php if(isset($_POST['Enter'])){

 $data = $_POST['data'];
 $query = "INSERT INTO details(ip,message) VALUES('$_SERVER[REMOTE_ADDR]','$data')";
 $result = mysqli_query($connection,$query);
 if(!$result){ echo "Error";}
}
?>
