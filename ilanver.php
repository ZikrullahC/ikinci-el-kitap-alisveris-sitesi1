<?php
include('kayit.php');

if (isset($_POST["ad"])) {
    $kitap_ad = $_POST["ad"];
    $yil = $_POST["basim_yili"];
    $durum = $_POST["durum"];
    $fiyat = $_POST["fiyat"];
    // $tur=$_POST["tur"];

    $sql = "INSERT INTO `kitap` (`ad`, `basim_yili`, `durum`, `fiyat`) VALUES ('$kitap_ad', '$yil', '$durum', '$fiyat')";

    mysqli_query($db, $sql);

    if (mysqli_errno($db) != 0) {
        echo "Bir hata meydana geldi!";
        exit;
    }

    echo "İlan verildi!<br>";
    echo "Anasayfaya dönmek için <a href='kisiselekran.php'>tıklayınız</a>";

} else {
?>

<html>

<head>
    <title>İlan Ver</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h1 class="text-center">İlan Ver</h1>
        <form action="ilanver.php" method="POST">
        <div class="row justify-content-center">
            <div class="col-lg-4">

            <div class="form-group">
                <label for="ad">Ad:</label>
                <input type="text" name="ad" id="ad" class="form-control">
            </div>
            <div class="form-group">
                <label for="basim_yili">Basım Yılı:</label>
                <input type="text" name="basim_yili" id="basim_yili" class="form-control">
            </div>
            <div class="form-group">
                <label for="durum">Durumu:</label>
                <input type="text" name="durum" id="durum" class="form-control">
            </div>
            <div class="form-group">
                <label for="fiyat">Fiyat:</label>
                <input type="text" name="fiyat" id="fiyat" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">İlan Ver!</button>
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
