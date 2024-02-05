<?php include 'header.php'; ?>

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
    
    <table class="table table-striped">
        <tr>
            <td class="table-dark">FaturaID</td>
            <td class="table-dark">ALISTARIHI</td>
            <td class="table-dark">TESLIMTARIHI</td>
            <td class="table-dark">FIYAT</td>
            <td class="table-dark">ACIKLAMA</td>
            <td class="table-dark">PersonelID</td>
            <td class="table-dark">MusteriID</td>
            <td class="table-dark"></td
        </tr>

        <?php
        $fatura_getir = $db->prepare("SELECT * FROM fatura INNER JOIN musteri ON fatura.MusteriID = musteri.MusteriID WHERE adi=:adi");
        $fatura_getir->execute([
            'adi' => $_SESSION['adi']
        ]);
        while ($fatura_cek = $fatura_getir->fetch(PDO::FETCH_ASSOC)) { ?>

        <tr>
            <td class="table-primary"><?php echo $fatura_cek['FaturaID']; ?></td>
            <td class="table-primary"><?php echo $fatura_cek['ALISTARIHI']; ?></td>
            <td class="table-primary"><?php echo $fatura_cek['TESLIMTARIHI']; ?></td>
            <td class="table-primary"><?php echo $fatura_cek['FIYAT']; ?></td>
            <td class="table-primary"><?php echo $fatura_cek['ACIKLAMA']; ?></td>
            <td class="table-primary"><?php echo $fatura_cek['PersonelID']; ?></td>
            <td class="table-primary"><?php echo $fatura_cek['MusteriID']; ?></td>
            <td class="table-primary"><a href="takip.php?sil=<?php echo $fatura_cek['FaturaID']; ?>"><button type="submit" class="btn btn-danger" name="sil">Sil</button></a></td>
        </tr>

        <?php
            if(@$_GET["sil"]) {
                $id = $_GET["sil"];

                $sil = $db -> prepare("DELETE FROM fatura WHERE FaturaID=:id");
                $sil -> execute(array(":id" => $id));

                if($sil) {
                    header("Location:takip.php?islem_basarili" );
                }
                else {
                    header("Location:takip.php?islem_basarisiz" );
                }

            }?>

        <?php } ?>
    </table>
    </table>



    
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</html>