<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="description" content=" Classroom Management System">
  <meta name="keywords" content="Classroom Management ->Admin & ->Users">
  <meta name="author" content="Laterals">
  <title>Classroom Management System| Admin</title>
  <link rel="stylesheet" href="./css/style.css">
  <link rel="icon" href="./img/.">
</head>

<body>

  <div class="dar">
    <center>
      <h1 class="large">CLASSROOM MANAGEMENT SYSTEM</h1><img src="./img/nie_logo.png" alt="h" height="150px"
        width="250px" class="center">
    </center>
  </div>
  <header>
    <div class="container">
      <div id="brading">

        <h1><span class="highlight">NIE </span>CLASSROOM MANAGEMENT </h1>
       		
       		
           
             
         <nav>
          <ul>
            <li class="current"><a href="http://localhost/crms/index.html">Home</a></li>
            
          </ul>
        </nav>
      </div>
    </header><center>
      <marquee><h1>Welcome To NIE Classroom Management </h1></marquee>
      <section id="showcase">
      <div class="container">
        
      </div>
    </section>
    </center>

  <div style="font-size:20px; text-align:center;">
    <b>
        <?php
          $cid=$_POST['classid'];
          $status=$_POST['status'];

          $server="localhost";
          $user="root";
          $T=True;
          $password="";
          $con=mysql_connect($server,$user,$password);
          if(!$con) {
            echo"Server Operation failed ".mysql_error();
          }			
          $db=mysql_select_db("cms",$con);	
          if(!$db) {
            echo"Access to database failed".mysql_error();
          }	
          $str="insert into class values('$cid','$status')"; 
          $query=mysql_query($str); 
          if($query) {
            echo $cid. " class INSERTED SUCCESSFULLY";
          } else {
            echo "SOMETHING WENT WRONG PLEASE CHECK DATA AND IT IS ALREADY EXIST  -->".mysql_error();
          }
        ?>
      </b>
    </div>
  </center>

  <div class="dark" >
    <h3>Our Visit Timings</h3>
    <hr>
    <p>Monday-Friday 09:00-05:00</p>
    <p>Saturday 09:30-01:00</p>
    <p>Sunday closed</p>
  </div>

  <div class="dark" >
    <h3>Our Staff</h3>
    <hr>
    <p>☆ Admin ********</p>
    <p>☆ Assistant ********</p>
    <p>☆ Contact ********</p>
  </div>

  <footer>
    <img src="./img/nie_logo.png" alt="NIE Logo" height="40px" width="50px">
    <p>CLASSROOM MANAGEMENT SYSTEM &copy; IS&E 2024</p>
  </footer>

</body>

</html>
