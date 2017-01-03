<?php
   session_start();
?>
<html">
   
   <head>
      <title>Welcome </title>
      <link rel="stylesheet" type="text/css" href="/omkar/css/bootstrap.min.css">
    <link rel="stylesheet" href="/omkar/css/main.css">
    <link rel="stylesheet" href="data.css">
   </head>
   
   <body>
   		<div class="main">
   			 <h4>Welcome,<!--<?php echo ($_SESSION['username']); ?>--></h4> 
      			<p><a href = "logout.php">Sign Out</a></p>
      		<?php session_destroy();?>
   		</div>
     	<div class="navbar navbar-default yamm" role="navigation" id="navbar">
        <div class="container">
            <div class="navbar-header">

                <a class="navbar-brand home" href="index.html" data-animate-hover="bounce">
                    <img src="/omkar/img/symbol.svg" alt="Omkar Inn" class="hidden-xs">
                    <span class="sr-only">Omkar INN</span>
                </a>
                <div class="navbar-buttons">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                        <span class="sr-only">Toggle navigation</span>
                        <i class="fa fa-align-justify"></i>
                    </button>
                </div>
            </div>
            <!--/.navbar-header -->

            <div class="navbar-collapse collapse" id="navigation">

                <ul class="nav navbar-nav navbar-left">
                    <li><a href="index.html">Home</a>
                    </li>
                    <li><a href="#">Bookings</a></li>
                     <li><a href="add_room.php">ADD ROOM</a></li>
                      <li><a href="#">UPDATE ROOM</a></li>
                      <li><a href="#">DELETE ROOM</a></li>
                </ul>
            </div>
            <!--/.nav-collapse -->

        </div>
      </div>
      <br><br>
      <div class="container">
        <div class="col-md-12">
            <?php
$conn_error="could not connect to database";
$servername="localhost";
$username="admin";
$password="admin";
$mysql_db="omkar";

$con = mysqli_connect($servername,$username,$password) or die('Error');
mysqli_select_db($con,$mysql_db) or die($conn_error);

$sql= "SELECT * FROM room";
$result =$con->query($sql);
if($result->num_rows > 0)
{

   echo '<table cellpadding="0" cellspacing="0" class="dbtable">';
   echo '<tr><th>ID</th><th>ROOM TYPE</th><th>NUMBER OF PEOPLE</th><th>PRICE</th><th>NUMBER OF ROOM </th><th>Room Description</th><th>IMAGE</tr>';
   while($row = $result ->fetch_assoc())
    {
             echo "<tr><td>" . $row["id"]. "</td><td>" . $row["roomtype"]. "</td><td>" . $row["room"]. "</td><td>" . $row["price"]. "</td><td>" . $row["numofroom"]. "</td><td>" . $row["message"]. "</td><td>". $row["image"]. "</td></tr>";
         }
         echo "</table>";
    } else {
         echo "0 results";
    }
   mysqli_close($con)
    ?>  
        </div>
      </div>
      <div class="container">
              <div class="col-md-12">
                <div class="box">
                  <h1>Delete Data</h1>
                  <hr>
                  <form action="delete.php" method="post">
                    <div class="form-group">
                      <label for="roomtype">Enter The ROOM To Delete</label>
                      <input type="text" name="id" class="form-control" required>
                    </div>
                  </form>
                </div>
              </div>
            </div>
      
        <!-- /.container -->
              <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
              <script src="/omkar/js/bootstrap.min.js"></script>
   </body>
   
</html>







