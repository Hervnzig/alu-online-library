<?php
  include "admin_connection.php";
  include "admin_navbar.php";
?>

<!DOCTYPE html>
<html>
<head>

  <title>Administrator Login</title>
  <link rel="stylesheet" type="text/css" href="stylesFolder/login.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
     
</head>
<body>

<section>
  <div>
   <br>
    <div class="box1">
        <h1>ALU's online library</h1>
        <h3>Admin login Form</h3><br>
      <form  name="login" action="" method="post">
        
        <div class="login">
          <input class="form-control" type="text" name="username" placeholder="Username" required=""> <br>
          <input class="form-control" type="password" name="password" placeholder="Password" required=""> <br>
          <input class="btn btn-default" type="submit" name="submit" value="Login"> 
        </div>
      
      <p class="other-options">
        <br><br>
        <a href="admin_update_password.php">Forgot password?</a> &nbsp &nbsp &nbsp &nbsp &nbsp  
        New to this website?<a href="admin_registration.php">&nbspSign Up</a>
      </p>
    </form>
    </div>
  </div>
</section>

  <?php

    if(isset($_POST['submit']))
    {
      $count=0;
      $res=mysqli_query($db,"SELECT * FROM `admin` WHERE username='$_POST[username]' && password='$_POST[password]';");

      $row= mysqli_fetch_assoc($res);

      $count=mysqli_num_rows($res);

      if($count==0)
      {
        ?>
              
          <div class="alert alert-danger">
            <strong>The username and password doesn't match</strong>
          </div>    
        <?php
      }
      else
      {
        /*-------------if username & password matches---*/

        $_SESSION['login_user'] = $_POST['username']; 
        $_SESSION['pic']= $row['pic'];

        ?>
          <script type="text/javascript">
            window.location="admin_profile.php"
          </script>
        <?php
      }
    }

  ?>

</body>
  <?php
    include "admin_footer.php";
  ?>
</html>