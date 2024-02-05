<?php

try {


	$db=new PDO("mysql:host=localhost;dbname=arizakaydi;charset=utf8",'root','12345678');
	
	


}
catch (PDOException $e) {
	echo "Bağlantı hatası: " . $e->getMessage();
}

?>