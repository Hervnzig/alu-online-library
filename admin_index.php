<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>
		ALU Library admin page
	</title>
	<link rel="stylesheet" type="text/css" href="stylesFolder/admin_styles.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>


<body>
	<div>
		<header>

		<div class="parent-nav-container">
			<div class="flex-container maximum-width">
				<div class="row-0 logo">
					<a href="#"><img src="images/ALU-lib_Updatedlogo.png"></a> 
				</div>

				<?php
				if(isset($_SESSION['login_user']))
				{
					?>
						<nav class="row-0">
							<ul>
								<li><a href="admin_index.php">HOME</a></li>
								<li><a href="admin_books.php">BOOKS</a></li>
								<li><a href="admin_logout.php">LOGOUT</a></li>
								<li><a href="admin_feedback.php">FEEDBACK</a></li>
								<li><a href="index.php">BACK-HOMEPAGE</a></li>

							</ul>
						</nav>
					<?php
				}
				else
				{
					?>
								<nav class="row-0">
									<ul>
										<li><a href="admin_index.php">HOME</a></li>
										<li><a href="admin_books.php">BOOKS</a></li>
										<li><a href="admin_login.php">LOGIN</a></li>
										<li><a href="admin_registration.php">SIGN-UP</a></li>
										<li><a href="admin_feedback.php">FEEDBACK</a></li>
										<li><a href="index.php">BACK-HOMEPAGE</a></li>
									</ul>
								</nav>
				<?php
				}
					
				?>
			</div>
		</div>
			
		</header>
		<section>
		<div class="body-background">
			<br><br><br>
				<div class="box">
					<h1>Welcom to ALU library Online</h1><br>
					<h3>Checking out books starts 09:00</h3><br>
					<h5>Create an account</h5><br>
				</div>
			<br><br><br>
		</div>
		</section>
		

	</div>
	<?php  

		include "admin_footer.php";
	?>
</body>
</html>