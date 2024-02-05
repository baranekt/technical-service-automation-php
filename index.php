
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
	
	<header>
		<h1>Bilgisayar Arıza Takip Sistemi</h1>
	</header>

	<div class="uyeol_tablo">
		<h1>Giriş Yap</h1>
		<form action="islem.php" method="post">

			<div class="usertc">
				<input class="form-control" style="margin-bottom:10px;" type="text" name="adi" placeholder="Adınızı Giriniz:">
			</div>

			<div class="userpass">
				<input class="form-control" type="password" style="margin-bottom:10px;" name="sifre" placeholder="Şifrenizi Giriniz:">
			</div>

			<button type="submit" class="btn btn-primary" style="margin-bottom:10px;" name="giris_yap">Giriş Yap</button>
			
		</form>

            <a href="uye.php"><button type="submit" class="btn btn-success">Üye Ol</button></a>
		
	</div>



</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</html>