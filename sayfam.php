<?php
session_start();

if($_SESSION['oturum']){
    echo "Merhaba , hoşgeldiniz " .$_SESSION['kadi'] ."&nbsp". $_SESSION['ksoyadi'] ;
}
else{
  header("location: form.php");
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Sayfam</title>
</head>
<body>
<form style="margin:10px;" action="oturumukapat.php" method="post">
<input type="submit" name="signout" value="Oturumu Kapat">
</form>
	
</body>
</html>