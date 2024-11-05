<?php

class Form{
    //field = banyak input yang mau di buat
    protected $fields;

    public function __construct()
    {
        $this->fields = [];
    }

    //settextfield sebagai method
    public function setTextfield($nama, $text){
        $label= "<div class=' wrapper'><label for='".$nama."'>".$nama."</label>";
        $textfield = "<input class= 'form-input' type=text' name='" .$nama."' ></div>";
        //harus pakai this agar mengacu ke $fields
        array_push($this->fields, $label . $textfield);
    }

    public function tampilkanForm() {
        echo "<form >";
            //foreach = digunakan untuk perulangan yang datanya dalam bentuk array
            foreach($this->fields as $field) {
                echo $field;
            }
        echo "<input type= 'submit' value='simpan'>";
        echo "</form>";
    }
}
class FormMahasiswa{
}
?>