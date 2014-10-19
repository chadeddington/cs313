<?php
/* ***************************************
 * Get access to the database connection
 * **************************************/
$dbHost = getenv('OPENSHIFT_MYSQL_DB_HOST');
$dbPort = getenv('OPENSHIFT_MYSQL_DB_PORT');
//$dsn = 'mysql:host=localhost;dbname=moneydb';
$dbUser = 'guest';
$password = 'cangetin';

try {
  $mydb = new PDO("mysql:host=$dbHost:$dbPort;dbname=moneydb", $dbUser, $password);
} catch (PDOException $e) {
  $error_message = $e->getMessage();
  echo "An error occured while trying to connect to the database. $error_message";
}

function display_spending(){
  global $mydb; 

  try {        
        $sql = "SELECT amountSpent,description,category,dateSpent FROM Spending";
      
        $statement = $mydb->prepare($sql);
        $statement->execute(); 
        $results = $statement->fetchAll();
    
        if (empty($results)) {
            echo "Oops, Try again!";
        } else 
          {
            $count = count($results);
            foreach($results as $result)
            {
              echo "<td>$".$result["amountSpent"]."</td>"."<td>".$result["description"]."</td>"."<td>".$result["category"]."</td>"."<td>".$result["dateSpent"]."</td>";
                
            }
          }
        
          
    } catch (Exception $PDOException) { 
        $error_message = $PDOException->getMessage();
        echo $error_message;   
    } 
}

?>
