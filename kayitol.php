<?php
include 'baglan.php';


if(isset($_POST['signup'])){
    if (!empty($_POST['name'])){
        $name = $_POST['name'];
        if(!empty($_POST['surname'])){
            $sname=$_POST['surname'];
            if(!empty($_POST['mail'])){
                $mail = $_POST['mail'];
                if(filter_var($mail,FILTER_VALIDATE_EMAIL)){
                    $uye=$db->prepare("SELECT id FROM users WHERE email=? ");
                    $uye->execute([$mail]);
                    $mailDurum=$uye->rowCount();
                    if(!$mailDurum){
                        if(!empty($_POST['bdate'])){
                            $bdate=$_POST['bdate'];
                            if(!empty($_POST['password'])){
                                $psw = $_POST['password'];
                                $re_psw=$_POST['re_password'];
                                if($psw==$re_psw){
                                    $gender=$_POST['gender'];
                                    if(!empty($_POST['gender'])){ 
                                        $kayit_ol=$db->prepare("INSERT INTO users (`name`,`surname`,`email`,`bdate`,`password`,`gender`) VALUES (?,?,?,?,?,?)");
                                        $selam = $kayit_ol->execute([$name,$sname,$mail,$bdate,md5($psw),$gender]);
                                        if(!$selam){
                                            //var_dump($kayit_ol->errorInfo());   
                                            echo "Bir hata oluştu geçmiş olsun.";
                                        }
                                        else{
                                        echo "Kayıt yapıldı.";
                                        header('Location: form.php');
                                        }
                                    } 
                                    else{
                                        echo "Cinsiyet seçiniz!";
                                    }     
                                }   
                                else{
                                    echo "Girilen şifreler farklı! Tekrar giriniz.";
                                }
                            }
                            else{
                                echo "Şifre giriniz!";
                            }
                        }
                        else{
                            echo "Doğum tarihi giriniz!";
                        }
                    }

                    else{
                        echo "Farklı bir e-posta giriniz!";
                    }
                }
                else{
                    echo "Geçerli bir e-posta giriniz!";
                }
            }
            else{
            echo "E-posta giriniz!";
            }
        }
        else{
            echo "Soyadınızı giriniz!";
        }
    }
    else{
        echo "Adınızı giriniz!";
    }

}
else{
    echo "Bilgileri eksiksiz doldurunuz!";
}

?>