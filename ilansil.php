<?php

include('kayit.php');

$sql="DELETE FROM kitap WHERE ilan_id=".$_GET['id'];    

$cevap=mysqli_query($db,$sql);

echo "<html>";
//türkçe karakterleri düzgün görüntüleyebilmek için eklenmiştir.

echo "<meta http-equiv='Content-Type' ";
echo "content='text/html; charset=UTF-8' />";

if(!$cevap){
    echo "<br/>Hata:".mysqli_error($db);
}

else{
    echo "Kayit silindi!</br>";
    echo "<a href='silmelistesi.php'>İlan Listesini Görüntüle</a>\n";
}

echo "</html>";

mysqli_close($db);
?>