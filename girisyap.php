<?php
session_start();
include 'baglan.php';

$mail=$_POST['mail'];
$password=$_POST['password'];
$hashpass=md5($password);

$girissor=$db->prepare("SELECT * FROM users WHERE email= ?");
$girissor->execute([$mail]);
$giris=$girissor->fetch(PDO::FETCH_ASSOC);

if(isset($_POST['signin'])){
    if (isset($giris['email'])){
       
        if($hashpass==$giris['password']){     
            echo "giris yapildi.";
            $_SESSION['oturum'] = true;
            $_SESSION['kadi']=$giris['name'];
            $_SESSION['ksoyadi']=$giris['surname'];
            header("location: sayfam.php");
        }
        else{
            echo 'Şifre giriniz!';
        }
    }
    else{
        echo "E-posta giriniz!";
    }

}
else{
    echo "Bilgileri eksiksiz doldurunuz!";
}






?>
