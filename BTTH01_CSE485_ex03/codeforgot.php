<?php
include "database.php";
session_start();

if (isset($_POST["submit"])) {
  $codeFromForm = $_POST["code"];

  // Lấy giá trị email từ session
  if (isset($_SESSION['email'])) {
    $email = $_SESSION['email'];

    // Truy vấn cơ sở dữ liệu để lấy giá trị trường "code" cho email hiện tại
    $sql = "SELECT code FROM users WHERE email = :email";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':email', $email);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
      $row = $stmt->fetch(PDO::FETCH_ASSOC);
      $codeFromDB = $row['code'];

      // So sánh giá trị "code" từ biểu mẫu với giá trị "code" từ cơ sở dữ liệu
      if ($codeFromForm == $codeFromDB) {
        // Cập nhật trường "code" thành 0 và trường "active" thành 1
        $updateSql = "UPDATE users SET code = 0 WHERE email = :email";
        $updateStmt = $conn->prepare($updateSql);
        $updateStmt->bindParam(':email', $email);
        $updateStmt->execute();
        echo "authentication success <br>";
        //show password
        $sql = "SELECT password FROM users WHERE email = :email";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        if ($stmt->rowCount() > 0) {
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            $pass = $row['password'];
            echo "Password: ".$pass;
          }
      } else {
        echo "Code error";
      }
    }
  }
} ?>
<!DOCTYPE html>
<html>

<head>
  <title>Contact</title>
  <meta charset="UTF-8">
  
</head>

<body>
  <h1>Contact</h1>

  <form method="post" action="">

    <label for="message">Code</label>
    <input type="text" name="code" id="message" required></input>

    <br>
    <input type="submit" value="Authentication" name="submit">

  </form>

</body>

</html>