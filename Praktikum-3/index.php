<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .fs-45{
            font-size: 45px;
        }
    </style>
    <title>Praktikum-3</title>
</head>
<body>
    <div class="">
        <?php
            include "Visibility.php";

            $visibility = new Visibility();
            $visibility->tampilkanData();

            echo "<br>";

            echo "Akses diluar kelas";
            echo "Public: " . $visibility->public . "<br>";
            //echo "Private: " . $visibility->Private . "<br>";
            //echo "Protected: " . $visibility->Protected . "<br>";
            echo "<br> <br>";
            echo "<h2> Konsep Pewarisan </h2>";

            include "Mahasiswa.php";

            $mahasiswa = new Mahasiswa("Khaila Aura Nurulhadi");
            $mahasiswa->ucapSalam();

            $mahasiswaInggris = new MahasiswaAsing("Mark Lee");
            $mahasiswaInggris->ucapSalam();
        ?>
    </div>
</body>
</html>