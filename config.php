<?php
$connection = mysql_connect('localhost', 'admin', 'admin');
if($connection)
{
	echo "";
}
if (!$connection){
    die("Database Connection Failed" . mysql_error());
}
$select_db = mysql_select_db('omkar');
if (!$select_db)
{
    die("Database Selection Failed" . mysql_error());
}
echo "<br>";
?>