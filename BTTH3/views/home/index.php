<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="stylesheet" href="./bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>

<body>
    <p class="fw-bold fs-4 d-flex justify-content-center mt-2">Song</p>
    <a href="http://localhost/PHP/CSE485_0923/BTTH3/index.php?c=home&a=addsong"><button class="btn btn-success mb-3"> Add song</button></a>
    <a href="http://localhost/PHP/CSE485_0923/BTTH3/index.php?c=home&a=showcategory"><button class="btn btn-success mb-3">Category</button></a>
    <div>
        <table class="table">
            <thead>
                <th scope="col">ID</th>
                <th scope="col">Song title</th>
                <th scope="col">Name Singer</th>
                <th scope="col">ID Category</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>

            </thead>
            <tbody>
                <?php
                foreach ($songs as $song) { ?>
                    <tr>
                        <td><?php echo $song->getid(); ?></td>
                        <td><?php echo $song->getTenBaiHat(); ?></td>
                        <td><?php echo $song->getCaSi(); ?></td>
                        <td><?php echo $song->getIdTheLoai(); ?></td>
                        <td><a href="http://localhost/PHP/CSE485_0923/BTTH3/index.php?c=home&a=editsong&idsong=<?php echo $song->getid();?>"><i class="bi bi-pencil-square"></i></a></td>
                        
                        <td><a href=""><i class="bi bi-trash3-fill"></i></a></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>

</html>