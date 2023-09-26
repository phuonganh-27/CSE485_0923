<?php include "database.php" ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link
      rel="stylesheet"
      href="./bootstrap-5.3.0-dist/css/bootstrap.min.css"
    />
    <link rel="stylesheet" href="fontawesome-free-6.4.0-web/css/all.min.css">
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
              <div class="text-end">
                    <input type="submit" class="btn bg-warning" name="submit" value="Login">
                  
                </div>
              </div>
            </div>
          </form>
          </div>
    </div>
          <?php
          if(isset($_POST["submit"])){
            $user=$_POST["txt_username"];
            $pass=$_POST["txt_password"];
            $sql = "SELECT * FROM users WHERE username = '$user' AND password = '$pass'" ;
            $result = mysqli_query($conn,$sql);
            if($result === FALSE)   {
              echo "Lỗi truy vấn SQL: " . mysqli_error($conn);
          } else {
              // Kiểm tra kết quả trả về
              if(mysqli_num_rows($result) > 0) {
                  echo "Đăng nhập thành công";
              } else {
                  echo "Đăng nhập thất bại";
              }
          }
          }
          ?>
          <div class="border-top d-flex justify-content-center pt-3 fw-bold">
            <p>TLU'S MUSIC GARDEN</p>
          </div>
  </body>
</html>

