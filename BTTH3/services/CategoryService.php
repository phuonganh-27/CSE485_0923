<?php 
include "models/Category.php";

class CategoryService{
    private $listOfCategory;
    public function getAllCategory(){
        
        $sql = "SELECT * FROM category";
        $stmt = $GLOBALS['conn']->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach ($result as $key => $value) {
            $category = new Category($value['idTheLoai'], $value['tenTheLoai']);
            $this->listOfCategory[] = $category;
        }
        return $this->listOfCategory;
    }
    public function getCategory($id){
        $sql = "SELECT * FROM category WHERE idTheLoai = :id";
        $stmt = $GLOBALS['conn']->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        $category = new Category($result['idTheLoai'], $result['tenTheLoai']);
        return $category;
    }
    public function editCategory($id, $tenTheLoai){
        $sql = "UPDATE category SET tenTheLoai = :tenTheLoai WHERE idTheLoai = :id";
        $stmt = $GLOBALS['conn']->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':tenTheLoai', $tenTheLoai);
        $stmt->execute();
    }
    public function deleteCategory($id){
        $sql = "DELETE FROM category WHERE idTheLoai = :id";
        $stmt = $GLOBALS['conn']->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }
    public function addCategory($id, $tenTheLoai){
        $sql = "INSERT INTO category (idTheLoai, tenTheLoai) VALUES (:id, :tenTheLoai)";
        $stmt = $GLOBALS['conn']->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':tenTheLoai', $tenTheLoai);
        $stmt->execute();

    }
}