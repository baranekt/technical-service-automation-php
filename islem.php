<?php
ob_start();
session_start();
include 'baglan.php';

if (isset($_POST["kullanici_kaydet"])) {

    $adi = isset($_POST['adi']) ? $_POST['adi'] : null;
    $SOYADI = isset($_POST['SOYADI']) ? $_POST['SOYADI'] : null;
    $TELEFON = isset($_POST['TELEFON']) ? $_POST['TELEFON'] : null;
    $EPOSTA = isset($_POST['EPOSTA']) ? $_POST['EPOSTA'] : null;
    $ADRES = isset($_POST['ADRES']) ? $_POST['ADRES'] : null;
    $SEHIR = isset($_POST['SEHIR']) ? $_POST['SEHIR'] : null;
    $SEMT = isset($_POST['SEMT']) ? $_POST['SEMT'] : null;
    $sifre = isset($_POST['sifre']) ? $_POST['sifre'] : null;

    $sorgu=$db->prepare('INSERT INTO musteri SET
		adi = ?,
		SOYADI= ?,
		TELEFON= ?,
		EPOSTA= ?,
        ADRES= ?,
        SEHIR= ?,
        SEMT= ?,
        sifre= ?
        ');
    $ekle=$sorgu->execute([
        $adi, $SOYADI, $TELEFON, $EPOSTA, $ADRES, $SEHIR , $SEMT, $sifre
		
	]);

    if ($ekle) {

		header("location:index.php?durum=Kaydınız başarıyla Gerçekleşti.");
		exit;

	} else {

	  $hata = $sorgu ->errorInfo();
      echo 'mysql hatası' .$hata[2];
	}

}


if(isset($_POST['giris_yap'])) {
    $adi = $_POST['adi'];
    $sifre = $_POST['sifre'];

    $musterikontrol = $db->prepare("SELECT * FROM musteri WHERE adi=:adi and 
    sifre=:sifre");

    $musterikontrol->execute([
        'adi' => $adi,
        'sifre' => $sifre
    ]);

    $say = $musterikontrol->rowCount();
    if ($say == 1) {
        $_SESSION['adi'] = $adi;
        header('location:home.php?durum=girisbasarili');
        exit;
    } else {
        header('location:index.php?durum=basarisizgiris');
        exit;
    }
}
    if (isset($_POST['duzenle'])) {
        $duzenle = $db->prepare("UPDATE musteri SET
    adi =:adi,
    SOYADI=:SOYADI,
    TELEFON=:TELEFON,
    EPOSTA=:EPOSTA,
    ADRES=:ADRES,
    SEHIR=:SEHIR,
    SEMT=:SEMT,
    sifre=:sifre
    WHERE MusteriID={$_POST['MusteriID']}");

        $update = $duzenle->execute(array(
            'adi' => $_POST['adi'],
            'SOYADI' => $_POST['SOYADI'],
            'TELEFON' => $_POST['TELEFON'],
            'EPOSTA' => $_POST['EPOSTA'],
            'ADRES' => $_POST['ADRES'],
            'SEHIR' => $_POST['SEHIR'],
            'SEMT' => $_POST['SEMT'],
            'sifre' => $_POST['sifre']
        ));
        if ($update) {
            header("Location:guncelle.php?islem_basarili");
        } else {
            header("Location:guncelle.php?islem_basarisiz");
        }

}

?>