<?php
/*
$mysqli = new mysqli("localhost","Arjun","Arora!123","coffee-blend");

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect !!" . $mysqli -> connect_error;
  exit();
}

else{
    
}
*/

try{

    define("HOST", "localhost");

    define("DBNAME", "coffee-blend");

    define("USER", "Arjun");

    define("PASS", "Arora!123");

    $conn = new PDO("mysql:host=".HOST.";dbname=".DBNAME."",USER, PASS);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  }

  catch( PDOException $Exception ){

    echo $Exception->getMessage();

  }



?>