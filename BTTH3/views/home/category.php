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
    <a href=""><button class="btn btn-success">Add Category</button></a>
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
                        <td><a href=""><i class="bi bi-pencil-square"></i></a></td>
                        <td><a href=""><i class="bi bi-trash3-fill"></i></a></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>