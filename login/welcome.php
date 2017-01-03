<?php
   session_start();
?>
<html">
   
   <head>
      <title>Welcome </title>
      <link rel="stylesheet" type="text/css" href="/omkar/css/bootstrap.min.css">
    <link rel="stylesheet" href="/omkar/css/main.css">
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
                    <img src="/omkar/img/symbol.svg" alt="CORE FITNESS" class="hidden-xs">
                    <span class="sr-only">CORE FITNESS</span>
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
                      <li><a href="display.php">Display</a></li>
                </ul>
            </div>
            <!--/.nav-collapse -->

  

        </div>
        <!-- /.container -->
    </div>
   </body>
   
</html>