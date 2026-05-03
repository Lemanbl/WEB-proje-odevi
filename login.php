<?php

$dogruMail = "b241210576@sakarya.edu.tr";
$dogruSifre = "b241210576";

$email = $_POST["email"] ?? "";
$password = $_POST["password"] ?? "";

if ($email == $dogruMail && $password == $dogruSifre) {
    echo "<h1>Hoşgeldiniz b241210576</h1>";
    echo "<a href='index.html'>Ana sayfaya dön</a>";
} else {
    echo "<script>
            alert('Hatalı giriş yaptınız.');
            window.location.href = 'login.html';
          </script>";
}

?>