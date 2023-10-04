<?php 
class Song{
    public $id;
    public $tenBaiHat;
    public $caSi;
    public $idTheLoai;

    public function __construct($id, $tenBaiHat, $caSi, $idTheLoai) {
        $this->id = $id;
        $this->tenBaiHat = $tenBaiHat;
        $this->caSi = $caSi;
        $this->idTheLoai = $idTheLoai;
    }

    public function getId(){
        return $this->id;
    }
    public function getTenBaiHat(){
        return $this->tenBaiHat;
    }
    public function getCaSi(){
        return $this->caSi;
    }
    public function getIdTheLoai(){
        return $this->idTheLoai;
    }

    public function setId($id){
        $this->id = $id;
    }
    public function setTenBaiHat($tenBaiHat){
        $this->tenBaiHat = $tenBaiHat;
    }
    public function setCaSi($caSi){
        $this->caSi = $caSi;
    }
    public function setIdTheLoai($idTheLoai){
        $this->idTheLoai = $idTheLoai;
    }
}

