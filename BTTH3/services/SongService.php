<?php
include "config/database.php";
include "models/Song.php";

class SongService
{
    private $listOfSong;
    public function getAllSong()
    {
        //PDO
        $sql = "SELECT * FROM song";
        $stmt = $GLOBALS['conn']->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach ($result as $key => $value) {
            $song = new Song($value['id'], $value['tenBaiHat'], $value['caSi'], $value['idTheLoai']);
            $this->listOfSong[] = $song;
        }
        return $this->listOfSong;
    }
    public function getSong($id){
        $sql = "SELECT * FROM song WHERE id = :id";
        $stmt = $GLOBALS['conn']->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        $song = new Song($result['id'], $result['tenBaiHat'], $result['caSi'], $result['idTheLoai']);
        return $song;
    }
    
    public function addSong($id, $tenBaiHat, $caSi, $idTheLoai)
    {
        $sql = "INSERT INTO song (id, tenBaiHat, caSi, idTheLoai) VALUES (:id, :tenBaiHat, :caSi, :idTheLoai)";
        $stmt = $GLOBALS['conn']->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':tenBaiHat', $tenBaiHat);
        $stmt->bindParam(':caSi', $caSi);
        $stmt->bindParam(':idTheLoai', $idTheLoai);
        $stmt->execute();
    
    }
    public function editSong($id, $tenBaiHat, $caSi, $idTheLoai)
    {

        $sql = "UPDATE song SET tenBaiHat = :tenBaiHat, caSi = :caSi, idTheLoai = :idTheLoai WHERE id = :id";
        $stmt = $GLOBALS['conn']->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':tenBaiHat', $tenBaiHat);
        $stmt->bindParam(':caSi', $caSi);
        $stmt->bindParam(':idTheLoai', $idTheLoai);
        $stmt->execute();

        
    }
    
  
    public function deleteSong($id)
    {

        $sql = "DELETE FROM song WHERE id = :id";
        $stmt = $GLOBALS['conn']->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }
}
