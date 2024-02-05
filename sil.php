
<?php include 'header.php' ?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <title>Bilgisayar Arıza Takip</title>
</head>
<body>
    <div class="guncelle_main">
        <form action="islem.php" method="post"> 
        <input type="hidden" name="MusteriID" value="<?php echo $musteri_cek['MusteriID']; ?>">
            <div class="label">
                <label>Adınız: 
                <input type="text" name="UrunID" placeholder="<?php echo $musteri_cek['adi']; ?>"></label>
            </div>
            <div class="label">
                <label>Soy Adınız: 
                <input type="text" name="URUNADI" placeholder="<?php echo $musteri_cek['SOYADI']; ?>"></label>
            </div>
            <div class="label">
                <label>telefon : 
                <input type="text" name="SERINO" placeholder="<?php echo $musteri_cek['TELEFON']; ?>"></label>
            </div>
            <div class="label">
                <label>e posta : 
                <input type="text" name="ACIKLAMA" placeholder="<?php echo $musteri_cek['EPOSTA']; ?>"></label>
            </div>
            <div class="label">
                <label>adres : 
                <input type="text" name="BARKOD" placeholder="<?php echo $musteri_cek['ADRES']; ?>"></label>
            </div>
            <div class="label">
                <label>şehir : 
                <input type="text" name="MarkaID" placeholder="<?php echo $musteri_cek['SEHIR']; ?>"></label>
            </div>
            <div class="label">
                <label>Semt : 
                <input type="text" name="UrunKategoriID" placeholder="<?php echo $musteri_cek['SEMT']; ?>"></label>
            </div>
            <div class="label">
                <label>Şifre:
                <input type="text" name="sifre"></label>
            </div>
            <button type="submit" class="label" name="duzenle">Güncelle</button>
        </form>
    </div>

</body>
</html>
