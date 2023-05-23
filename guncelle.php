<?php
include("kayit.php");

$sql = "SELECT * FROM kitap WHERE ilan_id=" . $_GET['ilan_id'];

$cevap = mysqli_query($db, $sql);

if (!$cevap) {
    echo '<br>Hata: ' . mysqli_error($db);
}

$gelen = mysqli_fetch_array($cevap);
?>

<!DOCTYPE html>
<html>
<head>
    <title>İlan Düzenle</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <form action="guncelkaydet.php?ilan_id=<?php echo $gelen['ilan_id']; ?>" method="POST">
            <div class="form-group">
                <label for="ad">Adı:</label>
                <input type="text" class="form-control" id="ad" name="ad" value="<?php echo $gelen['ad']; ?>">
            </div>
            <div class="form-group">
                <label for="fiyat">Fiyatı:</label>
                <input type="text" class="form-control" id="fiyat" name="fiyat" value="<?php echo $gelen['fiyat']; ?>">
            </div>
            <div class="form-group">
                <label for="durum">Durumu:</label>
                <input type="text" class="form-control" id="durum" name="durum" value="<?php echo $gelen['durum']; ?>">
            </div>
            <div class="form-group">
                <label for="basim_yili">Baskı Yılı:</label>
                <input type="text" class="form-control" id="basim_yili" name="basim_yili" value="<?php echo $gelen['basim_yili']; ?>">
            </div>

            <button type="submit" class="btn btn-primary">KAYDET</button>
        </form>
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
