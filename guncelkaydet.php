<?php
include("kayit.php");

$ad = $_POST['ad'];
$fiyat = $_POST['fiyat'];
$durum = $_POST['durum'];
$basim_yili = $_POST['basim_yili'];

$sql = "UPDATE kitap SET ad='$ad', basim_yili='$basim_yili', durum='$durum', fiyat='$fiyat' WHERE ilan_id=" . $_GET['ilan_id'];


$cevap = mysqli_query($db, $sql);

echo "<html>";
echo "<meta http-equiv='Content-Type' ";
echo "content='text/html; charset=UTF-8' />";

if (!$cevap) {
    echo '<br>Hata:' . mysqli_error($db);
} else {
    echo "Kayıt Güncellendi.";
    echo "<br/><a href='kisiselekran.php'> Geri Dön</a>";
}
echo "</html>";

mysqli_close($db);
?>