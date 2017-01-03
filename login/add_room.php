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
        <!-- /.container -->
        <div class="container">
              <div class="col-md-12">
                <div class="box">
                  <h1>Update Room</h1>
                  <hr>
                  <form action="update.php" method="post">
                    <div class="form-group">
                      <label for="room" >Select Room type To Be Updated</label><br>
                          <select class="form-control" name="roomtype">
                            <option>Single Bed</option>
                            <option>Double Bed</option>
                            <option>Double Bed-Deluxe</option>
                            <option>Triple Bed</option>
                            <option>Four Bed-Deluxe</option>
                            <option>Common Room</option>
                          </select>
                    </div>
                    <div class="form-group">
                      <label for="noofpeople" >Number of people</label><br>
                          <select class="form-control" name="noofpeople">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                          </select>
                    </div>
                    <div class="form-group">
                      <label for="roomnumber">Room Number</label>
                      <input type="text" name="roomno" class="form-control">
                    </div>
                    <div class="form-group">
                      <label for="price">Enter Price</label>
                      <input type="text" name="price" class="form-control" >
                    </div>
                    <div class="form-group">
                      <label for="nor">Number of Room</label>
                      <input type="text" name="numofroom" class="form-control" >
                    </div>
                    <div class="form-group">
                      <label for="desc">Room Description</label>
                      <textarea rows="8" cols="70" name="message" class="form-control" placeholder="Your Message *" ></textarea>
                    </div>
                    <div class="form-group">
                        <label for="image">Choose an Image</label>
                        <input type="file" class="form-control" name="image">
                    </div>
                     <div class="container">
                        <div class="col-md-4">
                          <button type="submit" class="btn btn-primary"><i class="fa fa-insert"></i> Insert</button>
                        </div>
                      </div>
                  </form>
                </div>
              </div>
            </div>
              <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
              <script src="/omkar/js/bootstrap.min.js"></script>
   </body>
   
</html>