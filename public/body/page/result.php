<?php
include __DIR__.'/../head.php';
?>
<?php
include __DIR__.'/../menu.php';
?>

<?php

if (!empty($_POST)){

$demande = $_POST['demande'];
$type = $_POST['type'];
$departement = $_POST['departement'];
$modele = $_POST['modele'];
$energie = $_POST['energie'];
$circulation = $_POST['circulation'];
$cv = $_POST['cv'];
$immatriculation = $_POST['immatriculation'];
$co2 = $_POST['co2'];
$ptac = $_POST['ptac'];

$url = "https://www.cartegrisefactory.fr/api/getPrice";

$ch = curl_init($url);


curl_setopt($ch, CURLOPT_FRESH_CONNECT, true);
curl_setopt($ch, CURLOPT_TIMEOUT, 15);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 15);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, 1);

// bypass the SSL verification
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
//

curl_setopt($ch, CURLOPT_POSTFIELDS, "demande=".$demande."&type=".$type."&departement=".$departement."&modele=".$modele."&energie=".$energie."&cv=".$cv."&immatriculation=".$immatriculation."&circulation=".$circulation."&co2=".$co2."&ptac=".$ptac);
curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0');

$prixCg = curl_exec($ch);

}

?>
<div class="row ">


    <div class="col-12 col-md-4 mx-auto result-box">
  <div class="col-12 result-box--titre">
    <h1>Prix</h1>
  </div>
  <div class="col-12 result-box--prix">
    <h1><?php echo $prixCg ?>€</h1>
  </div>
    </div>





  <div class="col-12 col-md-5 mx-auto result-box">
<div class="col-12 result-box--titre">
  <h1>Votre Demande</h1>
</div>
<div class="col-12 row result-box--description">
  <div class="result-box--description---label">
Demande :
</div>
<div class="result-box--description---result">
  <?php
  if(isset($_POST['demande'])){
  //echo '<b>'.$_POST['demande'].'</b><br>';

  switch ($demande) {
      case 1:
          echo "Changement propriétaire véhicule d'occasion<br>";
          break;
      case 2:
          echo "Immatriculation d'un véhicule neuf<br>";
          break;
      case 3:
          echo "Demande de duplicata<br>";
          break;
      case 4:
          echo "Changement de domicile<br>";
          break;
      case 5:
          echo "Changement d'état matrimonial<br>";
          break;

  }
}
 ?>
</div>
</div>
<div class="col-12 row result-box--description">
  <div class="result-box--description---label">
Type :
</div>
<div class="result-box--description---result">
  <?php
  if(isset($_POST['type'])){
  //echo '<b>'.$_POST['type'].'</b><br>';

  switch ($type) {
      case 1:
          echo "Voiture particulière (VP)<br>";
          break;
      case 2:
          echo "Véhicule société / utilitaire (CTTE, Deriv-VP)<br>";
          break;
      case 3:
          echo "Cyclomoteur 50cm³ (CL)<br>";
          break;
      case 4:
          echo "Motocyclette (MTL, MTT1, MTT2, MTTE, MOTO)<br>";
          break;
      case 5:
          echo "Tricycle à moteur (TM)<br>";
          break;
      case 6:
          echo "Cyclomoteur carrossé à 3 roues (CYCL)<br>";
          break;
      case 7:
          echo "Quadricycle à moteur: quad, voiturette (QM)<br>";
          break;
      case 8:
          echo "Camion > 3,5t (CAM)<br>";
          break;
      case 9:
          echo "Bus > 3,5t (TCP)<br>";
          break;
      case 10:
          echo "Tracteur Routier > 3,5t (TRR)<br>";
          break;
      case 11:
          echo "Véhicule spécialisé (VASP)<br>";
          break;
      case 12:
          echo "Remorque / semi (REM, SREM)<br>";
          break;
      case 13:
          echo "Caravane (RESP)<br>";
          break;
      case 14:
          echo "Engin agricole (TRA, Quad, MAGA)<br>";
          break;

  }
}
?>
</div>
</div>
<div class="col-12 row result-box--description">
  <div class="result-box--description---label">
Departement :
</div>
<div class="result-box--description---result">
  <?php
   if(isset($_POST['departement']) && !empty($_POST['departement'])){

  echo $departement.'<br>';
}
else{
  $departement = "01";
}
?>
</div>
</div>
<div class="col-12 row result-box--description">
  <div class="result-box--description---label">
Modèle de véhicule :
</div>
<div class="result-box--description---result">
  <?php
  if(isset($_POST['modele'])){

  echo $modele.'<br>';
}
  ?>
</div>
</div>
<div class="col-12 row result-box--description">
  <div class="result-box--description---label">
Energie :
</div>
<div class="result-box--description---result">
 <?php
 if(isset($_POST['energie'])){

  switch ($energie) {
      case 1:
          echo "Diesel/Essence (GO/ES)<br>";
          break;
      case 2:
          echo "Electricité (EL)<br>";
          break;
      case 3:
          echo "Hybride (GH/GL/EH)<br>";
          break;
      case 4:
          echo "GPL/GNV<br>";
          break;
      case 5:
          echo "Superéthanol<br>";
          break;
      case 6:
          echo "Biocarburants<br>";
          break;

  }
}
?>
</div>
</div>
<div class="col-12 row result-box--description">
  <div class="result-box--description---label">
Nombre de Cheval Fiscal (CV) :
</div>
<div class="result-box--description---result">
  <?php
  if(isset($_POST['cv'])){

  echo $cv." CV<br>";
}
?>
</div>
</div>
<div class="col-12 row result-box--description">
  <div class="result-box--description---label">
Date de mise en circulation :
</div>
<div class="result-box--description---result">
  <?php
  if(isset($_POST['circulation'])){

  $date = strtotime($circulation);
  echo date('j/m/Y',$date).'<br>';

}
?>
</div>
</div>
<div class="col-12 row result-box--description">
  <div class="result-box--description---label">
CO2 :
</div>
<div class="result-box--description---result">
  <?php
  if(isset($_POST['co2'])){

  echo $co2.'<br>';
}
?>
</div>
</div>
<div class="col-12 row result-box--description">
  <div class="result-box--description---label">
Poids vehicule :
</div>
<div class="result-box--description---result">
  <?php
  if(isset($_POST['ptac'])){

  switch ($ptac) {
      case 1:
          echo "Inférieur ou égal à 3,5 tonnes<br>";
          break;
      case 2:
          echo "Entre 3,5 et 6 tonnes<br>";
          break;
      case 3:
          echo "Entre 6 et à 11 tonnes<br>";
          break;
      case 4:
          echo "Supérieur à 11 tonnes<br>";
          break;

  }
}



?>
</div>
</div>
  </div>

  <div class="col-12 col-md-2 mx-auto d-flex flex-row align-items-center my-flex-container">
<div class="col-12 result-box--titre text-center ">
  <button type="button" class="btn btn-primary btn-recalculcer"><i class="fas fa-angle-left"></i> Recalculcer</button>
<button type="button" class="btn btn-primary btn-commander">Commander <i class="fas fa-angle-right"></i></button>

</div>
  </div>


</div>
<?php
include __DIR__.'/../menu.php';
?>
<?php
include __DIR__.'/../footer.php';
?>
