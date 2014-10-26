<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Chad E.</title>
  <link rel="stylesheet" type="text/css" href="../style.css">


</head>
<body>
	<?php require('../model/db_functions.php'); ?>

	<?php include "nav/navBar.php" ?>

	<div class="page">

		<h1>Example</h1>
		
            
	</div>

	<div class="page">

		<h2>Spending Data</h2>
		<br>

		<table style="width:100%">
			<tr>
		  	<th>Amount Spent</th>
		  	<th>Description</th>
		  	<th>Category</th>
		  	<th>Date Purchased</th>
		  	</tr>
		  <tr>
		   <?php 
			display_spending();
			?>
		  </tr>

		</table>
		
		

	</div>





</body>
</html>