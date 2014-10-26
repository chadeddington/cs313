<?php session_start() ?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Chad E.</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body onload>
  <?php session_destroy();
    header("Location:index.php");
  ?>

</body>
</html>