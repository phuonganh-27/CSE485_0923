<?php
    try{
      // bước 1: kết nối Dbserver
      $conn = new PDO ("mysql:host=localhost;dbname=tlu", "root", "");
      //bước 2:thực hiện truy vấn
      $sql = "select * from users order by created_at desc limit 10";
      $stmt = $conn->prepare($sql);
      $stmt->execute();
      //bước 3: Xử lý kết quả
      $users = $stmt->fetchAll();
      }catch(PDOException $e){
        echo $e->getMessage();
      }
      
      
?>