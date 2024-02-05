<?php 
    include 'header.php'; 
?>

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
    
    

    <div class="content">
        <div style="margin-top:30px;" class="">
            <form action='takip.php' method='post'>

                <select name="Yakıt" class="secim">
                    <option value="Ürün">Ürün seçiniz</option>
                    <option value="Masaüstü">Masaüstü</option>
                    <option value="Dizüstü">Dizüstü</option>
                    <option value="ALL İn One">All İn One</option>
                    
                </select>

                <select name="doktor" class="secim">
                    <option value="Personel">Personel Seçiniz.</option>
                    <option value="Teknisyen">Teknisyen</option>
                    <option value="Mühendis">Mühendis</option>
                </select>

                <input type="date" class="secim">

                <select name="saat" class="secim">
                    <option value="Randevu Saatini seçiniz.">Randevu Saatini seçiniz.</option>
                    <option value="09">09:00 - 10:00</option>
                    <option value="10">10:00 - 11:00</option>
                    <option value="11">11:00 - 12:00</option>
                    <option value="12">12:00 - 13:00</option>
                    <option value="14">14:00 - 15:00</option>
                    <option value="15">15:00 - 16:00</option>
                    <option value="16">16:00 - 17:00</option>
                    <option value="17">17:00 - 18:00</option>
                    <option value="18">18:00 - 19:00</option>
                </select>

                <select name="tutar" class="secim">
                    <option value="Arıza türünü seçiniz.">Arıza seçiniz.</option>
                    <option value="Yazılımsal">Yazılımsal</option>
                    <option value="Donanım">Donanım</option>
                </select>

                <select name="odeme" class="secim">
                    <option value="Ödeme türünü seçiniz.">ödeme türünü seçiniz.</option>
                    <option value="nakit">Nakit</option>
                    <option value="kredi">Kredi Kartı</option>
                    <option value="havale">Havale</option>
                </select>
                <input  type="hidden" name="musteri_id" value="<?php echo $musteri_cek['musteri_id']; ?>">

                <button style="margin-top:30px;" class="btn btn-primary btn-lg" name="randevu_kaydet">Randevuyu Kaydet</button>
            </form>
        </div>
    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</html>