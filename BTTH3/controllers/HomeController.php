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
        $categorys = $categoryService->getAllCategory();
        include "views/home/index-category.php";
    }
    public function addsong()
    {
        include "services/CategoryService.php";
        include "services/SongService.php";
        include "views/home/add-song.php";
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
    public function addcategory(){
        include "services/CategoryService.php";
        include "views/home/add-category.php";
        if (isset($_POST["submit"])) {
            // Lấy dữ liệu từ biểu mẫu
            $id = $_POST["idcategory"];
            $tenTheLoai = $_POST["categorytt"];
            $categoryService = new CategoryService();
            $categoryService->addCategory($id, $tenTheLoai);
        }
    }

    public function editsong(){

        include "services/CategoryService.php";
        include "services/SongService.php";
        $songService = new SongService();
        $songs = $songService->getAllSong();
        $id=$_GET["idsong"];
        include "views/home/edit-song.php";
        if (isset($_POST["submit"])) {
            // Lấy dữ liệu từ biểu mẫu
            $id = $_POST["idsong"];
            $tenBaiHat = $_POST["songtt"];
            $caSi = $_POST["singer"];
            $idTheLoai = $_POST["idcategory"];
            $songService->editSong($id, $tenBaiHat, $caSi, $idTheLoai);
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
