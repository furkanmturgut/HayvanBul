<?php
require_once "db.php";
require_once "header.php";

echo "<br>";
$id = $_GET["id"];
$sql = "SELECT * FROM hayvanlar where id=:id";
$stmt= $conn->prepare($sql);
$stmt->bindParam(":id",$id);
$stmt->execute();

$hayvanlar = $stmt->fetchAll(PDO::FETCH_ASSOC);
$hayvan = $hayvanlar[0];

?>

<form class="row g-3 needs-validation" novalidate>
<div class="col-md-4">
    <label for="validationCustom01" class="form-label">Hayvan Tür</label>
    <input type="text" disabled class="form-control" id="validationCustom01" value="<?php echo $hayvan['tur']; ?>" required>
    <div class="valid-feedback">
      
    </div>
    <br>

    <label for="validationCustom01" class="form-label">Hayvan Adı</label>
    <input type="text" disabled class="form-control" id="validationCustom01" value="<?php echo $hayvan['adi']; ?>" required>
    <div class="valid-feedback">
    
    </div>
    <br>

    <label for="validationCustom01" class="form-label">Kaybolduğu Şehir</label>
    <input type="text" disabled class="form-control" id="validationCustom01" value="<?php echo $hayvan['sehir']; ?>" required>
    <div class="valid-feedback">
    
    </div>
    <br>

    <label for="validationCustom01" class="form-label">Adres</label>
    <input type="text" disabled class="form-control" id="validationCustom01" value="<?php echo $hayvan['adres']; ?>" required>
    <div class="valid-feedback">
    
    </div>
    <br>

    <label for="validationCustom01" class="form-label">İletişim</label>
    <input type="text" disabled class="form-control" id="validationCustom01" value="<?php echo $hayvan['iletisim']; ?>" required>
    <div class="valid-feedback">
    
    </div>
    <br>

  </div>

  <div class="col-12">
    <a class="btn btn-primary" href="index.php" role="button">Anasayfaya Dön</a>
</div>
</form>