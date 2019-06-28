<?php
  include "admin_connection.php";
  include "admin_navbar.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Book Request</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="stylesFolder/issue_info.css">
</head>
<body>
<!--_________________sidenav_______________-->
	
	<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

  			<div>

                <?php
                if(isset($_SESSION['login_user']))

                { 	echo "<img class='img-circle profile_img' height=120 width=120 src='images/".$_SESSION['pic']."'>";
                    echo "</br></br>";

                    echo "Welcome ".$_SESSION['login_user']; 
                }
                ?>
            </div><br><br>

 
  <div class="h"> <a href="admin_books.php">Books</a></div>
  <div class="h"> <a href="admin_request.php">Book Request</a></div>
  <div class="h"> <a href="admin_issue_info.php">Issue Information</a></div>
  <div class="h"><a href="admin_expired.php">Expired List</a></div>
</div>

<div id="main">
  
  <span onclick="openNav()">&#9776; open</span>


  <script src="javascript/sidenav.js"></script>

  <div class="container">
    <h3>Information of Borrowed Books</h3><br>
    <?php
    $c=0;

      if(isset($_SESSION['login_user'])) {
        $sql="SELECT student.username,roll,books.bid,name,authors,edition,issue,issue_book.return FROM student inner join issue_book ON student.username=issue_book.username inner join books ON issue_book.bid=books.bid WHERE issue_book.approve ='Yes' ORDER BY `issue_book`.`return` ASC";
        $res=mysqli_query($db,$sql);
        
        
        echo "<table class='table table-bordered' style='width:100%;' >";
        //Table header
        
        echo "<tr style='background-color: #6db6b9e6;'>";
        echo "<th>"; echo "Username";  echo "</th>";
        echo "<th>"; echo "Roll No";  echo "</th>";
        echo "<th>"; echo "BID";  echo "</th>";
        echo "<th>"; echo "Book Name";  echo "</th>";
        echo "<th>"; echo "Authors Name";  echo "</th>";
        echo "<th>"; echo "Edition";  echo "</th>";
        echo "<th>"; echo "Issue Date";  echo "</th>";
        echo "<th>"; echo "Return Date";  echo "</th>";

        echo "</tr>"; 
        echo "</table>";

         echo "<div class='scroll'>";
          echo "<table class='table table-bordered' >";
        while($row=mysqli_fetch_assoc($res))
        {
          $d=date("Y-m-d");
          if($d > $row['return'])
          {
            $c=$c+1;
            $var='<p style="color:yellow; background-color:red;">EXPIRED</p>';

            mysqli_query($db,"UPDATE issue_book SET approve='$var' where `return`='$row[return]' and approve='Yes' limit $c;");
            
            echo $d."</br>";
          }

          echo "<tr>";
            echo "<td>"; echo $row['username']; echo "</td>";
            echo "<td>"; echo $row['roll']; echo "</td>";
            echo "<td>"; echo $row['bid']; echo "</td>";
            echo "<td>"; echo $row['name']; echo "</td>";
            echo "<td>"; echo $row['authors']; echo "</td>";
            echo "<td>"; echo $row['edition']; echo "</td>";
            echo "<td>"; echo $row['issue']; echo "</td>";
            echo "<td>"; echo $row['return']; echo "</td>";
          echo "</tr>";
        }
          echo "</table>";
          echo "</div>";
         }

      else {
        ?>
          <h3>Login to see information of Borrowed Books</h3>
        <?php
      }
    ?>
  </div>
</div>
</body>
</html>