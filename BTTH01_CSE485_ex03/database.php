<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database="btth01b";
    $conn = new mysqli($servername, $username, $password,$database);
    if(!$conn){
      die('Can not connect');
      }
      
?>