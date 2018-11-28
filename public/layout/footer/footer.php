



<!-- ___________________________________________________________________________libs:-->
<!-- LINK JQUERY-->
<script src="asset/libs/js/jquery-3.2.1.min.js" type="text/javascript"></script>
<!-- LINK POPPER-->
<script src="asset/libs/js/popper.min.js" type="text/javascript"></script>
<!-- LINK BOOTSTRAP-->
<script src="asset/libs/js/bootstrap.min.js" type="text/javascript"></script>
<!-- LINK FITTEXT-->
<script src="asset/libs/js/fittext.js" type="text/javascript"></script>
<!-- LINK SCROLLMAGIC-->
<script src="asset/libs/js/ScrollMagic.min.js" type="text/javascript"></script>
<!-- LINK SCROLLMAGIC INDICATOR-->
<script src="asset/libs/js/debug.addIndicators.js" type="text/javascript"></script>
<!-- LINK SMOOTH-SCROLLING-->
<script src="asset/libs/js/smooth-scrolling.js" type="text/javascript"></script>



<!-- ___________________________________________________________________________fin libs:-->
<!-- ___________________________________________________________________________JS Custom:-->
<!-- LINK SCROLLMAGIC-->
<script src="asset/js/scrollmagic.js" type="text/javascript"></script>
<!-- LINK MENU-->
<script src="asset/js/menu.js" type="text/javascript"></script>
<!-- ARROW-->
<script src="asset/js/arrow.js" type="text/javascript"></script>
<!-- ___________________________________________________________________________JS Custom:-->

<script type="text/javascript">
<!--_____________________________________________________________________HOME-->
  $(".menu-item h6").fitText(1, { minFontSize: '8px', maxFontSize: '17px' });
  $(".skill-titre").fitText(1, { minFontSize: '14px', maxFontSize: '30px' });
  $(".contact-content--titre").fitText(0.5, { minFontSize: '14px', maxFontSize: '120px' });
  $(".commander-box--section---titre p").fitText(0.5, { minFontSize: '14px', maxFontSize: '70px' });
  $(".menu-commander").fitText(0.5, { minFontSize: '8px', maxFontSize: '15px' });
  $(".result-box--prix").fitText(0.5, { minFontSize: '15px', maxFontSize: '50px' });
  $(".menu-box--description").fitText(0.5, { minFontSize: '8px', maxFontSize: '15px' });
  $(".service-telephonique--flex---text----flex").fitText(1, { minFontSize: '20px', maxFontSize: '30px' });
  $(".band-actualite--flex---text----flex").fitText(1, { minFontSize: '20px', maxFontSize: '30px' });
<!--_________________________________________________________________FIN HOME-->

</script>


<!-- ___________________________________________________________________________Calcule:--
<?php

if (!empty($_POST)){
	echo "<b>Voici nos résultat: <b><hr>";




if(isset($_POST['demande'])){
	//echo '<b>'.$_POST['demande'].'</b><br>';
	$demande = $_POST['demande'];
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
if(isset($_POST['type'])){
	//echo '<b>'.$_POST['type'].'</b><br>';
	$type = $_POST['type'];
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

if(isset($_POST['departement']) && !empty($_POST['departement'])){
	$departement = $_POST['departement'];
	echo 'departement: '.$departement.'<br>';
}
else{
	$departement = "01";
}

if(isset($_POST['modele'])){
	$modele = $_POST['modele'];
	echo 'modele: '.$modele.'<br>';
}

if(isset($_POST['energie'])){
	$energie = $_POST['energie'];
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

if(isset($_POST['cv'])){
	$cv = $_POST['cv'];
	echo $cv." CV<br>";
}

if(isset($_POST['circulation'])){
	$circulation = $_POST['circulation'];
	echo "date de mise en circulation: ".$circulation.'<br>';

}

if(isset($_POST['immatriculation'])){
	$immatriculation = $_POST['immatriculation'];
	echo "immatriculation: ".$immatriculation.'<br>';
}

if(isset($_POST['co2'])){
	$co2 = $_POST['co2'];
	echo "CO2: ".$co2.'<br>';
}

if(isset($_POST['ptac'])){
	$ptac = $_POST['ptac'];
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

echo '<hr>';

//TEST VARIABLES---------------------------------------------

//$demande =2;
//$type = 2;
//$departement = "31";
//$modele = "HYUNDAI";
//$energie = 1;
//$cv = 6;
//$immatriculation = "EH-334-SZ";
//$circulation = "29-05-2018";
//$co2 = 119;
//$ptac = 1;

//----------------------------------------------------------


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


//CHECK CURL EXECUTION------------------------------------------------------
/*
if(curl_exec($ch) === false)
{
    echo 'Curl error: ' . curl_error($ch).'<br>';
}
else
{
    echo 'Operation completed without any errors<br>';
}
*/

//---------------------------------------------------------------------------

if(curl_errno($ch)==28) {
//votre action en cas de timeout
	echo "error<br>";
}

curl_close($ch);
if($prixCg != "Erreur"){
	echo $prixCg." €<br>"; //affiche la valeur retournée par CarteGriseFactory
}
else{
	echo $prixCg." verifier les informations émis.<br>"; //affiche la valeur retournée par CarteGriseFactory
}


}

?>
!-- ___________________________________________________________________________Calcule:-->
