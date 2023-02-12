<?php 
require_once "db.php";
require_once "header.php";

if(isset($_POST["adi"])){
    $tur = $_POST["tur"];
    $adi = $_POST["adi"];
    $sehir = $_POST["sehir"];
    $adres = $_POST["adres"];
    $iletisim = $_POST["iletisim"];
    $tarih = date("Y.m.d");


    $sql = "INSERT INTO bulunan_hayvan(tur,adi,sehir,adres,tarih,iletisim) 
    VALUES (:tur, :adi, :sehir, :adres, :tarih, :iletisim)";
    $stmt = $conn->prepare($sql);

    $stmt->bindParam(":adi",$adi);
    $stmt->bindParam(":tur",$tur);
    $stmt->bindParam(":sehir",$sehir);
    $stmt->bindParam(":adres",$adres);
    $stmt->bindParam(":iletisim",$iletisim);
    $stmt->bindParam(":tarih",$tarih);

    $stmt->execute();
    
    echo "<br>";
    echo "<div class='alert alert-success' role='alert'>";
    echo " İhbar iletildi. Onaylandıktan sonra listeye eklenecektir.";
    echo "</div>";


}


?>


<br>
<form method="POST">
  <div class="mb-3">
    <label  class="form-label">Hayvan Tür</label>
    <input type="text" class="form-control" name="tur" required >
  </div>

  <div class="mb-3">
    <label  class="form-label">Hayvan Adı</label>
    <input type="text" class="form-control" name="adi" required>
  </div>

  <div class="mb-3">
    <label class="form-label">Bulduğum Şehir</label>
    <input type="text" class="form-control" name="sehir" required>
  </div>

  <div class="mb-3">
    <label  class="form-label">Bulduğum Adres</label>
    <input type="text" class="form-control" name="adres" required>
  </div>

  <div class="mb-3">
    <label  class="form-label">İletişim</label>
    <input type="text" class="form-control" name="iletisim" required >
  </div>
  
  <p> <input style="background-color:blue; color:white;" type="submit" value="Gönder"> </p>
  <!-- <a class="btn btn-primary"  type="submit" role="button">İhbar Et</a> . -->
</form>