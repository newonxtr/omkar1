<?php
include ('config.php');
$name=$_POST['name'];
$email=$_POST['email'];
$address =$_POST['address'];

$sql= mysql_query("INSERT INTO room set roomno='$roomno',noofpeople='$noofpeople',price='$price',numofroom='$numofroom',message='$message',image='$image' where roomtype='$roomtype'");
if($sql)
{
echo "Data upadated";
}
else
{
	echo "No Data updated";
}
?>