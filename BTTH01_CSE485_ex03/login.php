<?php include "database.php";
session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link rel="stylesheet" href="./bootstrap-5.3.0-dist/css/bootstrap.min.css" />
  <link rel="stylesheet" href="fontawesome-free-6.4.0-web/css/all.min.css">
  <style>
    .show {
      display: block !important;
    }
  </style>
</head>

<body>
  <div class="header border-bottom pb-2 shadow py-3">
    <div class="row nav d-flex align-items-center justify-content-between px-3">
      <div class="col-8 row d-flex align-items-center">
        <img class="h-100 w-50 col-3" src="img/logo.png" alt="" />
        <p class="fw-bold col-2">Trang chủ</p>
        <p class="fw-bold col-2">Đăng nhập</p>
      </div>
      <div class="col-1"></div>
      <div class="col-3 justify-content-right">
        <input type="text" placeholder="Nội dung tìm kiếm" />
        <button class="border-1 rounded-1">Tìm</button>
      </div>
    </div>

  </div>

  <div class="d-flex my-5 justify-content-center">
    <div class="card ">
      <form action="" method="post">
        <div class="w-100 bg-secondary p-3">
          <p class="">Sign In</p>
          <div>
            <div class="input-group mb-3">
              <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-user-large"></i></span>
              <input type="text" class="form-control" placeholder="Username" name="txt_username" aria-label="Username" aria-describedby="basic-addon1">
            </div>
            <div class="input-group mb-3">
              <span class="input-group-text" id="basic-addon1"><i class="fa-sharp fa-solid fa-key"></i></span>
              <input type="text" class="form-control" name="txt_password" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1">
            </div>
            <input type="checkbox" name="" id=""> <label for="">Remenber Me</label>
            <a href="signup.php">Sign Up</a>
            <a href="forgotpassword.php">Forgot password</a>

            <div class="text-end">
              <input type="submit" class="btn bg-warning" name="submit" value="Login">

            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
  <?php
  try {
    if (isset($_POST["submit"])) {
      $username = $_POST["txt_username"];
      $password = $_POST["txt_password"];
      // Bước 2: Thực hiện truy vấn sử dụng Prepared Statement
      $sql = "SELECT * FROM users WHERE username = :user AND password = :pass";
      $stmt = $conn->prepare($sql);
      $stmt->bindParam(':user', $username);
      $stmt->bindParam(':pass', $password);
      $stmt->execute();
      if ($stmt->rowCount() > 0) {
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        $email = $row['email'];
        $_SESSION['email'] = $email;
      }
      var_dump($_SESSION['email']);
      // $_SESSION['current_email'] = $email;
      // Bước 3: Xử lý kết quả
      if ($stmt->rowCount() > 0) { ?>
        <div class="modal fade show" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                <a href="http://localhost/PHP/CSE485_0923/BTTH01_CSE485_ex03/login.php"><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button></a>

              </div>
              <div class="modal-body">
                Login successfully
              </div>
              <div class="modal-footer">
                <a href="http://localhost/PHP/CSE485_0923/BTTH01_CSE485_ex03/Authentication.php"><button type="button" class="btn btn-secondary">Home</button></a>

              </div>
            </div>
          </div>
        </div>
      <?php } else { ?>
        <div class="modal fade show" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                <a href="http://localhost/PHP/CSE485_0923/BTTH01_CSE485_ex03/login.php"><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button></a>
              </div>
              <div class="modal-body">
                Login error

              </div>
              <div class="modal-footer">
                <a href="http://localhost/PHP/CSE485_0923/BTTH01_CSE485_ex03/login.php"><button type="button" class="btn btn-secondary">Close</button></a>

              </div>
            </div>
          </div>
        </div>
  <?php
      }
    }
  } catch (PDOException $e) {
    echo "Lỗi: " . $e->getMessage();
  }
  ?>


  <div class="border-top d-flex justify-content-center pt-3 fw-bold">
    <p>TLU'S MUSIC GARDEN</p>
  </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
</script>

</html>