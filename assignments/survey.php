<?php
session_start();
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Survery</title>
  <link rel="stylesheet" type="text/css" href="../style.css">


</head>
<body>
<?php
echo $_SESSION["voted"];
if ($_SESSION["voted"] == 1)
{
    header('Location: results.php');
} else
    $_SESSION["voted"] = 0;
?>
	<div class="titleBar">
		<ul>
			<li>Chad Eddington</li>
			<li><a href="../?action=home">Home</a></li>
			<li><a href="../?action=assignments">Assignments</a></li>
		</ul>
	</div>

	<div class="page">

		<h1>Favorites Survey</h1>
	</div>

	<div class="page">

		<form action="results.php" method="post" name="surveryForm" id="myForm" style="text-align:left;">
        
        <h2>Favorite Operating System</h2>
        <input type="radio" name="os" value="mac">Mac OS X<br />
        <input type="radio" name="os" value="windows">Microsoft Windows<br/>
        <br>

        <h2>Favorite Smart Phone</h2>
        <input type="radio" name="phone" value="iphone">iPhone<br />
        <input type="radio" name="phone" value="android">Android<br/>
        <br>

        <h2>Favorite Web Browser</h2>
        <input type="radio" name="browser" value="chrome">Chrome<br />
        <input type="radio" name="browser" value="firefox">Firefox<br/>
        <br>

        <h2>Favorite Gaming Console</h2>
        <input type="radio" name="console" value="playstation">Playstation<br />
        <input type="radio" name="console" value="xbox">Xbox<br/>

        <br>

  		<input type='submit' value='Submit'> &nbsp;<button href="results.php">Results</button>
<br/>
</form>
	</div>





</body>
</html>