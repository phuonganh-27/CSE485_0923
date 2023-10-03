<?php
// Kết nối đến cơ sở dữ liệu
include "database.php";

// Khởi tạo các biến để lưu thông tin đăng ký
$username = "";
$email = "";
$password = "";

// Kiểm tra xem biểu mẫu đã được gửi đi
if (isset($_POST["submit"])) {
    // Lấy thông tin từ biểu mẫu
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Kiểm tra xem tên người dùng đã tồn tại trong cơ sở dữ liệu chưa
    $sql = "SELECT * FROM users WHERE username = :username";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':username', $username);
    $stmt->execute();

    if ($stmt->rowCount() == 0) {
        // Tên người dùng chưa tồn tại, thực hiện thêm tài khoản mới vào cơ sở dữ liệu
        $sql = "INSERT INTO users (username, email, password,active) VALUES (:username, :email, :password,0)";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $password);
        $stmt->execute();

        echo "Sign up success!";

        // Làm cho các biến rỗng để làm sạch biểu mẫu
        $username = "";
        $email = "";
        $password = "";
        header("Location: login.php");
    } else {
        echo "Username already exists";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
</head>

<body>
    <h1>Sign up</h1>
    <form action="" method="post">
        <label for="username">Username:</label>
        <input type="text" name="username" id="username" required value="<?php echo $username; ?>">
        <br>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required value="<?php echo $email; ?>">
        <br>

        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required value="<?php echo $password; ?>">
        <br>

        <input type="submit" name="submit" value="sign up">
    </form>
</body>

</html>