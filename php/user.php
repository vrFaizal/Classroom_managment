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
      <div id="brading">

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
   
				<div class="dark1"><u><h1>User Page</h1></u></div></center>
				<br>hi user 
        <?php
        echo $_SESSION['user_name'];

                         ?>          
                                
				<section id="boxes">
								<div class="container">
												<div class="box"><div class="dark">
																<fieldset><br>
																				<a href="http://localhost/crms/php/reserve.php"><img src="./img/Reserve.jpg" alt="" height="40px" width="80px"><br></a>
																				Request Class
																				 
																</fieldset></div>
												</div>
							<div class="box"><div class="dark">
																<fieldset><br> <a href="http://localhost/crms/php/updateclass.php">
																				<img src="./img/return.jpg" alt="" height="40px" width="80px"><br>
																		</a>		Return Class After lecture 
																				 
																</fieldset></div>
															
								</div>
				</section><section id="boxes">
								<div class="container">
												<div class="box"><div class="dark"><fieldset><br>
															<a href="http://localhost/crms/search.html">	
																				<img src="./img/search.jpg" alt="" height="40px" width="80px"><br>
																				</a>Search class number
																				 
																</fieldset></div>
												</div>
							<div class="box"><div class="dark">
															<fieldset><br><a href="logout.php">	
																				<img src="./img/logout.jpg" alt="" height="40px" width="80px"><br>
																			</a>	Logout Your Profile 
																				 
																</fieldset></div>
															
								</div>
				</section>
				</b>
    <br><br>
</center>
    <div class="dark" >
      <h3>Our Visite Timings</h3>
      <hr>
  
      --》 Monday-Friday 09:00-05:00<br>
      --》 Saturday 09:30-01:00<br>
      --》 Sunday closed
    </div>
  
  
    <div class="dark" >
  
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