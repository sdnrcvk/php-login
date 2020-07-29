
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="form.css">
    <title>Hoşgeldiniz!</title>
</head>
<body>
    
    <form action="girisyap.php" method="post">
    <fieldset>
        <legend>GİRİŞ YAP</legend>
        <label>E-posta :</label>
        <input type="email" name="mail">
        <label >Şifre :</label>
        <input type="password" name="password">
        <input class="gonder" type="submit" name="signin" value="Giriş Yap">
    </fieldset>
    </form>

    <form action="kayitol.php" method="post">
        <fieldset>
            <legend>KAYIT OL</legend>
            <label>Ad :</label>
            <input type="text" name="name">
            <label>Soyad :</label>
            <input type="text" name="surname">
            <label>E-posta :</label>
            <input type="email" name="mail">
            <label>Doğum Tarihi :</label>
            <input type="date" name="bdate">
            <label >Şifre :</label>
            <input type="password" name="password">
            <label >Şifreyi tekrarlayınız :</label>
            <input type="password" name="re_password">
             <label>Cinsiyet :</label>
            <input type="radio" name="gender" value="Erkek">
            <label for="Erkek">Erkek </label><br>
            <input type="radio" name="gender" value="Kadın">
            <label for="Kadın">Kadın </label><br>
            <input type="radio"name="gender" value="Diğer">
            <label for="Diğer">Özel </label>
            <input class="gonder" type="submit" name="signup" value="Kayıt Ol">
        </fieldset>
        </form>
    

</body>
</html>