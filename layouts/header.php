<?php
session_start();
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../stylesheets/header.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>header</title>
  </head>
  <body>
    <div class="navbar">
      <img src="../images/logo.jpg" alt="logo" height="80" />
      <?php
            if(isset($_SESSION['username'])){
              if($_SESSION['username'] == "admin") {
                echo'<a style="float:right;" class="navbar-item navbar-button btn" href="../logout.php">logout</a>';
                echo '<a style="float:right;" class="navbar-item navbar-button btn" href="../intranet.php">Intranet</a>';
                echo '<a style="float:right;" class="navbar-item navbar-button btn"<a href="../adminform.php">Create user</a>';
            } else {
                echo'<a style="float:right;" class="navbar-item navbar-button btn" href="../logout.php">logout</a>';
                echo '<a style="float:right;"class="link1 navbar-item navbar-button btn" type="submit" href="../intranet.php">Intranet</a>';
            }
          } else {
                echo '<a style="float:right;" class="navbar-item navbar-button btn" href="../adminform.php">Admin</a>';
                echo '<a style="float:right;" class="navbar-item navbar-button btn" href="../intranet.php">Intranet</a>';
          }
            
          
      ?>
    </div>
  </body>
</html>
