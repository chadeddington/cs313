<?php session_start() ?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Chad E.</title>
  <link rel="stylesheet" type="text/css" href="style.css">


</head>
<body>

  <?php include "navBar.php" ?>
  <div class="page">

    <h1>Log In</h1>
    
            
  </div>

  <div class="page">

    <?php require('model/db_functions.php'); ?>
    <?php logIn(); ?>

  </div>



</body>
</html>