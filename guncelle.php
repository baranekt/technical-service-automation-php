<?php include 'header.php' ?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <title>Bilgisayar Arıza Takip</title>
</head>
<body>
    <div class="guncelle_main">
        <form action="islem.php" method="post"> 
        <input  type="hidden" name="MusteriID" value="<?php echo $musteri_cek['MusteriID']; ?>">
            <div style="margin-top:30px;" class="row mb-3">
                    <label style="margin-top:30px;" for="colFormLabel" class="col-sm-2 col-form-label">Ad:</label>
                    <div style="margin-top:30px;" class="col-sm-10">
                        <input type="text" class="form-control" name="adi" placeholder="<?php echo $musteri_cek['adi']; ?>">
                    </div>
                </div>
            <div class="row mb-3">
                    <label for="colFormLabel" class="col-sm-2 col-form-label">Soyad:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="SOYADI" placeholder="<?php echo $musteri_cek['SOYADI']; ?>">
                    </div>
                </div>
            <div class="row mb-3">
                    <label for="colFormLabel" class="col-sm-2 col-form-label">Telefon:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="TELEFON" placeholder="<?php echo $musteri_cek['TELEFON']; ?>">
                    </div>
                </div>
            <div class="row mb-3">
                    <label for="colFormLabel" class="col-sm-2 col-form-label">Mail:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="EPOSTA" placeholder="<?php echo $musteri_cek['EPOSTA']; ?>">
                    </div>
                </div>
            <div class="row mb-3">
                    <label for="colFormLabel" class="col-sm-2 col-form-label">Adres:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="ADRES" placeholder="<?php echo $musteri_cek['ADRES']; ?>">
                    </div>
                </div>
            <div class="row mb-3">
                    <label for="colFormLabel" class="col-sm-2 col-form-label">Şehir:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="SEHIR" placeholder="<?php echo $musteri_cek['SEHIR']; ?>">
                    </div>
                </div>
            <div class="row mb-3">
                    <label for="colFormLabel" class="col-sm-2 col-form-label">Semt:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="SEMT" placeholder="<?php echo $musteri_cek['SEMT']; ?>">
                    </div>
                </div>
            <div class="row mb-3">
                    <label for="colFormLabel" class="col-sm-2 col-form-label">Şİfre:</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" name="sifre" placeholder="<?php echo $musteri_cek['sifre']; ?>">
                    </div>
                </div>
            <button type="submit" class="btn btn-primary" name="duzenle">Güncelle</button>
        </form>
    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</html>
