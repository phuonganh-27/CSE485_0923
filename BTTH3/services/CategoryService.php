<?php 
include "models/Category.php";

class CategoryService{
    private $listOfCategory;
    public function __construct(){
        $ctg01 = new Category('101', 'Nhac Tru tinh');
        $ctg02 = new Category('111', 'Nhac Rap');
        $ctg03 = new Category('121', 'Nhac trẻ');
        $this->listOfCategory[] = $ctg01;
        $this->listOfCategory[] = $ctg02;
        $this->listOfCategory[] = $ctg03;

    }
    public function getAllCategory(){
        return $this->listOfCategory;
    }

    public function addCategory($id, $tenTheLoai){
        $category = new Category($id, $tenTheLoai);
        $this->listOfCategory[] = $category;
        return $this->listOfCategory;
    }
}