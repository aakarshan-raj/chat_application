
<?php 
session_start();

if(!$_SESSION['name']){
	header("Location:index.php");
}
$name =  $_SESSION['name'];
$file = "/var/test/coding/file/text.txt";


}

?>
<?php 

?>


<style type="text/css">
	#send{
		background-color: #FD7B7B;
		border-radius: 10px;
		margin-top: 1%;
		height: 60px;
		position: fixed;

        
	}
	label{
		font-size: 30px;
	}
	#chat_plane{
		width: 1900px;
		height: 870px;
		margin-left: 10px;
		margin-top: 1000px;
		border-color: red;
		background-color: white;
		margin-top: 10px;
		overflow-y: scroll;
		

	}
	}
	body{
		margin: 0;
		padding: 0;
		background-color: grey;

	}
</style>
<?php
// if(isset($_POST['submit'])){

// $read = fopen($file, 'r');
// $chat_data = fread($read, filesize($file));
// $current = $chat_data;
// }
?>
 <head>

<div id = "chat_plane">
<?php 


}


?>
</head> 

</div>
<div id = "send">
<form action = "chat.php" method="post">
<label>message:</label><input type="text" name="message" size = 150 maxlength="150" placeholder= <?php echo $name ?>>
<input type="submit" name="submit" value = "send">
</form>
</div>