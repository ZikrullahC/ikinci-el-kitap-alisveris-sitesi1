<?php

require_once "kayit.php";

if (isset($_POST["eposta"])) {
    $eposta = $_POST["eposta"];
    $sifre = $_POST["sifre"];

    $form_password_hash = hash("sha256", $sifre);

    $q = mysqli_query($db, "SELECT * FROM kullanici WHERE `eposta`='$eposta' AND `sifre`='$form_password_hash'");
    $num = mysqli_num_rows($q);

    if ($num == 0) {
        echo "Böyle bir kullanıcı bulunamadı! Şifrenizi veya eposta adresinizi kontrol ediniz.";
        exit;
    } else {
        $user = mysqli_fetch_assoc($q);
        //echo "Giriş başarılı! Hoş geldiniz, Sn. " . $user["ad"] . "...";
        header("Location: kisiselekran.php"); // Başka bir sayfaya yönlendirme
        exit;
    }
} else {

?>

<!DOCTYPE html>
<html>
<head>
    <title>Giriş Yap</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-4">
                <h1 class="text-center">Giriş Yap</h1>
                <form action="girisyap.php" method="POST">
                    <div class="form-group">
                        <label for="eposta">Eposta:</label>
                        <input type="email" class="form-control" id="eposta" name="eposta">
                    </div>

                    <div class="form-group">
                        <label for="sifre">Şifre:</label>
                        <input type="password" class="form-control" id="sifre" name="sifre">
                    </div>

                    <button type="submit" class="btn btn-success btn-block">Giriş Yap!</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

<?php
}
?>
