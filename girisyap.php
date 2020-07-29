<?php
session_start();
include 'baglan.php';


if(isset($_POST['signin'])){
$mail=$_POST['mail'];
$girissor=$db->prepare("SELECT * FROM users WHERE email= ?");
$girissor->execute([$mail]);
$giris=$girissor->fetch(PDO::FETCH_ASSOC);
    if (!empty($giris['email'])){
        $password=$_POST['password'];
        $hashpass=md5($password);   
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
