<?php 
// PANEL İÇ SAYFA
session_start();

if($_COOKIE["giris"] != sha1(md5("ibb")) || $_SESSION["kontrol"] != sha1(md5("ismek")) ) {
    header("Location: index.html");
    die("Yetkisiz Giris!");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Üye Paneli İç Sayfa</title>
    <style>

        body{
            text-align: center;
            padding-top: 50px;
            
        }
    </style>
</head>
<body >

<a href="anasayfa.php">Ana Sayfa</a> - <a href="icsayfa.php">İç Sayfa</a> - <a href="cikis.php">Çıkış Sayfası</a>
<br><br><hr><br><br>
<p>Merhaba, İç Sayfaya Hoş Geldiniz</p>

        

</body>
</html>
