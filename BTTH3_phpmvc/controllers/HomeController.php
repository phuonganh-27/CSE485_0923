<?php
class HomeController
{
    public function index()
    {
        include "services/CategoryService.php";
        include "services/SongService.php";
        $ctgServive = new CategoryService();
        $categorys = $ctgServive->getAllCategory();
        $songService = new SongService();
        $songs = $songService->getAllSong();
        include "views/home/index.php";
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

            $songs = $songService->addSong($id, $tenBaiHat, $caSi, $idTheLoai);
        }
    }
}
