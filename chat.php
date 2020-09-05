<?php 
session_start();

// if(!$_SESSION['name']){
// 	header("Location:index.php");
// }
// $name =  $_SESSION['name'];
?>



 <head>
<link rel="stylesheet" type="text/css" href="chat_style.css">
<div id = "chat_plane">
<?php 




?>
</head> 

</div>
<div id = "send">
<form action = "chat.php" method="post">
<label>message:</label><input type="text" name="message" size = 150 maxlength="150" placeholder= <?php echo "name" ?>>
<input type="submit" name="submit" value = "send">
</form>
</div>