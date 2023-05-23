<?php
include('kayit.php');

$sql = "SELECT * FROM kitap";
$cevap = mysqli_query($db, $sql);

if (!$cevap) {
    echo "Hata: " . mysqli_error($db);
}

?>

<html>
<head>
    <title>İlan Listesi</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>İlan Listesi</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Ad</th>
                    <th scope="col">Basım Yılı</th>
                    <th scope="col">Durum</th>
                    <th scope="col">Fiyat</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($gelen = mysqli_fetch_array($cevap)) { ?>
                    <tr>
                        <td><?php echo $gelen['ad']; ?></td>
                        <td><?php echo $gelen['basim_yili']; ?></td>
                        <td><?php echo $gelen['durum']; ?></td>
                        <td><?php echo $gelen['fiyat']; ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        <a href="kisiselekran.php" class="back-link">&lt; Geri Dön</a>
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

<?php
mysqli_close($db);
?>
