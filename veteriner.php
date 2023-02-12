

<?php
require_once "db.php";
require_once "header.php";

echo "<br>";
 echo "<div class='alert alert-info' role='alert'>";
 echo "Eğer hizmet vermek isterseniz bize mail yolu ile ulaşınız.";
echo "</div>";

$sql = "SELECT * FROM veteriner";
$stmt = $conn->prepare($sql);
$stmt->execute();

$veterinerler = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach($veterinerler as $veteriner){
    echo "<ul class='list-group'>";
    echo "<li class='list-group-item'>  <b>Klinik Adı : </b>{$veteriner['dukkan_ad']}   <br>  <b>İletişim :</b>{$veteriner['iletisim']} <br> <b>Adres : </b> {$veteriner['adres']} <br> <b>Şehir : </b> {$veteriner['sehir']} <br> <b>Hekim : </b> {$veteriner['isim']}" ;
    echo "</ul>";
    echo "<br>";
}

?>



