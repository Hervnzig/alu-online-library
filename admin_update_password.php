<?php 
	include "admin_connection.php";
	include "admin_navbar.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Change Password</title>

	<link rel="stylesheet" type="text/css" href="stylesFolder/update_password.css">
</head>
<body>
	<div class="wrapper">
		<div>
			<h1>Change Your Password</h1>
		</div>
		<div>
		<form action="" method="post" >
			<input type="text" name="username" class="form-control" placeholder="Username" required=""><br>
			<input type="text" name="email" class="form-control" placeholder="Email" required=""><br>
			<input type="text" name="password" class="form-control" placeholder="New Password" required=""><br>
			<button class="btn btn-default" type="submit" name="submit" >Update</button>
		</form>

	</div>
	
	<?php

		if(isset($_POST['submit']))
		{
			if(mysqli_query($db,"UPDATE admin SET password='$_POST[password]' WHERE username='$_POST[username]'
			AND email='$_POST[email]' ;"))
			{
				?>
					<script type="text/javascript">
                alert("The Password Updated Successfully.");
              </script> 

				<?php
			}
		}
	?></div>
</body>
</html>