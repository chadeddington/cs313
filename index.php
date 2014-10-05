<?php

if (isset($_POST['action'])) {
    $action = $_POST['action'];
} else if (isset ($_GET['action'])){
    $action = $_GET['action'];
  } else {
      $action =  'home';
  }

	switch ($action) {
	    case 'home':
	        include 'home.php';
	        break;
    
    }
?>
