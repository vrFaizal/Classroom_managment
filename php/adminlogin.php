<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="description" content="Classroom Management System">
  <meta name="keywords" content="Classroom Management, Admin, Users">
  <meta name="author" content="Laterals">
  <title>Classroom Management System | Home</title>
  <link rel="stylesheet" href="./css/style.css">
  <style>
    /* CSS styles */
  </style>
  <link rel="icon" href="./img/favicon.ico">
</head>

<body>

  <header>
    <div class="container">
      <div id="branding">
        <h1><span class="highlight">NIE </span>Classroom Management</h1>
        <nav>
          <ul>
            <li class="current"><a href="http://localhost/crms/index.html">Home</a></li>
            <!-- Add more navigation links as needed -->
          </ul>
        </nav>
      </div>
    </div>
  </header>

  <center>
    <h1 class="large">CLASSROOM MANAGEMENT SYSTEM</h1>
    <img src="./img/nie_logo.png" alt="NIE Logo" height="150px" width="250px" class="center">
  </center>

  <center>
    <marquee>
      <h1>Welcome To NIE Classroom Management</h1>
    </marquee>
  </center>

  <div style="font-size:20px; text-align:center;">
    <b>
      <?php
      $adminid = $_POST['adminid'];
      $password = $_POST['adminkey'];
      $key = "admin@123";
      $id = "adminnie";
      if ($password == $key && $adminid == $id) {
        header("location:http://localhost/crms/admin.html");
      } else {
        echo "WRONG ADMIN ID OR SECURITY KEY";
      }
      ?>
    </b>
    <br><br>

    <div class="dark" style="background: #35424a; color:#ffffff;">
      <h3>Our Visit Timings</h3>
      <hr>
      <p>Monday-Friday: 09:00-17:00</p>
      <p>Saturday: 09:30-13:00</p>
      <p>Sunday: Closed</p>
    </div>

    <div class="dark" style="background: #35424a; color:#ffffff;">
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
  </div>

</body>

</html>
