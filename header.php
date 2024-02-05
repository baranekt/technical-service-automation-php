<?php 

ob_start();
session_start();

include 'baglan.php';

$musterikontrol = $db->prepare("SELECT * FROM musteri WHERE adi=:adi");
$musterikontrol->execute([
    'adi' => $_SESSION['adi']
]);
$say = $musterikontrol->rowCount();
$musteri_cek=$musterikontrol->fetch(PDO::FETCH_ASSOC);

if($say==0) {
    header('location:index.php?durum=izinsizgiris');
    exit;
} 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <title>Bilgisayar Arıza Takip</title>
</head>
<body>
    
    <div class="ust_bar">
        <a href="home.php"><h1>Bilgisayar Arıza Takip Sistemi</h1></a>
        <div class="menu">
            <a href="guncelle.php"><h4>Kayıt Arama</h4></a>
            <a href="guncelle.php"><h4>Kayıt Güncelleme</h4></a>
            <a href="takip.php"><h4>Takip Bilgilerim</h4></a>
        </div>
    </div>

    <a href="logout.php"><div class="cikis h4">
        <h4>Çıkış Yap</h4>
    </div></a>
        

    
    

</body>
</html>