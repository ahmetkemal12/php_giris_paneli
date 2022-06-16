<?php
    //PANEL GİRİŞ İŞLEMLERİ
    
    session_start();


   $username = $_POST["username"];
   $userpassword = $_POST["userpassword"];

   //Veritabanı Bağlantısı Kurulup, Bu Bilgilere Sahip Kullanıcı Kontrol Edilir

    $kullanicilar = array("ahmet","mehmet","tarik");

    

   //if($username =="admin" && $userpassword=="1234"){
    

    if(in_array($username,$kullanicilar) && $userpassword=="1234"){

    $kontrol = sha1(md5("ibb"));//kısmi güvenlik için bir veri şifrelendi

    setcookie("giris",$kontrol ,time()+60*60);// Üye giriş kontrolü için 1 saatlik çerez
    
    $_SESSION["kontrol"]=sha1(md5("ismek")); // Üye giriş kontrolü için oturum değişkeni

    header("Location: anasayfa.php");
    

   }
   else{
    
   // header("Location: index.html"); PHP için hata yönlendirme
    echo "
    <script> 
    /* Kullancıya hata mesajı vermek için JS kullanma yöntemi */
    alert('Hatalı İşlem');
    window.location.href='index.html';
    </script>
    ";
   }
?>
