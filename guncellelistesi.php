<?php
include("kayit.php");

$sql = "SELECT * FROM kitap";
$cevap = mysqli_query($db, $sql);

if (!$cevap) {
    echo '<br>Hata: ' . mysqli_error($db);
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>İlan Listesi</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Ad</th>
                    <th scope="col">Fiyat</th>
                    <th scope="col">Durum</th>
                    <th scope="col">İlan ID</th>
                    <th scope="col">Güncelle</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($gelen = mysqli_fetch_array($cevap)) { ?>
                    <tr>
                        <td><?php echo $gelen['ad']; ?></td>
                        <td><?php echo $gelen['fiyat']; ?></td>
                        <td><?php echo $gelen['durum']; ?></td>
                        <td><?php echo $gelen['ilan_id']; ?></td>
                        <td><a href="guncelle.php?ilan_id=<?php echo $gelen['ilan_id']; ?>">Güncelle</a></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>

        <a class="back-link" href="kisiselekran.php">Geri Dön</a>
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

<?php
mysqli_close($db);
?>
