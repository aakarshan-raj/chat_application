<?php 

session_start();
$_SESSION['name'] = "Aakarshan";
echo session_id();

print_r($_SESSION);
phpinfo();
?>