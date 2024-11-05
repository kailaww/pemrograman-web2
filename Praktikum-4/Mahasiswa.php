<?php
require_once "Orang.php";
require_once "Nilai.php";

class Mahasiswa extends Orang {
    //Nilai = tipe datanya (boleh int atau string)
    protected $nim;
    protected Nilai $nilai;

    public function setNim($nim) 
    {
        $this->nim = $nim;
    }
    public function setNilai($nilai){
        $this->nilai = $nilai;
    }
    //return = kata kunci yang digunakan untuk mengembalikan nilai dari sebuah function
    public function getNim(){
        return $this->nim;
    }
    public function getNilai(){
        return $this->nilai;
    }
    public function tampilkanData(){
        echo "Nama : " . $this->nama . "<br>";
        echo "Nim : " . $this->nim . "<br>";
        echo "Nilai Tugas : " . $this->nilai->getTugas() . "<br>";
        echo "Nilai UTS : " . $this->nilai->getUTS() . "<br>";
        echo "Nilai UAS : " . $this->nilai->getUAS() . "<br>";
    }
}
?>