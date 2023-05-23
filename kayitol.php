<?php

require_once('kayit.php');

if (isset($_POST["kullanici_adi"])) {
    $kullanici_adi = $_POST["kullanici_adi"];
    $ad = $_POST["ad"];
    $soyad = $_POST["soyad"];
    $eposta = $_POST["eposta"];
    $sifre = $_POST["sifre"];

    $uzunluk = strlen($sifre);

    if ($uzunluk < 6 || $uzunluk > 15) {
        echo "Şifre en az 6, en fazla 15 karakterden oluşmalıdır!";
        exit();
    }

    $sifre_hash = hash("sha256", $sifre);

    $sql = "INSERT INTO `kullanici` (`ad`, `soyad`, `eposta`, `sifre`,`kullanici_adi`) VALUES ('$ad', '$soyad', '$eposta', '$sifre_hash','$kullanici_adi')";

    mysqli_query($db, $sql);

    if (mysqli_errno($db) != 0) {
        echo "Bir hata meydana geldi!";
        exit;
    }

    header("Location: kisiselekran.php");
}

else {

?>

<html>

<head>
    <title>Kayıt Ol</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h1 class="text-center">Kayıt Ol</h1>
        <form action="kayitol.php" method="POST">
        <div class="row justify-content-center">

            <div class="col-lg-4">
            <div class="form-group">
                <label for="ad">Ad:</label>
                <input type="text" id="ad" name="ad" class="form-control">
            </div>
            <div class="form-group">
                <label for="soyad">Soyad:</label>
                <input type="text" id="soyad" name="soyad" class="form-control">
            </div>
            <div class="form-group">
                <label for="kullanici_adi">Kullanıcı Adı:</label>
                <input type="text" id="kullanici_adi" name="kullanici_adi" class="form-control">
            </div>
            <div class="form-group">
                <label for="sifre">Şifre:</label>
                <input type="password" id="sifre" name="sifre" class="form-control">
            </div>
            <div class="form-group">
                <label for="eposta">Eposta:</label>
                <input type="email" id="eposta" name="eposta" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Kayıt Ol</button>
            </div>
        </div>
        </form>
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>

<?php

}

?>