<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="description" content=" Classroom Management System">
  <meta name="keywords" content="Classroom Management ->Admin & ->Users">
  <meta name="author" content="Laterals">
  <title>Classroom Management System| Home</title>
  <link rel="stylesheet" href="./css/style.css">
  <link rel="icon" href="./img/.">
</head>


<body>

 
    <center>
      <h1 class="large">CLASSROOM MANAGEMENT SYSTEM</h1><img src="./img/nie_logo.png" alt="h" height="150px"
        width="250px" class="center">
    </center>
</div>
  </div>
  <header >
    <div class="container">
      <div id="brading" >

        <h1><span class="highlight" >NIE </span>CLASSROOM MANAGEMENT </h1>
       		
       		
           
             
         <nav>
          <ul>
            <li class="current"><a href="http://localhost/crms/index.html">Home</a></li>
            
          </ul>
        </nav>
      </div>
    </header><center>
      <marquee><h1>Welcome To NIE Classroom Management </h1></marquee>
     <div style="font-size:20px;"><b>
    
    
    <?php
    
  $server="localhost";
    $user="root";
    $password="";
  
    $con=mysql_connect($server,$user,$password);
    if(!$con)				
     { 				
     echo"Server Operation failed".mysql_error();
      }			
       $db=mysql_select_db("cms",$con);	
        if(!$db)				
         { 
         			echo"Access to database failed".mysql_error();
          }
          $f=$_SESSION['user_id'];
          $str="select * from allocate where cr_id='$f'";          
          $query=mysql_query($str); 
           if($query)
           {
           echo"<table border=1>";
           echo"<tr>"; 	
           	echo"<th>"; 
         echo "Class Id";		echo"</th>"; 	
         echo"<th>"; 		 		echo "Faculty/CR";		echo"</th>"; 
         echo"<th>"; 		 		echo "Faculty/CR Id"; 		echo"</th>";
         echo"</tr>"; 			
         				
            while($row=mysql_fetch_array($query))
            {
            	  echo"<tr>"; 	
                  echo"<td>"; 		 		echo$row['class_id']; 		echo"</td>"; 
                  echo"<td>"; 		 		echo$row['fname']; 		echo"</td>"; 
                  echo"<td>"; 		 		echo$row['f_id']; 		echo"</td>"; 	
            	  
            	  	echo"</tr>"; 			
            	           }
            	         	echo"	</table>"; 
            		}
 
   
?>


				<div class="dark"> 
								<form method="post" action="updateclass1.php">
											<h2>	Return Class Here </h2><br>
												
												Class Id:<input type="number" name="cid"><br>
												<input type="submit" class="button1" value="Return"><input type="reset" class="button1" value="cancel">
												
								</form>
				</div>
              </center>
<div class="dark">
      <h3>Our Visite Timings</h3>
      <hr>
  
      --》 Monday-Friday 09:00-05:00<br>
      --》 Saturday 09:30-01:00<br>
      --》 Sunday closed
    </div>
  
  
    <div class="dark">
  
      <h3>Our Staff</h3>
      <hr>
  
  
      ☆ Admin ******<br>
      ☆ Assistant ******<br>
      ☆ Contact *******
  
    </div>
  
  
    <footer>
      <img src="./img/nie_logo.png" alt="" height="40px" width="50px">
      <p>CLASSROOM MANAGEMENT SYSTEM @COPY; IS&E 2024</p>
    </footer>
  </body>
  
  </html>