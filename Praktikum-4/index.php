<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Praktikum-4</title>
</head>
<body>
    <h1>Konsep Pewarisa</h1>
    <div class= "">
        <?php
            require_once "OrangBiasa.php";
            require_once "OrangInggris.php";
            require_once "Mahasiswa.php";

            $james = new OrangBiasa();
            $james->setNama ('James Smith');
            $james->ucapSalam();

            echo "<br>";

            $rano = new OrangInggris();
            $rano->setNama('Rano Karno');
            $rano->ucapSalam();

            echo "<br>";

            $mahasiswa = new Mahasiswa();
            $mahasiswa->setNama('Emely Walker');
            $mahasiswa->setNim('701230029');

            $nilaiMahasiswa = new Nilai();
            $nilaiMahasiswa->setTugas(70);
            $nilaiMahasiswa->setUTS(67);
            $nilaiMahasiswa->setUAS(90);

            $mahasiswa->setNilai($nilaiMahasiswa);

            $mahasiswa->ucapSalam();
            $mahasiswa->tampilkanData();
            
        ?>
    </div>
</body>
</html>