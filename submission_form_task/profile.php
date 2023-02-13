<html>
  <head>
    <title>Personal Profile</title>
  </head>
  <body>
    <h2>Personal Profile</h2>
    <p>Name: <?php echo $_GET['name']; ?></p>
    <p>Email: <?php echo $_GET['email']; ?></p>
    <p>Gender: <?php echo $_GET['gender']; ?></p>
    <p>DOB: <?php echo $_GET['dob']; ?></p>
    <p>Degree: 
      <?php
        if (isset($_GET['degree'])) {
          $degrees = $_GET['degree'];
          foreach ($degrees as $degree) {
            echo $degree . " ";
          }
        }
      ?>
    </p>
    <p>Blood Group: <?php echo $_GET['bloodgroup']; ?></p>
    <p>Profile Picture: <img src="<?php echo $_GET['picture']; ?>" alt="Profile Picture" /></p>
  </body>
</html>
