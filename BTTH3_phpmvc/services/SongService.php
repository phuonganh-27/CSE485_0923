<?php
include "models/Song.php";

class SongService
{
    private $listOfSong;
    public function __construct()
    {
        $song01 = new Song('song1', 'Cuoc song', 'Nguyen Van A', '101');
        $song02 = new Song('song2', 'Anh', 'Nguyen Van B', '111');
        $song03 = new Song('song3', 'Tinh ban', 'Nguyen Van C', '121');
        $this->listOfSong[] = $song01;
        $this->listOfSong[] = $song02;
        $this->listOfSong[] = $song03;
    }

    public function getAllSong()
    {
        return $this->listOfSong;
    }
    public function addSong($id, $tenBaiHat, $caSi, $idTheLoai)
    {
        $song = new Song($id, $tenBaiHat, $caSi, $idTheLoai);
        $this->listOfSong[] = $song;
    }
}
