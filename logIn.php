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
		<div id="loginForm">
            <form action="checkLogin.php" name="myForm" onsubmit="return validate()" method="post">
                <label>User Name: </label>
                <input type="text" name="user_name">
                <br>
                <label>Password: &nbsp;  </label>
                <input type="password" name="password">
                <br>
                <input id="button" type="submit" name="action" value="Submit">
            </form>
        </div>
	</div>





</body>
</html>