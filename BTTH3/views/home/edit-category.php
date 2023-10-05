
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<p class="fw-bold text-center m-5 fs-3">Edit Category</p>
<form action="" method="post">
    <div>
        <table class="d-flex justify-content-center">
            <tr>
                <td>Id Category</td>
                <td><input class="ms-5 mb-2" type="text" name="idcategory" value="<?php echo $id ?>"></td>
            </tr>
            <tr>
                <td>Category title</td>

                <td><input class="ms-5 mb-2" type="text" name="categorytt" value="<?php echo $category->getTenTheLoai(); ?>"></td>
            </tr>
            <tr>
                <td><input class="mt-4 bg-success rounded-1 border-0 w-100 text-white  " type="submit" value="Edit" name="submit"></td>
            </tr>

        </table>
    </div>
</form>

        
