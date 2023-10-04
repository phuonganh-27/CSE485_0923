<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<p class="fw-bold text-center m-5 fs-3">Edit Song</p>
<form action="" method="post">
    <div>
        <table class="d-flex justify-content-center">
            <tr>
                <td>Id song</td>
                <td><input class="ms-5 mb-2" type="text" name="idsong" value="<?php echo $id ?>"></td>
            </tr>
            <tr>
                <td>Song title</td>
                <td><input class="ms-5 mb-2" type="text" name="songtt" value="<?php echo $songs->getTenBaiHat(); ?>"></td>
            </tr>
            <tr>
                <td>Singer</td>
                <td><input class="ms-5 mb-2" type="text" name="singer" value="<?php echo $songs->getCaSi(); ?>"></td>
            </tr>
            <tr>
                <td>Id Category</td>
                <td><input class="ms-5 mb-2" type="text" name="idcategory" value="<?php echo $songs->getIdTheLoai(); ?>"></td>
            </tr>
            <tr>
                <td><input class="mt-4 bg-success rounded-1 border-0 w-100 text-white  " type="submit" value="Edit" name="submit"></td>
            </tr>

        </table>
    </div>
</form>

        
