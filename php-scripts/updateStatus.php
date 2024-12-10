<?php
  include 'database.php';
  
  //---------------------------------------- Condition to check that POST value is not empty.
  if (!empty($_POST)) {
    // Keep track of post values
    $status = $_POST['status'];
    $id=$_POST['id'];
    // Connect to the database
    $pdo = Database::connect();
    
    // Delete record with the provided RFID
    $sql='UPDATE ground SET status = "' .$status. '" WHERE id = "' .$id. '"';
    $pdo->query($sql);
    
    Database::disconnect();
   
  }
  //---------------------------------------- 
?>
