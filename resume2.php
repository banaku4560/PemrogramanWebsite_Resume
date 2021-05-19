<?php 
// untuk menghubungkan dengan file tabung
require 'Tabung.php';
$tabung = new Tabung;
// mengset button submit
if (isset($_POST['btnSubmit'])){
    $tabung->setDiameter($_POST['diameter']);
    $tabung->setTinggi($_POST['tinggi']);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <label for="">Diameter Alas</label>
        <input type="text" name="diameter"> <br>
        <label for="">Tinggi Tabung</label>
        <input type="text" name="tinggi"> <br><br>
        <button name="btnSubmit">Hitung</button>
    </form> 
    <hr>
        <ul>
            <li>Luas Selimut : <?php echo $tabung->getLuasSelimut() ?></li>
            <li>Volume : <?php ?></li>
        </ul>
</body>
</html>