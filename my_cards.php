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
	
	<?php include "navBar.php" ;
		require_once ( 'model/db_functions.php' );
	?>

	<div class="page">

		<?php echo '<h1>'.$_SESSION['user']."'s Spending</h1>" ?>
		
            
	</div>

	<div class="page">
	<form action="insert.php" method="get">
		<table style="width:100%">
			<tr>
		  	<th>Amount Spent</th>
		  	<th>Description</th>
		  	<th>Category</th>
		  	<th>Date Purchased</th>
		  	<th>Update Table</th>
		  	</tr>
		  <tr>
		  	<td>
		   		$<input type="text" name="amount">
		   	</td>
		   	<td>
		   		<input type="text" name="description">
		   	</td>
		   	<td>
		   		<input type="text" name="category">
		   	</td>
		   	<td>
		   		<input type="text" name="dateSpent">
		   	</td>
		   	<td style="border-right:none;">
		   		<input class="dbButton" type='submit' name="action" value="Insert">
		   	</td>
		  </tr>

		</table>

		</form>        
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
		  	<th>Remove</th>
		  	</tr>
		  <tr>
		   <?php 
			display_spending($_SESSION['userId']);
			?>
		  </tr>

		</table>
		
		

	</div>
</body>
