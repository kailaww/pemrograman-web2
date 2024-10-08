<?php

require_once "Buku.php";

class DaftarBuku{

    public function getData(){
        $daftar_buku = array(
            new Buku('Belajar Pemrograman Web', 'Emely w.', 'Informatika', '2024'),
            new Buku('Matematika Diskrit', 'Rinaldi Munir', 'Andi Publisher', '2020'),
            new Buku('Kalkulus', 'Robert T.', 'Erlangga', '2019'),
            new Buku('Metedologi Penelitian', 'James W.','Pustaka UIN', '2024'),
        );

        return $daftar_buku;
    }

    public function getKolomTabel(){
        return array('No', 'Judul', 'Pengarang', 'Penerbit', 'Tahun');
    }
}

