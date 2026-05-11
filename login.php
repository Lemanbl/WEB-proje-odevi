<?php

$email = $_POST["email"] ?? "";
$password = $_POST["password"] ?? "";

$mailParcala = explode("@", $email);

$ogrenciNo = $mailParcala[0] ?? "";

$mailKontrol = str_ends_with($email, "@sakarya.edu.tr");

if ($mailKontrol && $ogrenciNo == $password) {

    echo "<h1>Hoşgeldiniz $ogrenciNo</h1>";
    echo "<a href='index.html'>Ana Sayfaya Dön</a>";

} else {

    echo "
    <script>
        alert('Email veya şifre hatalı!');
        window.location.href='login.html';
    </script>
    ";

}

?>