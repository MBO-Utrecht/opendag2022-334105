<?php
  
  include("./connect_db.php");

  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "reparatieopdracht";

  $name = $_POST["name"];
  $vraag1 = $_POST["vraag1"];
  $vraag2 = $_POST["vraag2"];
  $vraag3 = $_POST["vraag3"];
  $vraag4 = $_POST["vraag4"];
  $vraag5 = $_POST["vraag5"];
  

  $sql = "INSERT INTO `users` (`id`, `naam`, `vraag1`, `vraag2`, `vraag3`, `vraag4`, `vraag5`) VALUES (NULL, '$name', '$vraag1', '$vraag2' , '$vraag3' , '$vraag4', '$vraag5');";
  
  mysqli_query($conn, $sql);

  header("Location: ./review.php");