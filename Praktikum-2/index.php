<?php
include "orang.php";
include "BankCustomer.php";
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hello Praktikum 2</h1>
    <div class="di">
        <?php
           $nasabah = new BankCustomer();
           $nasabah->setCustomerName('Diva Smith');
           $nasabah->setAddress('Kuburan Cino, Jambi');
           $nasabah->setEmail('divsmith@gmail.com');
           $nasabah->setCard('American Black card');
           $nasabah->setAcc('Wadiah');

           $nasabah->insertCard();
           $nasabah->enterPIN(242402);
        ?>
    </div>
</body>
</html>
<!-- localhost/index.php?nama=Kaila -->
