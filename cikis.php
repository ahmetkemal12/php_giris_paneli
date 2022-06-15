<?php
//PANEL ÇIKIŞ İŞLEMİ
 session_start();

setcookie("giris","" ,time()-1);// çerez dosyasının içi boşaltıp silindi

$_SESSION["kontrol"]=""// oturum dosyasının içi boşaltıldı

session_unset($_SESSION["kontrol"]); //oturum dosyası silindi

header("Location: index.html");

?>