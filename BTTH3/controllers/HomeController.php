<?php
class HomeController
{
    public function index()
    {
        include "services/SongService.php";
        $songService = new SongService();
        $songs = $songService->getAllSong();
        include "views/home/index.php";
    }
    //function show category

    public function showcategory()
    {
        include "services/CategoryService.php";
        $categoryService = new CategoryService();
        $categories = $categoryService->getAllCategory();
        include "views/home/category.php";
    }
    public function addsong()
    {
        include "services/CategoryService.php";
        include "services/SongService.php";
        include "views/home/add.php";
        if (isset($_POST["submit"])) {
            // Lấy dữ liệu từ biểu mẫu
            $id = $_POST["idsong"];
            $tenBaiHat = $_POST["songtt"];
            $caSi = $_POST["singer"];
            $idTheLoai = $_POST["idcategory"];
            $songService = new SongService();
            $songService->addSong($id, $tenBaiHat, $caSi, $idTheLoai);


        }
        
    }
    public function deletesong()
    {
        include "services/SongService.php";
        $songService = new SongService();
        $songs = $songService->getAllSong();
        include "views/home/delete.php";
        if (isset($_POST["submit"])) {
            // Lấy dữ liệu từ biểu mẫu
            $id = $_POST["idsong"];
            $songService->deleteSong($id);
        }
    }
}
