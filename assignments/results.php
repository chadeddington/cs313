<?php session_start() ?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Survery Results</title>
  <link rel="stylesheet" type="text/css" href="../style.css">


</head>
<body>

	<?php 
		if (isset($_POST["os"]))
			$_SESSION["voted"] = 1;
    ?>

	<?php include "navBar.php" ?>

	<div class="page">

		<h1>Survery Results</h1>
	</div>

	<div class="page">
		
		<?php 
			static $macCount = 0;
			static $windowsCount = 0;
			static $iphoneCount = 0;
			static $androidCount = 0;
			static $chromeCount = 0;
			static $fireCount = 0;
			static $playstationCount = 0;
			static $xboxCount = 0;

			file_put_contents("votes.txt",$_POST["os"],FILE_APPEND);
			file_put_contents("votes.txt"," ",FILE_APPEND);
			file_put_contents("votes.txt",$_POST["phone"],FILE_APPEND);
			file_put_contents("votes.txt"," ",FILE_APPEND);
			file_put_contents("votes.txt",$_POST["browser"],FILE_APPEND);
			file_put_contents("votes.txt"," ",FILE_APPEND);
			file_put_contents("votes.txt",$_POST["console"],FILE_APPEND);
			file_put_contents("votes.txt"," ",FILE_APPEND);

			$string = file_get_contents("votes.txt");
		    $array = explode(" ", $string);

		    for ($i=0; $i < sizeof($array); $i++)
		    {
				if ($array[$i] == "mac")
				$macCount++;
				if ($array[$i] == "windows")
				$windowsCount++;
				if ($array[$i] == "iphone")
				$iphoneCount++;
				if ($array[$i] == "android")
				$androidCount++;
				if ($array[$i] == "chrome")
				$chromeCount++;
				if ($array[$i] == "firefox")
				$fireCount++;
				if ($array[$i] == "playstation")
				$playstationCount++;
				if ($array[$i] == "xbox")
				$xboxCount++;
		    }
		 ?>

		<?php
		    echo "<br><h2>Operation System </h2>";
			echo "$macCount votes for Mac OS X <br>";
			echo "$windowsCount votes for Microsoft Windows <br>";
			echo "<br><h2>Smart Phone </h2>";
			echo "$iphoneCount votes for iPhone <br>";
			echo "$androidCount votes for Android <br>";
			echo "<br><h2>Web Browser </h2>";
			echo "$chromeCount votes for Chrome <br>";
			echo "$fireCount votes for Firefox <br>";
			echo "<br><h2>Gaming Console </h2>";
			echo "$playstationCount votes for Play Station <br>";
			echo "$xboxCount votes for Xbox <br>";
			
		?>
	</div>





</body>
</html>