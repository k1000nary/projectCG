<html>
<body>

<form method="POST">
	Demande:<br>
	<select name="demande">
		<option value="1">Changement propriétaire véhicule d'occasion</option>
		<option value="2">Immatriculation d'un véhicule neuf</option>
		<option value="3">Demande de duplicata</option>
		<option value="4">Changement de domicile</option>
		<option value="5">Changement d'état matrimonial</option>
	</select><br>
	Type:<br>
	<select name="type">
		<option value="1">Voiture particulière (VP)</option>
		<option value="2">Véhicule société / utilitaire (CTTE, Deriv-VP)</option>
		<option value="3">Cyclomoteur 50cm³ (CL)</option>
		<option value="4">Motocyclette (MTL, MTT1, MTT2, MTTE, MOTO)</option>
		<option value="5">Tricycle à moteur (TM)</option>
		<option value="6">Cyclomoteur carrossé à 3 roues (CYCL)</option>
		<option value="7">Quadricycle à moteur: quad, voiturette (QM)</option>
		<option value="8">Camion > 3,5t (CAM)</option>
		<option value="9">Bus > 3,5t (TCP)</option>
		<option value="10">Tracteur Routier > 3,5t (TRR)</option>
		<option value="11">Véhicule spécialisé (VASP)</option>
		<option value="12">Remorque / semi (REM, SREM)</option>$
		<option value="13">Caravane (RESP)</option>
		<option value="14">Engin agricole (TRA, Quad, MAGA)</option>
	</select><br>
	Departement (ex: 01, 02, 2A, 2B, 974, 976)<br>
	<input type="text" name="departement" pattern="[0-9,A-B]{2,3}" maxlength="3" minlength="2"><br>
	Modèle de Véhicule:<br>
	<select name="modele">
		<option value="">Choisissez une marque</option>
		<option value="RENAULT"> RENAULT </option><option value="CITROEN"> CITROEN </option><option value="PEUGEOT"> PEUGEOT </option><option value="FIAT"> FIAT </option><option value="MERCEDES"> MERCEDES </option><option value="">----------------------------</option><option value="ABARTH">ABARTH</option><option value="AC">AC</option><option value="ac cobra">AC COBRA</option><option value="ACREA">ACREA</option><option value="AIXAM">AIXAM</option><option value="AIXAM PRO">AIXAM PRO</option><option value="ALFA ROMEO">ALFA ROMEO</option><option value="AUDI">AUDI</option><option value="APRILIA">APRILIA</option><option value="ASTON MARTIN">ASTON MARTIN</option><option value="BENELLI">BENELLI</option><option value="BETA">BETA</option><option value="BIMOTA">BIMOTA</option><option value="BMW">BMW</option><option value="BUELL">BUELL</option><option value="CAGIVA">CAGIVA</option><option value="CHATENET">CHATENET</option><option value="CHRYSLER">CHRYSLER</option><option value="CITROEN">CITROEN</option><option value="COMARTH">COMARTH</option><option value="COURB">COURB</option><option value="DACIA">DACIA</option><option value="DANGEL">DANGEL</option><option value="DE LOREAN">DE LOREAN</option><option value="DE TOMASO">DE TOMASO</option><option value="DKW">DKW</option><option value="DODGE">DODGE</option><option value="DAELIM">DAELIM</option><option value="DERBI">DERBI</option><option value="DUCATI">DUCATI</option><option value="DODGE">DODGE</option><option value="DONKERVOORT">DONKERVOORT</option><option value="DS">DS</option><option value="DUE">DUE</option><option value="ERAD">ERAD</option><option value="EXCALIBUR">EXCALIBUR</option><option value="EDUARD">EDUARD</option><option value="FAUTRAS">FAUTRAS</option><option value="FERRARI">FERRARI</option><option value="FIAT">FIAT</option><option value="FORD">FORD</option><option value="GAC GONOW">GAC GONOW</option><option value="GAS GAS">GAS GAS</option><option value="GG">GG</option><option value="GILERA">GILERA</option><option value="HARLEY DAVIDSON">HARLEY DAVIDSON</option><option value="HEADBANGER">HEADBANGER</option><option value="HM">HM</option><option value="HONDA">HONDA</option><option value="HYUNDAI">HYUNDAI</option><option value="HUSABERG">HUSABERG</option><option value="HUSQVARNA">HUSQVARNA</option><option value="HYOSUNG">HYOSUNG</option><option value="INDIAN">INDIAN</option><option value="ISUZU">ISUZU</option><option value="IVECO">IVECO</option><option value="JEEP">JEEP</option><option value="JDM SIMPA">JDM SIMPA</option><option value="Jinlun">Jinlun</option><option value="KAWASAKI">KAWASAKI</option><option value="KEEWAY">KEEWAY</option><option value="KNIEVEL">KNIEVEL</option><option value="KTM">KTM</option><option value="KYMCO">KYMCO</option><option value="KIA">KIA</option><option value="LADA">LADA</option><option value="LAMBORGHINI">LAMBORGHINI</option><option value="LANCIA">LANCIA</option><option value="LAND ROVER">LAND ROVER</option><option value="LEONART">LEONART</option><option value="LEXUS">LEXUS</option><option value="LIGIER">LIEBHERR</option><option value="MAN">MAN</option><option value="MAZDA">MAZDA</option><option value="MASH">MASH</option><option value="MATRA">MATRA</option><option value="MBK">MBK</option><option value="MCCORMICK">MCCORMICK</option><option value="MONTESA">MONTESA</option><option value="MOTO GUZZI">MOTO GUZZI</option><option value="MOTO MORINI">MOTO MORINI</option><option value="MOTRAC">MOTRAC</option><option value="MV AGUSTA">MV AGUSTA</option><option value="MZ">MZ</option><option value="MEGA">MEGA</option><option value="MERCEDES">MERCEDES</option><option value="MINI">MINI</option><option value="MINI MOKE">MINI MOKE</option><option value="MITSUBISHI">MITSUBISHI</option><option value="NISSAN">NISSAN</option><option value="OPEL">OPEL</option><option value="PEUGEOT">PEUGEOT</option><option value="PIAGGIO">PIAGGIO</option><option value="PORSCHE">PORSCHE</option><option value="RENAULT">RENAULT</option><option value="REWACO">REWACO</option><option value="RIEJU">RIEJU</option><option value="ROVER">ROVER</option><option value="ROYAL ENFIELD">ROYAL ENFIELD</option><option value="SANTANA">SANTANA</option><option value="SATELLITE">SATELLITE</option><option value="SEAT">SEAT</option><option value="SKODA">SKODA</option><option value="SMART">SMART</option><option value="SHERCO">SHERCO</option><option value="SKY TEAM">SKY TEAM</option><option value="SUBARU">SUBARU</option><option value="SUZUKI">SUZUKI</option><option value="SWM">SWM</option><option value="SYM">SYM</option><option value="SSANGYONG">SSANGYONG</option><option value="TOYOTA">TOYOTA</option><option value="TRIGANO">TRIGANO</option><option value="TM">TM</option><option value="TNT MOTOR">TNT MOTOR</option><option value="TOMOS">TOMOS</option><option value="TRIUMPH">TRIUMPH</option><option value="VAN HOOL">VAN HOOL</option><option value="VAX">VAX</option><option value="VEZEKO">VEZEKO</option><option value="VELOSOLEX">VELOSOLEX</option><option value="VOLKSWAGEN">VOLKSWAGEN</option><option value="VOLVO">VOLVO</option><option value="WEYTENS">WEYTENS</option><option value="YAMAHA">YAMAHA</option><option value="AUTRE">AUTRE</option>
	</select><br>
	Energie:<br>
	<select name="energie">
		<option value="1">Diesel/Essence (GO/ES)</option>
		<option value="2">Electricité (EL)</option>
		<option value="3">Hybride (GH/GL/EH)</option>
		<option value="4">GPL/GNV</option>
		<option value="5">Superéthanol</option>
		<option value="6">Biocarburants</option>
	</select><br>
	Nombre de Cheval Fiscal (CV)<br>
	<input type="number" name="cv" max=60 min=1><br>
	Immatriculation<br>
	<input type="text" name="immatriculation"><br>
	Date de mise en circulation<br>
	<input type="date" name="circulation"><br>
	CO2<br>
	<input type="number" name="co2" max=1000 min=0><br>
	Poids vehicule<br>
	<select name="ptac">
		<option value="1">Inférieur ou égal à 3,5 tonnes</option>
		<option value="2">Entre 3,5 et 6 tonnes</option>
		<option value="3">Entre 6 et à 11 tonnes</option>
		<option value="4">Supérieur à 11 tonnes</option>
	</select><br>
	<input type="submit">
</form>

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

</body>
</html>
