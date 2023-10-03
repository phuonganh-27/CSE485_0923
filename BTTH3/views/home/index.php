<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="stylesheet" href="./bootstrap.min.css">
</head>

<body>
    <a href="http://localhost/BTTH3/index.php?c=home&a=addsong"><button class="btn btn-success"> Add song</button></a>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Category</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($categorys as $ctg) { ?>
                    <tr>
                        <td scope="row"><?php echo $ctg->getId(); ?></td>
                        <td><?php echo $ctg->getTenTheLoai(); ?></td>
                    </tr>
                <?php }
                ?>

            </tbody>
        </table>
    </div>

    <div>
        <table class="table">
            <thead>
                <th scope="col">ID</th>
                <th scope="col">Name song</th>
                <th scope="col">Name Singer</th>
                <th scope="col">ID Category</th>
            </thead>
            <tbody>
                <?php
                foreach ($songs as $song) { ?>
                    <tr>
                        <td><?php echo $song->getid(); ?></td>
                        <td><?php echo $song->getTenBaiHat(); ?></td>
                        <td><?php echo $song->getCaSi(); ?></td>
                        <td><?php echo $song->getIdTheLoai(); ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>

</html>