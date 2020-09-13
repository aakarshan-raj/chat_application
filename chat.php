<?php 
session_start();

if(!$_SESSION['name']){
	header("Location:index.php");
}
?>
<frameset rows = "95%,10%">

<frame name = "messages" src = "messages.php" noresize>
<frame name = "send_box" src = "send_box.php" noresize scrolling="no">

</frameset>

