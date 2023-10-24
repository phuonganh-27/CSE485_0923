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
            header("location:index.php?c=home&a=index");
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
            header("location:index.php?c=home&a=showcategory");
        }
    }

    public function editcategory(){
        include "services/CategoryService.php";
        $id=$_GET["idcategory"];
        $categoryService = new CategoryService();
        $category = $categoryService->getCategory($id);
        include "views/home/edit-category.php";
        if (isset($_POST["submit"])) {
            // Lấy dữ liệu từ biểu mẫu
            $id = $_POST["idcategory"];
            $tenTheLoai = $_POST["categorytt"];
            $categoryService = new CategoryService();
            $categoryService->editCategory($id, $tenTheLoai);
            header("location:index.php?c=home&a=showcategory");
        }
    }
    public function deletecategory(){
        include "services/CategoryService.php";
        $categoryService = new CategoryService();
            $id = $_GET["idcategory"];
            $categoryService->deleteCategory($id);
            header("location:index.php?c=home&a=showcategory");
    }
    public function editsong(){

        include "services/CategoryService.php";
        include "services/SongService.php";
        $songService = new SongService();
        $id=$_GET["idsong"];
        $song = $songService->getSong($id);
        include "views/home/edit-song.php";
        if (isset($_POST["submit"])) {
            // Lấy dữ liệu từ biểu mẫu
            $id = $_POST["idsong"];
            $tenBaiHat = $_POST["songtt"];
            $caSi = $_POST["singer"];
            $idTheLoai = $_POST["idcategory"];
            $songService = new SongService();
            $songService->editSong($id, $tenBaiHat, $caSi, $idTheLoai);
            header("location:index.php?c=home&a=index");
        }

    }
    public function deletesong()
    {
        include "services/SongService.php";
        $songService = new SongService();
            $id = $_GET["idsong"];
            $songService->deleteSong($id);
            header("location:index.php?c=home&a=index");
    }
}
