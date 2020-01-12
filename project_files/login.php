<?php

include "functions.php";

  $user = new db_functions();
  $conn = $user->connect_db();

if (isset($_POST['submit'])) {
    $username = "";
    $pass = "";
    $username = test_input($_POST["userName"]);
    $pass = test_input($_POST["userPassword"]);

     echo $user->login_user($conn, $username, $pass); 
     
     
}

function test_input($data) {
  // $data = trim($data);
  // $data = stripslashes($data);
  // $data = htmlspecialchars($data);
  return $data;
}

?>