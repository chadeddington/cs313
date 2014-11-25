<?php
/* ***************************************
 * Get access to the database connection
 * **************************************/
$dbHost = getenv('OPENSHIFT_MYSQL_DB_HOST');
$dbPort = getenv('OPENSHIFT_MYSQL_DB_PORT');
$dsn = 'mysql:host=localhost;dbname=moneydb';
$dbUser = 'guest';
$password = 'cangetin';

try {
  //$mydb = new PDO("mysql:host=$dbHost:$dbPort;dbname=moneydb", $dbUser, $password);
  $mydb = new PDO("$dsn", $dbUser, $password);
} catch (PDOException $e) {
  $error_message = $e->getMessage();
  echo "An error occured while trying to connect to the database. $error_message";
}

function insert()
  {
    global $mydb;
    $userId = $_SESSION['userId'];
    $description = $_GET['description'];
    $category = $_GET['category'];
    $amount = $_GET['amount'];
    $dateSpent = $_GET['dateSpent'];
    $userName = $_SESSION['user'];

    if ( $_GET['amount'] == '' || $_GET['category'] == '')
    {
      echo 'There was an error. You forgot to enter some data.';
    } 
    else
    {
      try { 
        
        $sql = "INSERT INTO Spending
               (user_id, description, category, amountSpent, dateSpent, dateUpdated, updatedBy)
               VALUES
               ('$userId','$description','$category','$amount','$dateSpent', CURDATE(), '$userName')";
               
        $statement = $mydb->prepare($sql);
        $success = $statement->execute();
          
      } catch (Exception $PDOException) { 
        $error_message = $PDOException->getMessage();
        echo $error_message;       
      }

      if ($success) {
        $count = $statement->rowCount();
        header("Location:my_cards.php");

    } else
      {
        echo "There was an error,".$_SESSION['user'];   
      } 
    }
  }

function delete()
{
  global $mydb;
    $spendingId = $_GET['spendingId'];

    try { 
      
      $sql = "DELETE FROM Spending
              WHERE spending_id='$spendingId'";
             
      $statement = $mydb->prepare($sql);
      $success = $statement->execute();
        
    } catch (Exception $PDOException) { 
      $error_message = $PDOException->getMessage();
      echo $error_message;       
    }

    header("Location:my_cards.php");
}

function display_spending($userId){
  global $mydb; 

  try {        
        $sql = "SELECT spending_id,amountSpent,description,category,dateSpent
                FROM Spending
                WHERE user_id = $userId";
      
        $statement = $mydb->prepare($sql);
        $statement->execute(); 
        $results = $statement->fetchAll();
    
        if (empty($results)) {
            echo "No Data Found";
        } else 
          {
            $count = count($results);
            foreach($results as $result)
            {
              echo "<form action='delete.php' method='get'><input type='hidden' name='spendingId' value='".$result["spending_id"]."'><td>$".$result["amountSpent"]."</td>"."<td>".$result["description"]."</td>"."<td>".$result["category"]."</td>"."<td>".$result["dateSpent"]."</td><td style='border-right:none;'><input type='submit' class='dbButton' value='Delete'></td></form></tr>";
                
            }
          }
        
          
    } catch (Exception $PDOException) { 
        $error_message = $PDOException->getMessage();
        echo $error_message;   
    } 
}

function logIn() {
  global $mydb; 
  $userName = trim($_POST['user_name']);
  $password = $_POST['password'];
    
    try {        
        $sql = "SELECT user_id, userName, password FROM User
                WHERE userName = '$userName'
                AND   password = '$password'";
      
        $statement = $mydb->prepare($sql);
        $statement->execute();        
        $results = $statement->fetchAll();

        foreach ($results as $result){
        }
    
        if ($userName == $result["userName"] && $password == $result["password"]) {
            //echo "<h2>Welcome $userName.</h2> You have successfully logged in." ;
            $_SESSION['mylogin'] = 1;
            $_SESSION['user'] = $userName;
            $_SESSION['userId'] = $result["user_id"];
            header("Location:log_in_success.php");


        } else
            echo "<h2>Oops! </h2>There was an error logging in.";      
          
    } catch (Exception $PDOException) { 
        $error_message = $PDOException->getMessage();
        echo $error_message;      
    } 

}

function register(){
  global $mydb;
  $userName = trim($_POST['user_name']);
  $password = $_POST['password'];
  $firstName = $_POST['first_name'];
  $lastName = $_POST['last_name'];
  $email = $_POST['email'];

  if (!$userName == '' || !$password == ''){
      try { 
        
        $sql = "INSERT INTO User
               (userName, firstName, lastName, email, password)
               VALUES
               ('$userName','$firstName','$lastName','$email','$password')";
               
        $statement = $mydb->prepare($sql);
        $success = $statement->execute();
          
    } catch (Exception $PDOException) { 
        $error_message = $PDOException->getMessage();
        echo $error_message;       
    } 
    
    if ($success) {
        $count = $statement->rowCount();
        header("Location:register_success.php");

    } else
      {
        echo "There was an error, $firstName";   
      
      } 
  } 
} 

?>
