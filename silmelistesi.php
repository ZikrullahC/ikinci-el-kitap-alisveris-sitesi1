<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <?php
        include("kayit.php");

        $sql = "SELECT * FROM kitap";
        $cevap = mysqli_query($db, $sql);

        if (!$cevap) {
            echo '<br>Hata:' . mysqli_error($db);
        } else {
            echo '<table class="table">';
            echo '<thead class="thead-light">';
            echo '<tr>';
            echo '<th scope="col">Ad</th>';
            echo '<th scope="col">Fiyat</th>';
            echo '<th scope="col">Durum</th>';
            echo '<th scope="col">Ilan ID</th>';
            echo '<th scope="col"></th>';
            echo '</tr>';
            echo '</thead>';
            echo '<tbody>';

            while ($gelen = mysqli_fetch_array($cevap)) {
                echo '<tr>';
                echo '<td>' . $gelen['ad'] . '</td>';
                echo '<td>' . $gelen['fiyat'] . '</td>';
                echo '<td>' . $gelen['durum'] . '</td>';
                echo '<td>' . $gelen['ilan_id'] . '</td>';
                echo '<td><a href="ilansil.php?id=' . $gelen['ilan_id'] . '">Sil</a></td>';
                echo '</tr>';
            }

            echo '</tbody>';
            echo '</table>';
            echo '<br/><a class="btn btn-primary" href="kisiselekran.php">Geri Dön</a>';
        }

        mysqli_close($db);
        ?>
    </div>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
