<?php

session_start();

include('../config.php');
$alogin = mysql_query("SELECT * FROM login WHERE (username = '" . mysql_real_escape_string($_POST['username']) . "') and (password = '" . mysql_real_escape_string($_POST['password']) . "')");
 if(mysql_num_rows($alogin) == 1)
{
	$_SESSION['username'] = $_POST['username'];
	header('Location:welcome.php');
}
else {
// Jump to login page
echo("username or password incorrect ");
}

?>