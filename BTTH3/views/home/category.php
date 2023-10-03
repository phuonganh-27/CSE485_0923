<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <class="container">
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
</body>
</html>