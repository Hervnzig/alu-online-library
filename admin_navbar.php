<?php
  session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>
	</title>
	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" type="text/css" href="stylesFolder/admin_styles.css">
    <link rel="stylesheet" type="text/css" href="stylesFolder/navbarstyles.css">
   
</head>
<body>

	  <nav>
      <div class="parent-navbar">
          <div class="row-0 logo">
            <a href="#"><img src="images/ALU-lib_Updatedlogo.png"></a> 
          </div>
          <ul class="nav navbar-nav">
            <li><a href="admin_index.php">HOME</a></li>
            <li><a href="admin_books.php">BOOKS</a></li>
            <li><a href="admin_feedback.php">FEEDBACK</a></li>
          </ul>
          <?php
            if(isset($_SESSION['login_user']))
            {?>
                <ul class="nav navbar-nav">
                  <li><a href="admin_profile.php">PROFILE</a></li>
                  <li><a href="admin_student.php">STUDENT-INFORMATION</a></li>
                </ul>

                <ul class="nav navbar-nav navbar-right">
                  <li><a href="admin_profile.php">
                    <div>

                      <?php
                        echo "<img class='img-circle profile_img' height=30 width=30 src='images/".$_SESSION['pic']."'>";

                        echo " ".$_SESSION['login_user']; 
                      ?>
                    </div>
                  </a></li>
                  <li><a href="admin_logout.php">LOGOUT</a></li>
                  
                </ul>
              <?php
            }
            else
            {   ?>
              <ul class="nav navbar-nav navbar-right">

                <li><a href="admin_login.php">LOGIN</a></li>
                
                <li><a href="admin_registration.php">SIGN-UP</a></li>
              </ul>
                <?php
            }
          ?>
      </div>
    </nav>

</body>
</html>