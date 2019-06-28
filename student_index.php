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
	<div class="parent-nav-container">
		<header class="flex-container maximum-width">
		<div class="row-0 logo">
			<img src="images/ALU-lib_Updatedlogo.png">
		</div>

		<?php
		if(isset($_SESSION['login_user']))
		{
			?>
				<nav>
					<ul>
						<li><a href="student_index.php">HOME</a></li>
						<li><a href="student_books.php">BOOKS</a></li>
						<li><a href="student_logout.php">LOGOUT</a></li>
						<li><a href="student_feedback.php">FEEDBACK</a></li>
						<li><a href="index.php">HOMEPAGE</a></li>
					</ul>
				</nav>
			<?php
		}
		else
		{
			?>
						<nav>
							<ul>
								<li><a href="student_index.php">HOME</a></li>
								<li><a href="student_books.php">BOOKS</a></li>
								<li><a href="student_login.php">LOGIN</a></li>
								<li><a href="student_registration.php">SIGN-UP</a></li>
								<li><a href="student_feedback.php">FEEDBACK</a></li>
								<li><a href="index.php">HOMEPAGE</a></li>
							</ul>
						</nav>
		<?php
		}
			
		?>

			
		</header>
		<section>
		<div class="body-background-2">
			<br><br><br>
			<div class="box">
				<br><br><br><br>
				<h1>Welcom to library</h1><br><br>
				<h1>Opens at: 09:00 </h1><br>
				<h1>Closes at: 15:00 </h1><br>
			</div>
		</div>
		</section>
		

	</div>
	<?php  

		include "student_footer.php";
	?>
</body>
</html>