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
    </div>
  </header>

  <center>
    <marquee>
      <h1>Welcome To NIE Classroom Management</h1>
    </marquee>
    <div style="font-size:20px;">
      <b>
        <?php
          $server="localhost";
          $user="root";
          $password="";
          $con=mysql_connect($server,$user,$password);
          if(!$con) { 				
            echo "Server Operation failed: " . mysql_error();
          }			
          $db=mysql_select_db("cms",$con);	
          if(!$db) { 				
            echo "Access to database failed: " . mysql_error();
          }	
          $str="select * from allocate"; 
          $query=mysql_query($str); 
          if($query) {
            echo "<h1>Allocated Class Details</h1>";
            echo '<table border="1" class="form">';
            echo '<tr><th>Class Id</th>
            <th>Sem</th>
            <th>Faculty/CR</th>
            <th>Status</th>
            <th>Department</th>
            <th>CR Id</th>
            <th>Start Time</th>
            <th>End Time</th>
            </tr>';
            while($row=mysql_fetch_array($query)) {
              echo "<tr>";
              echo "<td>" . $row['class_id'] . "</td>";
              echo "<td>" . $row['sem'] . "</td>";
              echo "<td>" . $row['fname'] . "</td>";
              echo "<td>";
            
              echo ($row['status'])?'Allocated'
              :'Not Allocated';
              echo "</td>";
              echo "<td>" . $row['branch'] . "</td>";
              echo "<td>" . $row['cr_id'] . "</td>";
              echo "<td>" . $row['start'] . "</td>";
              echo "<td>" . $row['end'] . "</td>";



              echo "</tr>"; 		
            }
            echo "</table>";
          } else {
            echo "SORRY With issue: " . mysql_error();
          }
          echo "<br><br>";
          $str1="create VIEW free AS SELECT class_id,status FROM `class` WHERE status=0"; //USING VIEW

          $query1=mysql_query($str1);
          $str4="select * from free";
          $query4=mysql_query($str4); 

          if($query4) { 
            echo "<h1>Class Details</h1>";
            echo '<table border="1" class="form">';
            echo '<tr><th>Class id</th><th>Status</th></tr>';
            while($row1=mysql_fetch_array($query4)) {
              echo "<tr>"; 		
              echo "<td>" . $row1['class_id'] . "</td>"; 		
              echo "<td>" . $row1['status'] . "</td>"; 
              echo "</tr>"; 		
            }
            echo "</table>";
          } else {
            echo "SOMETHING WENT WRONG WE WILL CLEAR SOON: " . mysql_error();
          }
          $str2="select * from login"; 
          $query2=mysql_query($str2); 
          if($query2) {
            echo "<h1>User Details</h1>";
            echo '<table border="1" class="form">';
            echo '<tr><th>Image</th><th>Name</th><th>Position</th><th>Register id</th><th>Mobile no</th></tr>';
            while($row2=mysql_fetch_array($query2)) {
              
              
              
              echo "<tr>";
              
               ?><?php 
               $path="./img/";
               ?><th>
               <img src="<?php echo $path.$row2['img']; ?>" alt="hello" height="50px" width="50px">	</th><?php	
              echo "<td>" . $row2['fname'] . "</td>"; 	
              echo "<td>" . $row2['position'] . "</td>"; 	
              echo "<td>" . $row2['user_id'] . "</td>";	
              echo "<td>" . $row2['mno'] . "</td>"; 
              echo "</tr>"; 		
            }
            
            echo "</table>";
          } else {
            echo "SOMETHING WENT WRONG PLEASE CHECK DATA AND RETRY: " . mysql_error();
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
