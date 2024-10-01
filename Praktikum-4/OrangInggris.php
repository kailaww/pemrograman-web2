<?php

require_once "Orang.php";

class OrangInggris extends Orang{

    //Override (agar bisa menindih file baru) (kenapa dari orang bisa diwariskan ke orang inggris, karena sudah di extends dan oeang inggris pun menjadi cucunya orang, sementara orang biasa adalah anaknya orang)
    public function ucapSalam()
    {
        echo "Hello My Name's " . $this->nama . "<br>";
    }
    
}