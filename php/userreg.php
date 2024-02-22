<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="description" content=" Classroom Management System">
  <meta name="keywords" content="Classroom Management ->Admin & ->Users">
  <meta name="author" content="Laterals">
  <title>Classroom Management System| Home</title>
  <link rel="stylesheet" href="./css/style.css">
  <style>
   body{
  font: 15px/1.5 Arial, Helvetica,sans-serif;
  padding:0;
  margin:0;
}
.form1{
				font:Times new roman;
				color:#ffffff;
				font-size:20px;
}

.form{
border-radius:10px;
background-position:center ; 
  background:url('../img/form.jpg') no-repeat;;
  color:#ffffff;
  margin-top:10px;
  height: 200px;
  width: 180px;
  margin-bottom:10px;
}
.input{
  height:20px;
  background:black;
  border:1;
  padding-left: 20px;
  padding-right:20px;
  color:#ffffff;
  border-radius:10px;
  color:#ffffff;
}

/* Global */
.container{
  width:80%;
  margin:auto;
  overflow:hidden;
}
.footer-hours-list ul li {
  font-size: 13px;
  color: #cac9c9;
  line-height: 25px;
}
ul{
  margin:0;
  padding:0;
}
.button{
				background:#35424a;
  border:1;
  padding-left:px;
  padding-right:px;
  color:#ffffff;
  border-radius:10px;
}
adm{
  background-color: #0477be;
  background: #0477be;
  max-width: fit-content;
}
.button1{
 
  background:#e8491d;
  border:1;
  padding-left: 20px;
  padding-right:20px;
  color:#ffffff;
  border-radius:10px;
  
}
.large{font-size:34px;}

.dark{
  background: #232323;
  padding:15px;
  background:#278ccb;
  color:#ffffff;
  margin-top:10px;
  margin-bottom:10px;
 
}

.dark1{
 
  background:#0477be;
  color:#ffffff;
  height:40px;
  width:200px;
}
/* Header **/
header{
  background:#83c1e6;
  color:#ffffff;
  padding-top:60px;
  min-height:70px;
  border-bottom:#464342 5px solid;
  
  
}
.h1{
  background:#83c1e6;
  color:#ffffff;
  padding-top:60px;
  min-height:70px;
  border-bottom:#323233 5px solid;
}

header a{
  color:#ffffff;
  text-decoration:none;
  text-transform: uppercase;
  font-size:16px;
}

header li{
  float:left;
  display:inline;
  padding: 0 20px 0 20px;
}

header #branding{
  float:left;
}

header #branding h1{
  margin:0;
}

header nav{
  float:right;
  margin-top:10px;
}

header .highlight, header .current a{
  color:#130069;
  font-weight:bold;
}
page-size{
  align-items: center;
}

header a:hover{
  color:#cccccc;
  font-weight:bold;
}

/* Showcase */
#showcase{
  min-height:400px;
  background:url('../img/b2.jpg') no-repeat;
  background-position: center;
  background-size: cover;
  text-align:center;
  color:#ffffff;
}
#student{
  min-height:300px;
  min-width:10px;
  background:url('../img/form1.jpg') no-repeat;
  background-position:center;
  background-size: cover;
  text-align:center;
  color:#ffffff;
  position:static;
  top: 20px;
  left:100px;
  margin-right:50px;
  margin-left:50px;
  
}

.icon{
background:#e8491d;
  border:5px;
  padding-left: 20px;
  padding-right:20px;
  color:#ffffff;
  border-radius:10px;
  color:#ffffff;
				
				width: 100px;
				height: 40px;
}

#bottom{
  min-height:700px;
  background:url('../img/classroom2.jpg') no-repeat;
  background-position:center;
  background-size:auto;
  text-align:center;
  color:#c56110;
  font-size:39px;
  }
  

  
  
 
  
  
>
    </style>

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
     <div style="font-size:20px;""><b>
    
    				
    				
    <?php
    $name=$_POST['fname'];
    $sem=$_POST['sem'];
    $lname=$_POST['lname'];
    $regid=$_POST['regno'];
    $password1=$_POST['password'];
    $dept=$_POST['dept'];
   $position=$_POST['position'];
    $mnum=$_POST['mobno'];
    $email=$_POST['email'];
    $img=$_POST['img'];
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
         { 				echo"Access to database failed".mysql_error(); 
         
          }
          else{
          
        if($position=='faculty')
        {
           $str="insert into faculty values('$img','$regid','$name','$lname','$dept','$mnum','$email')"; 
           $query=mysql_query($str);
        }
        else{
         
          $str="insert into cr values('$img','$regid','$name','$dept','$sem','$mnum')"; 
          $query=mysql_query($str);
        }
           if($query)
           {
              
               $str1="insert into login values('$img','$name','$position','$regid','$mnum','$password1','$dept')";
               $query1=mysql_query($str1); 
           if($query1)
           {
            echo "NAME: ".$name. "  AND ID: " .$regid. " REGISTERED SUCCESSFULLY <br>";
            
            echo $regid." IS USER ID FOR THE CLASSROOM MANAGEMENT SYSTEM <BR>";
            echo $password1." IS PASSWORD FOR THE CLASSROOM MANAGEMENT SYSTEM <BR>";
            
             	}  	
            }
            else{
              echo mysql_error(); 
            } 
           }
          

    
    ?>
    
    
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