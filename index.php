
<?php
require_once "db.php";
require_once "header.php";


$sql = "SELECT id,sehir,tur from hayvanlar";
$stmt = $conn->prepare($sql);
$stmt->execute();
$ilanlarim = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo "<br>";
echo "<h1>Kayıp Listesi</h1>";


foreach($ilanlarim as $ilan){
    echo "<ul class='list-group'>";
    echo "<li class='list-group-item'> <a href='detail.php?id={$ilan['id']}'> {$ilan['sehir']} </b> </a> <br>  {$ilan['tur']}" ;
    echo "</ul>";
    echo "<br>";
}

?>

