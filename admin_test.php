<?php
	include "admin_navbar.php";
	include "admin_connection.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>edit profile</title>
	<link rel="stylesheet" type="text/css" href="stylesFolder/test.css">
</head>

<body>

	<h2>Edit Information</h2>
	<?php
	
	    $sql = "SELECT * FROM admin WHERE username='$_SESSION[login_user]'";
		$result = mysqli_query($db,$sql) or die (mysql_error()); 
		while ($row = mysqli_fetch_assoc($result))
		{   
    			$first=$row['first'];
    			$last=$row['last'];
			    $Username=$row['username'];
			    $Password=$row['password'];
			    $email=$row['email'];
			    $contact=$row['contact'];

			}

 				echo "<div style='text-align: center'>
 					<img class='img-circle profile-img' height=110 width=120 src='images/".$_SESSION['pic']."'>
 				</div>";
 			?>

	<div class="profile_info">
		<span >Welcome,</span>	
		<h4><?php echo $_SESSION['login_user']; ?></h4>
	</div><br><br>
	
	<div class="form1">
		<form action="" method="post" enctype="multipart/form-data">

		<input class="form-control" type="file" name="file">

		<label><h4><b>First Name: </b></h4></label>
		<input class="form-control" type="text" name="first" value="<?php echo $first; ?>">

		<label><h4><b>Last Name</b></h4></label>
		<input class="form-control" type="text" name="last" value="<?php echo $last; ?>">

		<label><h4><b>Username</b></h4></label>
		<input class="form-control" type="text" name="username" value="<?php echo $username; ?>">

		<label><h4><b>Password</b></h4></label>
		<input class="form-control" type="text" name="password" value="<?php echo $password; ?>">

		<label><h4><b>Email</b></h4></label>
		<input class="form-control" type="text" name="email" value="<?php echo $email; ?>">

		<label><h4><b>Contact No</b></h4></label>
		<input class="form-control" type="text" name="contact" value="<?php echo $contact; ?>">

		<br>
		<div>
			<button class="btn btn-default" type="submit" name="submit">save</button></div>
	</form>
</div>
</body>
</html>