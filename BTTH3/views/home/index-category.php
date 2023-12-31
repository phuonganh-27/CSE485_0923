<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>
<body>
<div>
    <p class="fw-bold fs-4 d-flex justify-content-center mt-2">Category</p>
    <a href="http://localhost/PHP/CSE485_0923/BTTH3/index.php?c=home&a=index"><button class="btn btn-success mb-3">Song</button></a>
    
    <a href="http://localhost/PHP/CSE485_0923/BTTH3/index.php?c=home&a=addcategory"><button class="btn btn-success mb-3">Add Category</button></a>
        <table class="table">
            <thead>
                <th scope="col">ID</th>
                <th scope="col">Category</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
            </thead>
            <tbody>
                <?php
                foreach ($categorys as $ctg) { ?>
                    <tr>
                        <td><?php echo $ctg->getid(); ?></td>
                        <td><?php echo $ctg->getTenTheLoai(); ?></td>
                        <td><a href="http://localhost/PHP/CSE485_0923/BTTH3/index.php?c=home&a=editcategory&idcategory=<?php echo $ctg->getid();?>"><i class="bi bi-pencil-square"></i></a></td>
                        <td><a href="http://localhost/PHP/CSE485_0923/BTTH3/index.php?c=home&a=deletecategory&idcategory=<?php echo $ctg->getid();?>"><i class="bi bi-trash3-fill"></i></a></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>