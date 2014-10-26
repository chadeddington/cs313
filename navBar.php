<div class="navBar">
		<ul>
			<li>Chad Eddington</li>
			<li><a href="./?action=home">Home</a></li>
			<li><a href="./?action=assignments">Assignments</a></li>

			<?php if ($_SESSION['mylogin'] == 1) {
        		echo '<li><a href="">My Cards</a></li>
        			  <li><a href="log_out.php">Log out</a></li>
        			  <p id="userId">Logged in as '.$_SESSION['user'].'</p>';
    
    			} else {
        			echo '<li><a href="logIn.php">Log In</a></li>';  
   			 	};
    		?>

		</ul>
	</div>