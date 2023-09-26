<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap-5.3.0-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome-free-6.4.0-web/css/all.min.css">
</head>
<body>
    <div class="border pb-4">
        <div class="header border-bottom pb-2 shadow py-3 d-flex justify-content-start ps-3">
            <p class="pe-3">Administration</p>
            <p class="pe-3">Trang chủ</p>
            <p class="pe-3">Trang ngoài</p>
            <p class="pe-3">Thể loại</p>
            <p class="pe-3">Tác giả</p>
            <p class="pe-3">Bài viết</p>
        </div>
        <div class="content m-5">
            <input type="submit" value="Thêm mới" class="bg-success rounded text-white border-0 py-1">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Tên thể loại</th>
                    <th scope="col">Sửa</th>
                    <th scope="col">Xoá</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Nhạc trữ tình</td>
                    <td><a href=""><i class="fa-solid fa-pen-to-square" style="color: #0043b8;"></i></a></td>
                    <td><a href=""><i class="fa-solid fa-trash" style="color: #0043b8;"></i></a></td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Nhạc cách mạng</td>
                    <td><a href=""><i class="fa-solid fa-pen-to-square" style="color: #0043b8;"></i></a></td>
                    <td><a href=""><i class="fa-solid fa-trash" style="color: #0043b8;"></i></a></td>
                  </tr>
                </tbody>
              </table>
        </div>
        <div class="footer border-top mt-5 d-flex justify-content-center pt-3 fw-bold">
            <p>TLU'S MUSIC GARDEN</p>
        </div>     
    </div>
</body>
</html>