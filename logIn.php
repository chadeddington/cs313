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
            <form action="checkLogin.php" name="myForm"  method="post">
                <label>User Name: </label>
                <input class="login" type="text" name="user_name">
                <br>
                <label class="password">Password: &nbsp;  </label>
                <input class="login" type="password" name="password">
                <br>
                <input class="fButton" type="submit" name="action" value="Submit">
            </form>
        </div>
	</div>

  <div class="page">
    <div id="RegisterForm">
      <h2> Not a member? Register Here</h2>
            <form action="checkRegister.php" name="myForm" method="post">
                <label class="name">First name: </label>
                <input class="login" type="text" name="first_name">
                <br>
                <label class="name">Last name: </label>
                <input class="login"type="text" name="last_name">
                <br>
                <label id="email">Email: </label>
                <input class="login"type="text" name="email">
                <br>
                <label>User Name:</label>
                <input class="login"type="text" name="user_name">
                <br>
                <label class="password">Password: &nbsp;  </label>
                <input class="login"type="password" name="password">
                <br>
                <input class="fButton" type="submit" name="action" value="Submit">
            </form>
        </div>
  </div>

</body>
</html>