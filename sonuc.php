<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Form Sonucu</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<section class="sonuc-page">

    <h1>Gönderilen Form Bilgileri</h1>

    <table border="1" cellpadding="10">
        <tr>
            <td><b>Ad Soyad</b></td>
            <td><?php echo $_POST["name"] ?? ""; ?></td>
        </tr>

        <tr>
            <td><b>Email</b></td>
            <td><?php echo $_POST["email"] ?? ""; ?></td>
        </tr>

        <tr>
            <td><b>Telefon</b></td>
            <td><?php echo $_POST["telefon"] ?? ""; ?></td>
        </tr>

        <tr>
            <td><b>Şifre</b></td>
            <td><?php echo $_POST["password"] ?? ""; ?></td>
        </tr>

        <tr>
            <td><b>Tarih</b></td>
            <td><?php echo $_POST["date"] ?? ""; ?></td>
        </tr>

        <tr>
            <td><b>Favori Renk</b></td>
            <td><?php echo $_POST["renk"] ?? ""; ?></td>
        </tr>

        <tr>
            <td><b>Memnuniyet</b></td>
            <td><?php echo $_POST["memnuniyet"] ?? ""; ?></td>
        </tr>

        <tr>
            <td><b>Cinsiyet</b></td>
            <td><?php echo $_POST["gender"] ?? ""; ?></td>
        </tr>

        <tr>
            <td><b>İlgi Alanları</b></td>
            <td>
                <?php
                if (isset($_POST["interests"])) {
                    foreach ($_POST["interests"] as $interest) {
                        echo $interest . " ";
                    }
                } else {
                    echo "Seçilmedi";
                }
                ?>
            </td>
        </tr>

        <tr>
            <td><b>Şehir</b></td>
            <td><?php echo $_POST["city"] ?? ""; ?></td>
        </tr>

        <tr>
            <td><b>Mesaj</b></td>
            <td><?php echo $_POST["mesaj"] ?? ""; ?></td>
        </tr>

        <tr>
            <td><b>Onay</b></td>
            <td><?php echo $_POST["onay"] ?? "Kabul edilmedi"; ?></td>
        </tr>
    </table>

    <br>
    <a href="iletisim.html">Forma Geri Dön</a>

</section>

</body>
</html>