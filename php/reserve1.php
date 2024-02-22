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
            <li class="current"><a href="http://localhost/cms/index.html">Home</a></li>
            
          </ul>
        </nav>
      </div>
    </header><center>
      <marquee><h1>Welcome To NIE Classroom Management </h1></marquee>
     <div style="font-size:20px;""><b>
    
    
    
    
    <?php
    $cid=$_POST['cid'];
    $status=true;
  $server="localhost";
    $user="root";
    $password="";
    $uname=$_SESSION['user_name'];
    $branch=$_SESSION['branch'];
    $fid=$_SESSION['user_id'];
    $sem=$_POST['sem'];
    $hours=$_POST['hours'];
    $originalTime=$_POST['time'];
$stime=$originalTime;
    
    
    




$dateTime = DateTime::createFromFormat('H:i', $originalTime);
if($hours==1){
$dateTime->modify('+1 hour');}
else{$dateTime->modify('+2 hour');}


$etime = $dateTime->format('H:i');




  
    $con=mysql_connect($server,$user,$password);
    if(!$con)				
     { 				
     echo"Server Operation failed".mysql_error();
     }
       $db=mysql_select_db("cms",$con);	
          if(!$db)				
         { 
         			echo "DATABASE ERROR ".mysql_error();
          }
          else{
            $str="select * from cr WHERE sem='$sem' AND cr_branch='$branch'"; 
           $query=mysql_query($str); 
           
         
           if($query)
           {
            $q=true;
            $row = mysql_fetch_array($query);
            $crid=$row['cr_id'];
          $str2="insert into allocate values('$fid','$crid','$cid','$status','$branch','$uname','$sem','$originalTime','$etime')";
          $str3="UPDATE `class` SET `status`=$q where class_id='$cid'";
           $query2=mysql_query($str2);
           $query3=mysql_query($str3);

           if($query2 && $query3)
           {
           				echo "Class Id=" .$cid."User Id= ".$fid. " UPDATED<BR>";
           
          
           echo"CLASS RESERVED SUCCESSFUL :: " .$cid ." FROM ".$stime. " to ".$etime."<BR>";
           echo"<br>";
           }
           else{
            echo "CLASS CANNOT RESERVE<BR>".mysql_error();
            

           }
          }
        }
      
          
           
          
          
           
           
          
          ?>
          </center>
    <div class="dark">
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