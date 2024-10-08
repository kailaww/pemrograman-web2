<?php

require_once "Model/DaftarBuku.php";

class BukuController{

    public function jalankan(){
        // mengakses model
        $data = new DaftarBuku();
        
        // memberi data modelke view dan menampilkan view
        include("View/BukuView.php");
    }
}