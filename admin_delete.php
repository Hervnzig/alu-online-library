<?php
  include "admin_connection.php";
  include "admin_navbar.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>Books</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="stylesFolder/delete.css">
</head>
<body>
	<!--_________________sidenav_______________-->
	
	<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

  			<div class="top-header">

                <?php
                if(isset($_SESSION['login_user']))

                { 	echo "<img class='img-circle profile_img' height=120 width=120 src='images/".$_SESSION['pic']."'>";
                    echo "</br></br>";

                    echo "Welcome ".$_SESSION['login_user']; 
                }
                ?>
            </div><br><br>

 <div class="h"> <a href="admin_add.php">Add Books</a> </div> 
    <div class="h"> <a href="admin_delete.php">Delete Books</a></div>
    <div class="h"> <a href="admin_request.php">Book Request</a></div>
    <div class="h"> <a href="admin_issue_info.php">Issue Information</a></div>
</div>

<div id="main">
  <span onclick="openNav()">&#9776; open</span>
  <div class="container" >
    <h2><b>Delete old Books</b></h2>
    
    <form class="book" action="" method="post">
        
        <input type="text" name="bid" class="form-control" placeholder="Book id" required=""><br>
        <input type="text" name="name" class="form-control" placeholder="Book Name" required=""><br>
        <input type="text" name="authors" class="form-control" placeholder="Authors Name" required=""><br>
        <input type="text" name="edition" class="form-control" placeholder="Edition" required=""><br>
        <input type="text" name="status" class="form-control" placeholder="Status" required=""><br>
        <input type="text" name="quantity" class="form-control" placeholder="Quantity" required=""><br>
        <input type="text" name="department" class="form-control" placeholder="Department" required=""><br>

        <button class="btn btn-default" type="submit" name="submit">DELETE</button>
    </form>
  </div>
  <?php
      if(isset($_POST['submit']))
      {
        if(isset($_SESSION['login_user']))
        {
          mysqli_query($db,"DELETE FROM books WHERE VALUES ('$_POST[bid]', '$_POST[name]', '$_POST[authors]', '$_POST[edition]', '$_POST[status]', '$_POST[quantity]', '$_POST[department]') ;");
          ?>
            <script type="text/javascript">
              alert("Book Deleted Successfully.");
            </script>

          <?php

        }
        else
        {
          ?>
            <script type="text/javascript">
              alert("You need to login first.");
            </script>
          <?php
        }
      }
  ?>
</div>
<script src="javascript/sidenav.js"></script>

</body>
