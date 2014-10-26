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

		<h1>Success!</h1>
		
            
	</div>

	<div class="page">
	<?php echo $_SESSION['user']." You have successfully logged in!"; ?>
	</div>





</body>
</html>
