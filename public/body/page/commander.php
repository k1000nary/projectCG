<div id="up" class="container-fluid first-v">
  <?php
include __DIR__.'/../head.php';
?>
    <?php
include __DIR__.'/../menu.php';
?>


<div class="col-12 commander-firstview">
<div class="row col-11 mx-auto">
  <div class="row mx-auto commander-description">
    <div class="col-10 mx-auto commander-description--titre">
          Lorem ipsum dolor sit amet,
    </div>
    <div class="col-10 mx-auto commander-description--texte">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.


                                      <div class="col-12 arrow-down">
                                        <a href="#menu-commander">
                                          <span class="arrowdown"><p>C'est parti !</p></span>
                                        </a>
                                      </div>
    </div>
  </div>
</div>
</div>

<?php
include __DIR__.'/../menu-commander.php';
?>
</div>




<div class="modal" id="changement-de-titulaire">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal body -->
      <div class="modal-body">
        <div id="Changement-de-titulaire" class="row commander">
          <div class="row search">
            <form class="row" method="POST" action="Result.php">
            <div class="col-11 col-md-6 mx-auto search-box">
              <div class="row col-12 mx-auto input-group ">
                <div class="col-12 search-box--titre">
                  Votre immatriculation
                </div>
                	<input class="mx-auto form-control search-form" placeholder="AA-123-AA" type="text" name="immatriculation" required><br>

              </div>
            </div>
            <div class="col-9 col-md-6 mx-auto search-box">
              <div class="row col-12 mx-auto input-group ">
                <div class="col-12 search-box--titre">
                  Departement (ex: 01, 02, 2A, 2B, 974, 976)
                </div>
          	<input type="text" class="search-form mx-auto" name="departement" pattern="[0-9,A-B]{2,3}" maxlength="3" minlength="2" required><br>
              </div>
            </div>
            <div class="col-11 col-md-6 mx-auto search-box">
              <div class="row col-12 mx-auto input-group ">
                <div class="col-12 search-box--titre">
                  Type
                </div>
                <select class="mx-auto search-form" name="type" required>
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
              	</select>
              </div>
            </div>

            <div class="col-11 col-md-6 mx-auto search-box">
              <div class="row col-12 mx-auto input-group ">
                <div class="col-12 search-box--titre">
                  Modele
                </div>
                <select class="mx-auto search-form" name="modele">
                  <!--<option value="">Choisissez une marque</option>-->
                  <option value="RENAULT"> RENAULT </option><option value="CITROEN"> CITROEN </option><option value="PEUGEOT"> PEUGEOT </option><option value="FIAT"> FIAT </option><option value="MERCEDES"> MERCEDES </option><option value="">----------------------------</option><option value="ABARTH">ABARTH</option><option value="AC">AC</option><option value="ac cobra">AC COBRA</option><option value="ACREA">ACREA</option><option value="AIXAM">AIXAM</option><option value="AIXAM PRO">AIXAM PRO</option><option value="ALFA ROMEO">ALFA ROMEO</option><option value="AUDI">AUDI</option><option value="APRILIA">APRILIA</option><option value="ASTON MARTIN">ASTON MARTIN</option><option value="BENELLI">BENELLI</option><option value="BETA">BETA</option><option value="BIMOTA">BIMOTA</option><option value="BMW">BMW</option><option value="BUELL">BUELL</option><option value="CAGIVA">CAGIVA</option><option value="CHATENET">CHATENET</option><option value="CHRYSLER">CHRYSLER</option><option value="CITROEN">CITROEN</option><option value="COMARTH">COMARTH</option><option value="COURB">COURB</option><option value="DACIA">DACIA</option><option value="DANGEL">DANGEL</option><option value="DE LOREAN">DE LOREAN</option><option value="DE TOMASO">DE TOMASO</option><option value="DKW">DKW</option><option value="DODGE">DODGE</option><option value="DAELIM">DAELIM</option><option value="DERBI">DERBI</option><option value="DUCATI">DUCATI</option><option value="DODGE">DODGE</option><option value="DONKERVOORT">DONKERVOORT</option><option value="DS">DS</option><option value="DUE">DUE</option><option value="ERAD">ERAD</option><option value="EXCALIBUR">EXCALIBUR</option><option value="EDUARD">EDUARD</option><option value="FAUTRAS">FAUTRAS</option><option value="FERRARI">FERRARI</option><option value="FIAT">FIAT</option><option value="FORD">FORD</option><option value="GAC GONOW">GAC GONOW</option><option value="GAS GAS">GAS GAS</option><option value="GG">GG</option><option value="GILERA">GILERA</option><option value="HARLEY DAVIDSON">HARLEY DAVIDSON</option><option value="HEADBANGER">HEADBANGER</option><option value="HM">HM</option><option value="HONDA">HONDA</option><option value="HYUNDAI">HYUNDAI</option><option value="HUSABERG">HUSABERG</option><option value="HUSQVARNA">HUSQVARNA</option><option value="HYOSUNG">HYOSUNG</option><option value="INDIAN">INDIAN</option><option value="ISUZU">ISUZU</option><option value="IVECO">IVECO</option><option value="JEEP">JEEP</option><option value="JDM SIMPA">JDM SIMPA</option><option value="Jinlun">Jinlun</option><option value="KAWASAKI">KAWASAKI</option><option value="KEEWAY">KEEWAY</option><option value="KNIEVEL">KNIEVEL</option><option value="KTM">KTM</option><option value="KYMCO">KYMCO</option><option value="KIA">KIA</option><option value="LADA">LADA</option><option value="LAMBORGHINI">LAMBORGHINI</option><option value="LANCIA">LANCIA</option><option value="LAND ROVER">LAND ROVER</option><option value="LEONART">LEONART</option><option value="LEXUS">LEXUS</option><option value="LIGIER">LIEBHERR</option><option value="MAN">MAN</option><option value="MAZDA">MAZDA</option><option value="MASH">MASH</option><option value="MATRA">MATRA</option><option value="MBK">MBK</option><option value="MCCORMICK">MCCORMICK</option><option value="MONTESA">MONTESA</option><option value="MOTO GUZZI">MOTO GUZZI</option><option value="MOTO MORINI">MOTO MORINI</option><option value="MOTRAC">MOTRAC</option><option value="MV AGUSTA">MV AGUSTA</option><option value="MZ">MZ</option><option value="MEGA">MEGA</option><option value="MERCEDES">MERCEDES</option><option value="MINI">MINI</option><option value="MINI MOKE">MINI MOKE</option><option value="MITSUBISHI">MITSUBISHI</option><option value="NISSAN">NISSAN</option><option value="OPEL">OPEL</option><option value="PEUGEOT">PEUGEOT</option><option value="PIAGGIO">PIAGGIO</option><option value="PORSCHE">PORSCHE</option><option value="RENAULT">RENAULT</option><option value="REWACO">REWACO</option><option value="RIEJU">RIEJU</option><option value="ROVER">ROVER</option><option value="ROYAL ENFIELD">ROYAL ENFIELD</option><option value="SANTANA">SANTANA</option><option value="SATELLITE">SATELLITE</option><option value="SEAT">SEAT</option><option value="SKODA">SKODA</option><option value="SMART">SMART</option><option value="SHERCO">SHERCO</option><option value="SKY TEAM">SKY TEAM</option><option value="SUBARU">SUBARU</option><option value="SUZUKI">SUZUKI</option><option value="SWM">SWM</option><option value="SYM">SYM</option><option value="SSANGYONG">SSANGYONG</option><option value="TOYOTA">TOYOTA</option><option value="TRIGANO">TRIGANO</option><option value="TM">TM</option><option value="TNT MOTOR">TNT MOTOR</option><option value="TOMOS">TOMOS</option><option value="TRIUMPH">TRIUMPH</option><option value="VAN HOOL">VAN HOOL</option><option value="VAX">VAX</option><option value="VEZEKO">VEZEKO</option><option value="VELOSOLEX">VELOSOLEX</option><option value="VOLKSWAGEN">VOLKSWAGEN</option><option value="VOLVO">VOLVO</option><option value="WEYTENS">WEYTENS</option><option value="YAMAHA">YAMAHA</option><option value="AUTRE">AUTRE</option>
                </select>
              </div>
            </div>

            <div class="col-11 col-md-6 mx-auto search-box">
              <div class="row col-12 mx-auto input-group ">
                <div class="col-12 search-box--titre">
                  Energie
                </div>
                <select class="mx-auto search-form" name="energie">
              		<option value="1">Diesel/Essence (GO/ES)</option>
              		<option value="2">Electricité (EL)</option>
              		<option value="3">Hybride (GH/GL/EH)</option>
              		<option value="4">GPL/GNV</option>
              		<option value="5">Superéthanol</option>
              		<option value="6">Biocarburants</option>
              	</select>
              </div>
            </div>

            <div class="col-11 col-md-6 mx-auto search-box">
              <div class="row col-12 mx-auto input-group ">
                <div class="col-12 search-box--titre">
                  Nombre de Cheval Fiscal (CV)
                </div>
          <input class="mx-auto search-form" type="number" name="cv" max=60 min=1 required><br>
              </div>
            </div>





              <div class="col-11 col-md-6 mx-auto search-box">
                <div class="row col-12 mx-auto input-group ">
                  <div class="col-12 search-box--titre">
                    Date de mise en circulation
                  </div>
          	<input class="mx-auto search-form" type="date" name="circulation" required><br>
                </div>
              </div>


              <div class="col-11 col-md-6 mx-auto search-box">
                <div class="row col-12 mx-auto input-group ">
                  <div class="col-12 search-box--titre">
                    CO2
                  </div>
          	<input class="mx-auto search-form" type="number" name="co2" max=1000 min=0 required><br>
                </div>
              </div>


              <div class="col-11 col-md-6 mx-auto search-box">
                <div class="row col-12 mx-auto input-group ">
                  <div class="col-12 search-box--titre">
                    Poids vehicule
                  </div>
                  <select class="mx-auto search-form" name="ptac">
                		<option value="1">Inférieur ou égal à 3,5 tonnes</option>
                		<option value="2">Entre 3,5 et 6 tonnes</option>
                		<option value="3">Entre 6 et à 11 tonnes</option>
                		<option value="4">Supérieur à 11 tonnes</option>
                	</select>
                </div>
              </div>




            <div class="col-12 col-md-6 mx-auto text-center search-box">
              <button type="submit" class="btn btn-primary btn-sm mx-auto">COMMANDER</button>
            </div>
            </form>
          </div>

        </div>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Fermer</button>
      </div>

    </div>
  </div>
</div>

<div class="modal" id="changement-de-domicile">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal body -->
      <div class="modal-body">
        <div id="Changement-de-titulaire" class="row commander">
          <div class="row search">
            <form class="row" method="POST"  action="Result.php">
            <div class="col-11 col-md-6 mx-auto search-box">
              <div class="row col-12 mx-auto input-group ">
                <div class="col-12 search-box--titre">
                  Votre immatriculation
                </div>
                	<input class="mx-auto form-control search-form" placeholder="AA-123-AA" type="text" name="immatriculation" required><br>
                  <input type="hidden" value="4" name="demande" >
              </div>
            </div>
            <div class="col-9 col-md-6 mx-auto search-box">
              <div class="row col-12 mx-auto input-group ">
                <div class="col-12 search-box--titre">
                  Departement (ex: 01, 02, 2A, 2B, 974, 976)
                </div>
          	<input type="text" class="search-form mx-auto" name="departement" pattern="[0-9,A-B]{2,3}" maxlength="3" minlength="2" required><br>
              </div>
            </div>
            <div class="col-11 col-md-6 mx-auto search-box">
              <div class="row col-12 mx-auto input-group ">
                <div class="col-12 search-box--titre">
                  Type
                </div>
                <select class="mx-auto search-form" name="type">
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
              	</select>
              </div>
            </div>

            <div class="col-11 col-md-6 mx-auto search-box">
              <div class="row col-12 mx-auto input-group ">
                <div class="col-12 search-box--titre">
                  Modele
                </div>
                <select class="mx-auto search-form" name="modele">
                  <option value="RENAULT"> RENAULT </option><option value="CITROEN"> CITROEN </option><option value="PEUGEOT"> PEUGEOT </option><option value="FIAT"> FIAT </option><option value="MERCEDES"> MERCEDES </option><option value="">----------------------------</option><option value="ABARTH">ABARTH</option><option value="AC">AC</option><option value="ac cobra">AC COBRA</option><option value="ACREA">ACREA</option><option value="AIXAM">AIXAM</option><option value="AIXAM PRO">AIXAM PRO</option><option value="ALFA ROMEO">ALFA ROMEO</option><option value="AUDI">AUDI</option><option value="APRILIA">APRILIA</option><option value="ASTON MARTIN">ASTON MARTIN</option><option value="BENELLI">BENELLI</option><option value="BETA">BETA</option><option value="BIMOTA">BIMOTA</option><option value="BMW">BMW</option><option value="BUELL">BUELL</option><option value="CAGIVA">CAGIVA</option><option value="CHATENET">CHATENET</option><option value="CHRYSLER">CHRYSLER</option><option value="CITROEN">CITROEN</option><option value="COMARTH">COMARTH</option><option value="COURB">COURB</option><option value="DACIA">DACIA</option><option value="DANGEL">DANGEL</option><option value="DE LOREAN">DE LOREAN</option><option value="DE TOMASO">DE TOMASO</option><option value="DKW">DKW</option><option value="DODGE">DODGE</option><option value="DAELIM">DAELIM</option><option value="DERBI">DERBI</option><option value="DUCATI">DUCATI</option><option value="DODGE">DODGE</option><option value="DONKERVOORT">DONKERVOORT</option><option value="DS">DS</option><option value="DUE">DUE</option><option value="ERAD">ERAD</option><option value="EXCALIBUR">EXCALIBUR</option><option value="EDUARD">EDUARD</option><option value="FAUTRAS">FAUTRAS</option><option value="FERRARI">FERRARI</option><option value="FIAT">FIAT</option><option value="FORD">FORD</option><option value="GAC GONOW">GAC GONOW</option><option value="GAS GAS">GAS GAS</option><option value="GG">GG</option><option value="GILERA">GILERA</option><option value="HARLEY DAVIDSON">HARLEY DAVIDSON</option><option value="HEADBANGER">HEADBANGER</option><option value="HM">HM</option><option value="HONDA">HONDA</option><option value="HYUNDAI">HYUNDAI</option><option value="HUSABERG">HUSABERG</option><option value="HUSQVARNA">HUSQVARNA</option><option value="HYOSUNG">HYOSUNG</option><option value="INDIAN">INDIAN</option><option value="ISUZU">ISUZU</option><option value="IVECO">IVECO</option><option value="JEEP">JEEP</option><option value="JDM SIMPA">JDM SIMPA</option><option value="Jinlun">Jinlun</option><option value="KAWASAKI">KAWASAKI</option><option value="KEEWAY">KEEWAY</option><option value="KNIEVEL">KNIEVEL</option><option value="KTM">KTM</option><option value="KYMCO">KYMCO</option><option value="KIA">KIA</option><option value="LADA">LADA</option><option value="LAMBORGHINI">LAMBORGHINI</option><option value="LANCIA">LANCIA</option><option value="LAND ROVER">LAND ROVER</option><option value="LEONART">LEONART</option><option value="LEXUS">LEXUS</option><option value="LIGIER">LIEBHERR</option><option value="MAN">MAN</option><option value="MAZDA">MAZDA</option><option value="MASH">MASH</option><option value="MATRA">MATRA</option><option value="MBK">MBK</option><option value="MCCORMICK">MCCORMICK</option><option value="MONTESA">MONTESA</option><option value="MOTO GUZZI">MOTO GUZZI</option><option value="MOTO MORINI">MOTO MORINI</option><option value="MOTRAC">MOTRAC</option><option value="MV AGUSTA">MV AGUSTA</option><option value="MZ">MZ</option><option value="MEGA">MEGA</option><option value="MERCEDES">MERCEDES</option><option value="MINI">MINI</option><option value="MINI MOKE">MINI MOKE</option><option value="MITSUBISHI">MITSUBISHI</option><option value="NISSAN">NISSAN</option><option value="OPEL">OPEL</option><option value="PEUGEOT">PEUGEOT</option><option value="PIAGGIO">PIAGGIO</option><option value="PORSCHE">PORSCHE</option><option value="RENAULT">RENAULT</option><option value="REWACO">REWACO</option><option value="RIEJU">RIEJU</option><option value="ROVER">ROVER</option><option value="ROYAL ENFIELD">ROYAL ENFIELD</option><option value="SANTANA">SANTANA</option><option value="SATELLITE">SATELLITE</option><option value="SEAT">SEAT</option><option value="SKODA">SKODA</option><option value="SMART">SMART</option><option value="SHERCO">SHERCO</option><option value="SKY TEAM">SKY TEAM</option><option value="SUBARU">SUBARU</option><option value="SUZUKI">SUZUKI</option><option value="SWM">SWM</option><option value="SYM">SYM</option><option value="SSANGYONG">SSANGYONG</option><option value="TOYOTA">TOYOTA</option><option value="TRIGANO">TRIGANO</option><option value="TM">TM</option><option value="TNT MOTOR">TNT MOTOR</option><option value="TOMOS">TOMOS</option><option value="TRIUMPH">TRIUMPH</option><option value="VAN HOOL">VAN HOOL</option><option value="VAX">VAX</option><option value="VEZEKO">VEZEKO</option><option value="VELOSOLEX">VELOSOLEX</option><option value="VOLKSWAGEN">VOLKSWAGEN</option><option value="VOLVO">VOLVO</option><option value="WEYTENS">WEYTENS</option><option value="YAMAHA">YAMAHA</option><option value="AUTRE">AUTRE</option>
                </select>
              </div>
            </div>

            <div class="col-11 col-md-6 mx-auto search-box">
              <div class="row col-12 mx-auto input-group ">
                <div class="col-12 search-box--titre">
                  Energie
                </div>
                <select class="mx-auto search-form" name="energie">
              		<option value="1">Diesel/Essence (GO/ES)</option>
              		<option value="2">Electricité (EL)</option>
              		<option value="3">Hybride (GH/GL/EH)</option>
              		<option value="4">GPL/GNV</option>
              		<option value="5">Superéthanol</option>
              		<option value="6">Biocarburants</option>
              	</select>
              </div>
            </div>

            <div class="col-11 col-md-6 mx-auto search-box">
              <div class="row col-12 mx-auto input-group ">
                <div class="col-12 search-box--titre">
                  Nombre de Cheval Fiscal (CV)
                </div>
          <input class="mx-auto search-form" type="number" name="cv" max=60 min=1 required><br>
              </div>
            </div>





              <div class="col-11 col-md-6 mx-auto search-box">
                <div class="row col-12 mx-auto input-group ">
                  <div class="col-12 search-box--titre">
                    Date de mise en circulation
                  </div>
          	<input class="mx-auto search-form" type="date" name="circulation" required><br>
                </div>
              </div>


              <div class="col-11 col-md-6 mx-auto search-box">
                <div class="row col-12 mx-auto input-group ">
                  <div class="col-12 search-box--titre">
                    CO2
                  </div>
          	<input class="mx-auto search-form" type="number" name="co2" max=1000 min=0 required><br>
                </div>
              </div>


              <div class="col-11 col-md-6 mx-auto search-box">
                <div class="row col-12 mx-auto input-group ">
                  <div class="col-12 search-box--titre">
                    Poids vehicule
                  </div>
                  <select class="mx-auto search-form" name="ptac">
                		<option value="1">Inférieur ou égal à 3,5 tonnes</option>
                		<option value="2">Entre 3,5 et 6 tonnes</option>
                		<option value="3">Entre 6 et à 11 tonnes</option>
                		<option value="4">Supérieur à 11 tonnes</option>
                	</select>
                </div>
              </div>




            <div class="col-12 col-md-6 mx-auto text-center search-box">
              <button type="submit" class="btn btn-primary btn-sm mx-auto">COMMANDER</button>
            </div>
            </form>
          </div>
        </div>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Fermer</button>
      </div>

    </div>
  </div>
</div>

<div class="modal" id="demande-de-duplicata">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal body -->
      <div class="modal-body">
        <div id="Changement-de-titulaire" class="row commander">
          <div class="row search">
            <form class="row" method="POST"  action="Result.php">
            <div class="col-11 col-md-6 mx-auto search-box">
              <div class="row col-12 mx-auto input-group ">
                <div class="col-12 search-box--titre">
                  Votre immatriculation
                </div>
                	<input class="mx-auto form-control search-form" placeholder="AA-123-AA" type="text" name="immatriculation" required><br>
                  <input type="hidden" value="3" name="demande" >
              </div>
            </div>
            <div class="col-9 col-md-6 mx-auto search-box">
              <div class="row col-12 mx-auto input-group ">
                <div class="col-12 search-box--titre">
                  Departement (ex: 01, 02, 2A, 2B, 974, 976)
                </div>
          	<input type="text" class="search-form mx-auto" name="departement" pattern="[0-9,A-B]{2,3}" maxlength="3" minlength="2" required><br>
              </div>
            </div>
            <div class="col-11 col-md-6 mx-auto search-box">
              <div class="row col-12 mx-auto input-group ">
                <div class="col-12 search-box--titre">
                  Type
                </div>
                <select class="mx-auto search-form" name="type">
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
              	</select>
              </div>
            </div>

            <div class="col-11 col-md-6 mx-auto search-box">
              <div class="row col-12 mx-auto input-group ">
                <div class="col-12 search-box--titre">
                  Modele
                </div>
                <select class="mx-auto search-form" name="modele">
                  <option value="RENAULT"> RENAULT </option><option value="CITROEN"> CITROEN </option><option value="PEUGEOT"> PEUGEOT </option><option value="FIAT"> FIAT </option><option value="MERCEDES"> MERCEDES </option><option value="">----------------------------</option><option value="ABARTH">ABARTH</option><option value="AC">AC</option><option value="ac cobra">AC COBRA</option><option value="ACREA">ACREA</option><option value="AIXAM">AIXAM</option><option value="AIXAM PRO">AIXAM PRO</option><option value="ALFA ROMEO">ALFA ROMEO</option><option value="AUDI">AUDI</option><option value="APRILIA">APRILIA</option><option value="ASTON MARTIN">ASTON MARTIN</option><option value="BENELLI">BENELLI</option><option value="BETA">BETA</option><option value="BIMOTA">BIMOTA</option><option value="BMW">BMW</option><option value="BUELL">BUELL</option><option value="CAGIVA">CAGIVA</option><option value="CHATENET">CHATENET</option><option value="CHRYSLER">CHRYSLER</option><option value="CITROEN">CITROEN</option><option value="COMARTH">COMARTH</option><option value="COURB">COURB</option><option value="DACIA">DACIA</option><option value="DANGEL">DANGEL</option><option value="DE LOREAN">DE LOREAN</option><option value="DE TOMASO">DE TOMASO</option><option value="DKW">DKW</option><option value="DODGE">DODGE</option><option value="DAELIM">DAELIM</option><option value="DERBI">DERBI</option><option value="DUCATI">DUCATI</option><option value="DODGE">DODGE</option><option value="DONKERVOORT">DONKERVOORT</option><option value="DS">DS</option><option value="DUE">DUE</option><option value="ERAD">ERAD</option><option value="EXCALIBUR">EXCALIBUR</option><option value="EDUARD">EDUARD</option><option value="FAUTRAS">FAUTRAS</option><option value="FERRARI">FERRARI</option><option value="FIAT">FIAT</option><option value="FORD">FORD</option><option value="GAC GONOW">GAC GONOW</option><option value="GAS GAS">GAS GAS</option><option value="GG">GG</option><option value="GILERA">GILERA</option><option value="HARLEY DAVIDSON">HARLEY DAVIDSON</option><option value="HEADBANGER">HEADBANGER</option><option value="HM">HM</option><option value="HONDA">HONDA</option><option value="HYUNDAI">HYUNDAI</option><option value="HUSABERG">HUSABERG</option><option value="HUSQVARNA">HUSQVARNA</option><option value="HYOSUNG">HYOSUNG</option><option value="INDIAN">INDIAN</option><option value="ISUZU">ISUZU</option><option value="IVECO">IVECO</option><option value="JEEP">JEEP</option><option value="JDM SIMPA">JDM SIMPA</option><option value="Jinlun">Jinlun</option><option value="KAWASAKI">KAWASAKI</option><option value="KEEWAY">KEEWAY</option><option value="KNIEVEL">KNIEVEL</option><option value="KTM">KTM</option><option value="KYMCO">KYMCO</option><option value="KIA">KIA</option><option value="LADA">LADA</option><option value="LAMBORGHINI">LAMBORGHINI</option><option value="LANCIA">LANCIA</option><option value="LAND ROVER">LAND ROVER</option><option value="LEONART">LEONART</option><option value="LEXUS">LEXUS</option><option value="LIGIER">LIEBHERR</option><option value="MAN">MAN</option><option value="MAZDA">MAZDA</option><option value="MASH">MASH</option><option value="MATRA">MATRA</option><option value="MBK">MBK</option><option value="MCCORMICK">MCCORMICK</option><option value="MONTESA">MONTESA</option><option value="MOTO GUZZI">MOTO GUZZI</option><option value="MOTO MORINI">MOTO MORINI</option><option value="MOTRAC">MOTRAC</option><option value="MV AGUSTA">MV AGUSTA</option><option value="MZ">MZ</option><option value="MEGA">MEGA</option><option value="MERCEDES">MERCEDES</option><option value="MINI">MINI</option><option value="MINI MOKE">MINI MOKE</option><option value="MITSUBISHI">MITSUBISHI</option><option value="NISSAN">NISSAN</option><option value="OPEL">OPEL</option><option value="PEUGEOT">PEUGEOT</option><option value="PIAGGIO">PIAGGIO</option><option value="PORSCHE">PORSCHE</option><option value="RENAULT">RENAULT</option><option value="REWACO">REWACO</option><option value="RIEJU">RIEJU</option><option value="ROVER">ROVER</option><option value="ROYAL ENFIELD">ROYAL ENFIELD</option><option value="SANTANA">SANTANA</option><option value="SATELLITE">SATELLITE</option><option value="SEAT">SEAT</option><option value="SKODA">SKODA</option><option value="SMART">SMART</option><option value="SHERCO">SHERCO</option><option value="SKY TEAM">SKY TEAM</option><option value="SUBARU">SUBARU</option><option value="SUZUKI">SUZUKI</option><option value="SWM">SWM</option><option value="SYM">SYM</option><option value="SSANGYONG">SSANGYONG</option><option value="TOYOTA">TOYOTA</option><option value="TRIGANO">TRIGANO</option><option value="TM">TM</option><option value="TNT MOTOR">TNT MOTOR</option><option value="TOMOS">TOMOS</option><option value="TRIUMPH">TRIUMPH</option><option value="VAN HOOL">VAN HOOL</option><option value="VAX">VAX</option><option value="VEZEKO">VEZEKO</option><option value="VELOSOLEX">VELOSOLEX</option><option value="VOLKSWAGEN">VOLKSWAGEN</option><option value="VOLVO">VOLVO</option><option value="WEYTENS">WEYTENS</option><option value="YAMAHA">YAMAHA</option><option value="AUTRE">AUTRE</option>
                </select>
              </div>
            </div>

            <div class="col-11 col-md-6 mx-auto search-box">
              <div class="row col-12 mx-auto input-group ">
                <div class="col-12 search-box--titre">
                  Energie
                </div>
                <select class="mx-auto search-form" name="energie">
              		<option value="1">Diesel/Essence (GO/ES)</option>
              		<option value="2">Electricité (EL)</option>
              		<option value="3">Hybride (GH/GL/EH)</option>
              		<option value="4">GPL/GNV</option>
              		<option value="5">Superéthanol</option>
              		<option value="6">Biocarburants</option>
              	</select>
              </div>
            </div>

            <div class="col-11 col-md-6 mx-auto search-box">
              <div class="row col-12 mx-auto input-group ">
                <div class="col-12 search-box--titre">
                  Nombre de Cheval Fiscal (CV)
                </div>
          <input class="mx-auto search-form" type="number" name="cv" max=60 min=1 required><br>
              </div>
            </div>





              <div class="col-11 col-md-6 mx-auto search-box">
                <div class="row col-12 mx-auto input-group ">
                  <div class="col-12 search-box--titre">
                    Date de mise en circulation
                  </div>
          	<input class="mx-auto search-form" type="date" name="circulation" required><br>
                </div>
              </div>


              <div class="col-11 col-md-6 mx-auto search-box">
                <div class="row col-12 mx-auto input-group ">
                  <div class="col-12 search-box--titre">
                    CO2
                  </div>
          	<input class="mx-auto search-form" type="number" name="co2" max=1000 min=0 required><br>
                </div>
              </div>


              <div class="col-11 col-md-6 mx-auto search-box">
                <div class="row col-12 mx-auto input-group ">
                  <div class="col-12 search-box--titre">
                    Poids vehicule
                  </div>
                  <select class="mx-auto search-form" name="ptac">
                		<option value="1">Inférieur ou égal à 3,5 tonnes</option>
                		<option value="2">Entre 3,5 et 6 tonnes</option>
                		<option value="3">Entre 6 et à 11 tonnes</option>
                		<option value="4">Supérieur à 11 tonnes</option>
                	</select>
                </div>
              </div>




            <div class="col-12 col-md-6 mx-auto text-center search-box">
              <button type="submit" class="btn btn-primary btn-sm mx-auto">COMMANDER</button>
            </div>
            </form>
          </div>
        </div>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Fermer</button>
      </div>

    </div>
  </div>
</div>

<div class="modal" id="declaration-de-cession">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal body -->
      <div class="modal-body">
        <div id="Changement-de-titulaire" class="row commander">
          <div class="row search">
            <form class="row" method="POST" action="Result.php">
            <div class="col-11 col-md-6 mx-auto search-box">
              <div class="row col-12 mx-auto input-group ">
                <div class="col-12 search-box--titre">
                  Votre immatriculation
                </div>
                	<input class="mx-auto form-control search-form" placeholder="AA-123-AA" type="text" name="immatriculation" required><br>
              </div>
            </div>
            <div class="col-9 col-md-6 mx-auto search-box">
              <div class="row col-12 mx-auto input-group ">
                <div class="col-12 search-box--titre">
                  Departement (ex: 01, 02, 2A, 2B, 974, 976)
                </div>
          	<input type="text" class="search-form mx-auto" name="departement" pattern="[0-9,A-B]{2,3}" maxlength="3" minlength="2" required><br>
              </div>
            </div>
            <div class="col-11 col-md-6 mx-auto search-box">
              <div class="row col-12 mx-auto input-group ">
                <div class="col-12 search-box--titre">
                  Type
                </div>
                <select class="mx-auto search-form" name="type">
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
              	</select>
              </div>
            </div>

            <div class="col-11 col-md-6 mx-auto search-box">
              <div class="row col-12 mx-auto input-group ">
                <div class="col-12 search-box--titre">
                  Modele
                </div>
                <select class="mx-auto search-form" name="modele">
                  <option value="RENAULT"> RENAULT </option><option value="CITROEN"> CITROEN </option><option value="PEUGEOT"> PEUGEOT </option><option value="FIAT"> FIAT </option><option value="MERCEDES"> MERCEDES </option><option value="">----------------------------</option><option value="ABARTH">ABARTH</option><option value="AC">AC</option><option value="ac cobra">AC COBRA</option><option value="ACREA">ACREA</option><option value="AIXAM">AIXAM</option><option value="AIXAM PRO">AIXAM PRO</option><option value="ALFA ROMEO">ALFA ROMEO</option><option value="AUDI">AUDI</option><option value="APRILIA">APRILIA</option><option value="ASTON MARTIN">ASTON MARTIN</option><option value="BENELLI">BENELLI</option><option value="BETA">BETA</option><option value="BIMOTA">BIMOTA</option><option value="BMW">BMW</option><option value="BUELL">BUELL</option><option value="CAGIVA">CAGIVA</option><option value="CHATENET">CHATENET</option><option value="CHRYSLER">CHRYSLER</option><option value="CITROEN">CITROEN</option><option value="COMARTH">COMARTH</option><option value="COURB">COURB</option><option value="DACIA">DACIA</option><option value="DANGEL">DANGEL</option><option value="DE LOREAN">DE LOREAN</option><option value="DE TOMASO">DE TOMASO</option><option value="DKW">DKW</option><option value="DODGE">DODGE</option><option value="DAELIM">DAELIM</option><option value="DERBI">DERBI</option><option value="DUCATI">DUCATI</option><option value="DODGE">DODGE</option><option value="DONKERVOORT">DONKERVOORT</option><option value="DS">DS</option><option value="DUE">DUE</option><option value="ERAD">ERAD</option><option value="EXCALIBUR">EXCALIBUR</option><option value="EDUARD">EDUARD</option><option value="FAUTRAS">FAUTRAS</option><option value="FERRARI">FERRARI</option><option value="FIAT">FIAT</option><option value="FORD">FORD</option><option value="GAC GONOW">GAC GONOW</option><option value="GAS GAS">GAS GAS</option><option value="GG">GG</option><option value="GILERA">GILERA</option><option value="HARLEY DAVIDSON">HARLEY DAVIDSON</option><option value="HEADBANGER">HEADBANGER</option><option value="HM">HM</option><option value="HONDA">HONDA</option><option value="HYUNDAI">HYUNDAI</option><option value="HUSABERG">HUSABERG</option><option value="HUSQVARNA">HUSQVARNA</option><option value="HYOSUNG">HYOSUNG</option><option value="INDIAN">INDIAN</option><option value="ISUZU">ISUZU</option><option value="IVECO">IVECO</option><option value="JEEP">JEEP</option><option value="JDM SIMPA">JDM SIMPA</option><option value="Jinlun">Jinlun</option><option value="KAWASAKI">KAWASAKI</option><option value="KEEWAY">KEEWAY</option><option value="KNIEVEL">KNIEVEL</option><option value="KTM">KTM</option><option value="KYMCO">KYMCO</option><option value="KIA">KIA</option><option value="LADA">LADA</option><option value="LAMBORGHINI">LAMBORGHINI</option><option value="LANCIA">LANCIA</option><option value="LAND ROVER">LAND ROVER</option><option value="LEONART">LEONART</option><option value="LEXUS">LEXUS</option><option value="LIGIER">LIEBHERR</option><option value="MAN">MAN</option><option value="MAZDA">MAZDA</option><option value="MASH">MASH</option><option value="MATRA">MATRA</option><option value="MBK">MBK</option><option value="MCCORMICK">MCCORMICK</option><option value="MONTESA">MONTESA</option><option value="MOTO GUZZI">MOTO GUZZI</option><option value="MOTO MORINI">MOTO MORINI</option><option value="MOTRAC">MOTRAC</option><option value="MV AGUSTA">MV AGUSTA</option><option value="MZ">MZ</option><option value="MEGA">MEGA</option><option value="MERCEDES">MERCEDES</option><option value="MINI">MINI</option><option value="MINI MOKE">MINI MOKE</option><option value="MITSUBISHI">MITSUBISHI</option><option value="NISSAN">NISSAN</option><option value="OPEL">OPEL</option><option value="PEUGEOT">PEUGEOT</option><option value="PIAGGIO">PIAGGIO</option><option value="PORSCHE">PORSCHE</option><option value="RENAULT">RENAULT</option><option value="REWACO">REWACO</option><option value="RIEJU">RIEJU</option><option value="ROVER">ROVER</option><option value="ROYAL ENFIELD">ROYAL ENFIELD</option><option value="SANTANA">SANTANA</option><option value="SATELLITE">SATELLITE</option><option value="SEAT">SEAT</option><option value="SKODA">SKODA</option><option value="SMART">SMART</option><option value="SHERCO">SHERCO</option><option value="SKY TEAM">SKY TEAM</option><option value="SUBARU">SUBARU</option><option value="SUZUKI">SUZUKI</option><option value="SWM">SWM</option><option value="SYM">SYM</option><option value="SSANGYONG">SSANGYONG</option><option value="TOYOTA">TOYOTA</option><option value="TRIGANO">TRIGANO</option><option value="TM">TM</option><option value="TNT MOTOR">TNT MOTOR</option><option value="TOMOS">TOMOS</option><option value="TRIUMPH">TRIUMPH</option><option value="VAN HOOL">VAN HOOL</option><option value="VAX">VAX</option><option value="VEZEKO">VEZEKO</option><option value="VELOSOLEX">VELOSOLEX</option><option value="VOLKSWAGEN">VOLKSWAGEN</option><option value="VOLVO">VOLVO</option><option value="WEYTENS">WEYTENS</option><option value="YAMAHA">YAMAHA</option><option value="AUTRE">AUTRE</option>
                </select>
              </div>
            </div>

            <div class="col-11 col-md-6 mx-auto search-box">
              <div class="row col-12 mx-auto input-group ">
                <div class="col-12 search-box--titre">
                  Energie
                </div>
                <select class="mx-auto search-form" name="energie">
              		<option value="1">Diesel/Essence (GO/ES)</option>
              		<option value="2">Electricité (EL)</option>
              		<option value="3">Hybride (GH/GL/EH)</option>
              		<option value="4">GPL/GNV</option>
              		<option value="5">Superéthanol</option>
              		<option value="6">Biocarburants</option>
              	</select>
              </div>
            </div>

            <div class="col-11 col-md-6 mx-auto search-box">
              <div class="row col-12 mx-auto input-group ">
                <div class="col-12 search-box--titre">
                  Nombre de Cheval Fiscal (CV)
                </div>
          <input class="mx-auto search-form" type="number" name="cv" max=60 min=1 required><br>
              </div>
            </div>





              <div class="col-11 col-md-6 mx-auto search-box">
                <div class="row col-12 mx-auto input-group ">
                  <div class="col-12 search-box--titre">
                    Date de mise en circulation
                  </div>
          	<input class="mx-auto search-form" type="date" name="circulation" required><br>
                </div>
              </div>


              <div class="col-11 col-md-6 mx-auto search-box">
                <div class="row col-12 mx-auto input-group ">
                  <div class="col-12 search-box--titre">
                    CO2
                  </div>
          	<input class="mx-auto search-form" type="number" name="co2" max=1000 min=0 required><br>
                </div>
              </div>


              <div class="col-11 col-md-6 mx-auto search-box">
                <div class="row col-12 mx-auto input-group ">
                  <div class="col-12 search-box--titre">
                    Poids vehicule
                  </div>
                  <select class="mx-auto search-form" name="ptac">
                		<option value="1">Inférieur ou égal à 3,5 tonnes</option>
                		<option value="2">Entre 3,5 et 6 tonnes</option>
                		<option value="3">Entre 6 et à 11 tonnes</option>
                		<option value="4">Supérieur à 11 tonnes</option>
                	</select>
                </div>
              </div>



            <div class="col-12 col-md-6 mx-auto text-center search-box">
              <button type="submit" class="btn btn-primary btn-sm mx-auto">COMMANDER</button>
            </div>
            </form>
          </div>
        </div>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Fermer</button>
      </div>

    </div>
  </div>
</div>

<div class="modal" id="changement-prop-veh-occ-fr">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal body -->
      <div class="modal-body">
        <div id="Changement-de-titulaire" class="row commander">
          <div class="row search">
            <form class="row" method="POST" action="Result.php">
            <div class="col-11 col-md-6 mx-auto search-box">
              <div class="row col-12 mx-auto input-group ">
                <div class="col-12 search-box--titre">
                  Votre immatriculation
                </div>
                	<input class="mx-auto form-control search-form" placeholder="AA-123-AA" type="text" name="immatriculation" required><br>
                  <input type="hidden" value="1" name="demande" >
              </div>
            </div>
            <div class="col-9 col-md-6 mx-auto search-box">
              <div class="row col-12 mx-auto input-group ">
                <div class="col-12 search-box--titre">
                  Departement (ex: 01, 02, 2A, 2B, 974, 976)
                </div>
          	<input type="text" class="search-form mx-auto" name="departement" pattern="[0-9,A-B]{2,3}" maxlength="3" minlength="2" required><br>
              </div>
            </div>
            <div class="col-11 col-md-6 mx-auto search-box">
              <div class="row col-12 mx-auto input-group ">
                <div class="col-12 search-box--titre">
                  Type
                </div>
                <select class="mx-auto search-form" name="type">
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
              	</select>
              </div>
            </div>

            <div class="col-11 col-md-6 mx-auto search-box">
              <div class="row col-12 mx-auto input-group ">
                <div class="col-12 search-box--titre">
                  Modele
                </div>
                <select class="mx-auto search-form" name="modele">
                  <option value="RENAULT"> RENAULT </option><option value="CITROEN"> CITROEN </option><option value="PEUGEOT"> PEUGEOT </option><option value="FIAT"> FIAT </option><option value="MERCEDES"> MERCEDES </option><option value="">----------------------------</option><option value="ABARTH">ABARTH</option><option value="AC">AC</option><option value="ac cobra">AC COBRA</option><option value="ACREA">ACREA</option><option value="AIXAM">AIXAM</option><option value="AIXAM PRO">AIXAM PRO</option><option value="ALFA ROMEO">ALFA ROMEO</option><option value="AUDI">AUDI</option><option value="APRILIA">APRILIA</option><option value="ASTON MARTIN">ASTON MARTIN</option><option value="BENELLI">BENELLI</option><option value="BETA">BETA</option><option value="BIMOTA">BIMOTA</option><option value="BMW">BMW</option><option value="BUELL">BUELL</option><option value="CAGIVA">CAGIVA</option><option value="CHATENET">CHATENET</option><option value="CHRYSLER">CHRYSLER</option><option value="CITROEN">CITROEN</option><option value="COMARTH">COMARTH</option><option value="COURB">COURB</option><option value="DACIA">DACIA</option><option value="DANGEL">DANGEL</option><option value="DE LOREAN">DE LOREAN</option><option value="DE TOMASO">DE TOMASO</option><option value="DKW">DKW</option><option value="DODGE">DODGE</option><option value="DAELIM">DAELIM</option><option value="DERBI">DERBI</option><option value="DUCATI">DUCATI</option><option value="DODGE">DODGE</option><option value="DONKERVOORT">DONKERVOORT</option><option value="DS">DS</option><option value="DUE">DUE</option><option value="ERAD">ERAD</option><option value="EXCALIBUR">EXCALIBUR</option><option value="EDUARD">EDUARD</option><option value="FAUTRAS">FAUTRAS</option><option value="FERRARI">FERRARI</option><option value="FIAT">FIAT</option><option value="FORD">FORD</option><option value="GAC GONOW">GAC GONOW</option><option value="GAS GAS">GAS GAS</option><option value="GG">GG</option><option value="GILERA">GILERA</option><option value="HARLEY DAVIDSON">HARLEY DAVIDSON</option><option value="HEADBANGER">HEADBANGER</option><option value="HM">HM</option><option value="HONDA">HONDA</option><option value="HYUNDAI">HYUNDAI</option><option value="HUSABERG">HUSABERG</option><option value="HUSQVARNA">HUSQVARNA</option><option value="HYOSUNG">HYOSUNG</option><option value="INDIAN">INDIAN</option><option value="ISUZU">ISUZU</option><option value="IVECO">IVECO</option><option value="JEEP">JEEP</option><option value="JDM SIMPA">JDM SIMPA</option><option value="Jinlun">Jinlun</option><option value="KAWASAKI">KAWASAKI</option><option value="KEEWAY">KEEWAY</option><option value="KNIEVEL">KNIEVEL</option><option value="KTM">KTM</option><option value="KYMCO">KYMCO</option><option value="KIA">KIA</option><option value="LADA">LADA</option><option value="LAMBORGHINI">LAMBORGHINI</option><option value="LANCIA">LANCIA</option><option value="LAND ROVER">LAND ROVER</option><option value="LEONART">LEONART</option><option value="LEXUS">LEXUS</option><option value="LIGIER">LIEBHERR</option><option value="MAN">MAN</option><option value="MAZDA">MAZDA</option><option value="MASH">MASH</option><option value="MATRA">MATRA</option><option value="MBK">MBK</option><option value="MCCORMICK">MCCORMICK</option><option value="MONTESA">MONTESA</option><option value="MOTO GUZZI">MOTO GUZZI</option><option value="MOTO MORINI">MOTO MORINI</option><option value="MOTRAC">MOTRAC</option><option value="MV AGUSTA">MV AGUSTA</option><option value="MZ">MZ</option><option value="MEGA">MEGA</option><option value="MERCEDES">MERCEDES</option><option value="MINI">MINI</option><option value="MINI MOKE">MINI MOKE</option><option value="MITSUBISHI">MITSUBISHI</option><option value="NISSAN">NISSAN</option><option value="OPEL">OPEL</option><option value="PEUGEOT">PEUGEOT</option><option value="PIAGGIO">PIAGGIO</option><option value="PORSCHE">PORSCHE</option><option value="RENAULT">RENAULT</option><option value="REWACO">REWACO</option><option value="RIEJU">RIEJU</option><option value="ROVER">ROVER</option><option value="ROYAL ENFIELD">ROYAL ENFIELD</option><option value="SANTANA">SANTANA</option><option value="SATELLITE">SATELLITE</option><option value="SEAT">SEAT</option><option value="SKODA">SKODA</option><option value="SMART">SMART</option><option value="SHERCO">SHERCO</option><option value="SKY TEAM">SKY TEAM</option><option value="SUBARU">SUBARU</option><option value="SUZUKI">SUZUKI</option><option value="SWM">SWM</option><option value="SYM">SYM</option><option value="SSANGYONG">SSANGYONG</option><option value="TOYOTA">TOYOTA</option><option value="TRIGANO">TRIGANO</option><option value="TM">TM</option><option value="TNT MOTOR">TNT MOTOR</option><option value="TOMOS">TOMOS</option><option value="TRIUMPH">TRIUMPH</option><option value="VAN HOOL">VAN HOOL</option><option value="VAX">VAX</option><option value="VEZEKO">VEZEKO</option><option value="VELOSOLEX">VELOSOLEX</option><option value="VOLKSWAGEN">VOLKSWAGEN</option><option value="VOLVO">VOLVO</option><option value="WEYTENS">WEYTENS</option><option value="YAMAHA">YAMAHA</option><option value="AUTRE">AUTRE</option>
                </select>
              </div>
            </div>

            <div class="col-11 col-md-6 mx-auto search-box">
              <div class="row col-12 mx-auto input-group ">
                <div class="col-12 search-box--titre">
                  Energie
                </div>
                <select class="mx-auto search-form" name="energie">
              		<option value="1">Diesel/Essence (GO/ES)</option>
              		<option value="2">Electricité (EL)</option>
              		<option value="3">Hybride (GH/GL/EH)</option>
              		<option value="4">GPL/GNV</option>
              		<option value="5">Superéthanol</option>
              		<option value="6">Biocarburants</option>
              	</select>
              </div>
            </div>

            <div class="col-11 col-md-6 mx-auto search-box">
              <div class="row col-12 mx-auto input-group ">
                <div class="col-12 search-box--titre">
                  Nombre de Cheval Fiscal (CV)
                </div>
          <input class="mx-auto search-form" type="number" name="cv" max=60 min=1 required><br>
              </div>
            </div>





              <div class="col-11 col-md-6 mx-auto search-box">
                <div class="row col-12 mx-auto input-group ">
                  <div class="col-12 search-box--titre">
                    Date de mise en circulation
                  </div>
          	<input class="mx-auto search-form" type="date" name="circulation" required><br>
                </div>
              </div>


              <div class="col-11 col-md-6 mx-auto search-box">
                <div class="row col-12 mx-auto input-group ">
                  <div class="col-12 search-box--titre">
                    CO2
                  </div>
          	<input class="mx-auto search-form" type="number" name="co2" max=1000 min=0 required><br>
                </div>
              </div>


              <div class="col-11 col-md-6 mx-auto search-box">
                <div class="row col-12 mx-auto input-group ">
                  <div class="col-12 search-box--titre">
                    Poids vehicule
                  </div>
                  <select class="mx-auto search-form" name="ptac">
                		<option value="1">Inférieur ou égal à 3,5 tonnes</option>
                		<option value="2">Entre 3,5 et 6 tonnes</option>
                		<option value="3">Entre 6 et à 11 tonnes</option>
                		<option value="4">Supérieur à 11 tonnes</option>
                	</select>
                </div>
              </div>




            <div class="col-12 col-md-6 mx-auto text-center search-box">
              <button type="submit" class="btn btn-primary btn-sm mx-auto">COMMANDER</button>
            </div>
            </form>
          </div>
        </div>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Fermer</button>
      </div>

    </div>
  </div>
</div>

<div class="modal" id="immatriculation-veh-neuf">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal body -->
      <div class="modal-body">
        <div id="Changement-de-titulaire" class="row commander">
          <div class="row search">
            <form class="row" method="POST" action="Result.php">
            <div class="col-11 col-md-6 mx-auto search-box">
              <div class="row col-12 mx-auto input-group ">
                <div class="col-12 search-box--titre">
                  Votre immatriculation
                </div>
                	<input class="mx-auto form-control search-form" placeholder="AA-123-AA" type="text" name="immatriculation" required><br>
                  <input type="hidden" value="2" name="demande" >
              </div>
            </div>
            <div class="col-9 col-md-6 mx-auto search-box">
              <div class="row col-12 mx-auto input-group ">
                <div class="col-12 search-box--titre">
                  Departement (ex: 01, 02, 2A, 2B, 974, 976)
                </div>
          	<input type="text" class="search-form mx-auto" name="departement" pattern="[0-9,A-B]{2,3}" maxlength="3" minlength="2" required><br>
              </div>
            </div>
            <div class="col-11 col-md-6 mx-auto search-box">
              <div class="row col-12 mx-auto input-group ">
                <div class="col-12 search-box--titre">
                  Type
                </div>
                <select class="mx-auto search-form" name="type">
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
              	</select>
              </div>
            </div>

            <div class="col-11 col-md-6 mx-auto search-box">
              <div class="row col-12 mx-auto input-group ">
                <div class="col-12 search-box--titre">
                  Modele
                </div>
                <select class="mx-auto search-form" name="modele">
                  <option value="RENAULT"> RENAULT </option><option value="CITROEN"> CITROEN </option><option value="PEUGEOT"> PEUGEOT </option><option value="FIAT"> FIAT </option><option value="MERCEDES"> MERCEDES </option><option value="">----------------------------</option><option value="ABARTH">ABARTH</option><option value="AC">AC</option><option value="ac cobra">AC COBRA</option><option value="ACREA">ACREA</option><option value="AIXAM">AIXAM</option><option value="AIXAM PRO">AIXAM PRO</option><option value="ALFA ROMEO">ALFA ROMEO</option><option value="AUDI">AUDI</option><option value="APRILIA">APRILIA</option><option value="ASTON MARTIN">ASTON MARTIN</option><option value="BENELLI">BENELLI</option><option value="BETA">BETA</option><option value="BIMOTA">BIMOTA</option><option value="BMW">BMW</option><option value="BUELL">BUELL</option><option value="CAGIVA">CAGIVA</option><option value="CHATENET">CHATENET</option><option value="CHRYSLER">CHRYSLER</option><option value="CITROEN">CITROEN</option><option value="COMARTH">COMARTH</option><option value="COURB">COURB</option><option value="DACIA">DACIA</option><option value="DANGEL">DANGEL</option><option value="DE LOREAN">DE LOREAN</option><option value="DE TOMASO">DE TOMASO</option><option value="DKW">DKW</option><option value="DODGE">DODGE</option><option value="DAELIM">DAELIM</option><option value="DERBI">DERBI</option><option value="DUCATI">DUCATI</option><option value="DODGE">DODGE</option><option value="DONKERVOORT">DONKERVOORT</option><option value="DS">DS</option><option value="DUE">DUE</option><option value="ERAD">ERAD</option><option value="EXCALIBUR">EXCALIBUR</option><option value="EDUARD">EDUARD</option><option value="FAUTRAS">FAUTRAS</option><option value="FERRARI">FERRARI</option><option value="FIAT">FIAT</option><option value="FORD">FORD</option><option value="GAC GONOW">GAC GONOW</option><option value="GAS GAS">GAS GAS</option><option value="GG">GG</option><option value="GILERA">GILERA</option><option value="HARLEY DAVIDSON">HARLEY DAVIDSON</option><option value="HEADBANGER">HEADBANGER</option><option value="HM">HM</option><option value="HONDA">HONDA</option><option value="HYUNDAI">HYUNDAI</option><option value="HUSABERG">HUSABERG</option><option value="HUSQVARNA">HUSQVARNA</option><option value="HYOSUNG">HYOSUNG</option><option value="INDIAN">INDIAN</option><option value="ISUZU">ISUZU</option><option value="IVECO">IVECO</option><option value="JEEP">JEEP</option><option value="JDM SIMPA">JDM SIMPA</option><option value="Jinlun">Jinlun</option><option value="KAWASAKI">KAWASAKI</option><option value="KEEWAY">KEEWAY</option><option value="KNIEVEL">KNIEVEL</option><option value="KTM">KTM</option><option value="KYMCO">KYMCO</option><option value="KIA">KIA</option><option value="LADA">LADA</option><option value="LAMBORGHINI">LAMBORGHINI</option><option value="LANCIA">LANCIA</option><option value="LAND ROVER">LAND ROVER</option><option value="LEONART">LEONART</option><option value="LEXUS">LEXUS</option><option value="LIGIER">LIEBHERR</option><option value="MAN">MAN</option><option value="MAZDA">MAZDA</option><option value="MASH">MASH</option><option value="MATRA">MATRA</option><option value="MBK">MBK</option><option value="MCCORMICK">MCCORMICK</option><option value="MONTESA">MONTESA</option><option value="MOTO GUZZI">MOTO GUZZI</option><option value="MOTO MORINI">MOTO MORINI</option><option value="MOTRAC">MOTRAC</option><option value="MV AGUSTA">MV AGUSTA</option><option value="MZ">MZ</option><option value="MEGA">MEGA</option><option value="MERCEDES">MERCEDES</option><option value="MINI">MINI</option><option value="MINI MOKE">MINI MOKE</option><option value="MITSUBISHI">MITSUBISHI</option><option value="NISSAN">NISSAN</option><option value="OPEL">OPEL</option><option value="PEUGEOT">PEUGEOT</option><option value="PIAGGIO">PIAGGIO</option><option value="PORSCHE">PORSCHE</option><option value="RENAULT">RENAULT</option><option value="REWACO">REWACO</option><option value="RIEJU">RIEJU</option><option value="ROVER">ROVER</option><option value="ROYAL ENFIELD">ROYAL ENFIELD</option><option value="SANTANA">SANTANA</option><option value="SATELLITE">SATELLITE</option><option value="SEAT">SEAT</option><option value="SKODA">SKODA</option><option value="SMART">SMART</option><option value="SHERCO">SHERCO</option><option value="SKY TEAM">SKY TEAM</option><option value="SUBARU">SUBARU</option><option value="SUZUKI">SUZUKI</option><option value="SWM">SWM</option><option value="SYM">SYM</option><option value="SSANGYONG">SSANGYONG</option><option value="TOYOTA">TOYOTA</option><option value="TRIGANO">TRIGANO</option><option value="TM">TM</option><option value="TNT MOTOR">TNT MOTOR</option><option value="TOMOS">TOMOS</option><option value="TRIUMPH">TRIUMPH</option><option value="VAN HOOL">VAN HOOL</option><option value="VAX">VAX</option><option value="VEZEKO">VEZEKO</option><option value="VELOSOLEX">VELOSOLEX</option><option value="VOLKSWAGEN">VOLKSWAGEN</option><option value="VOLVO">VOLVO</option><option value="WEYTENS">WEYTENS</option><option value="YAMAHA">YAMAHA</option><option value="AUTRE">AUTRE</option>
                </select>
              </div>
            </div>

            <div class="col-11 col-md-6 mx-auto search-box">
              <div class="row col-12 mx-auto input-group ">
                <div class="col-12 search-box--titre">
                  Energie
                </div>
                <select class="mx-auto search-form" name="energie">
              		<option value="1">Diesel/Essence (GO/ES)</option>
              		<option value="2">Electricité (EL)</option>
              		<option value="3">Hybride (GH/GL/EH)</option>
              		<option value="4">GPL/GNV</option>
              		<option value="5">Superéthanol</option>
              		<option value="6">Biocarburants</option>
              	</select>
              </div>
            </div>

            <div class="col-11 col-md-6 mx-auto search-box">
              <div class="row col-12 mx-auto input-group ">
                <div class="col-12 search-box--titre">
                  Nombre de Cheval Fiscal (CV)
                </div>
          <input class="mx-auto search-form" type="number" name="cv" max=60 min=1 required><br>
              </div>
            </div>





              <div class="col-11 col-md-6 mx-auto search-box">
                <div class="row col-12 mx-auto input-group ">
                  <div class="col-12 search-box--titre">
                    Date de mise en circulation
                  </div>
          	<input class="mx-auto search-form" type="date" name="circulation" required><br>
                </div>
              </div>


              <div class="col-11 col-md-6 mx-auto search-box">
                <div class="row col-12 mx-auto input-group ">
                  <div class="col-12 search-box--titre">
                    CO2
                  </div>
          	<input class="mx-auto search-form" type="number" name="co2" max=1000 min=0 required><br>
                </div>
              </div>


              <div class="col-11 col-md-6 mx-auto search-box">
                <div class="row col-12 mx-auto input-group ">
                  <div class="col-12 search-box--titre">
                    Poids vehicule
                  </div>
                  <select class="mx-auto search-form" name="ptac">
                		<option value="1">Inférieur ou égal à 3,5 tonnes</option>
                		<option value="2">Entre 3,5 et 6 tonnes</option>
                		<option value="3">Entre 6 et à 11 tonnes</option>
                		<option value="4">Supérieur à 11 tonnes</option>
                	</select>
                </div>
              </div>




            <div class="col-12 col-md-6 mx-auto text-center search-box">
              <button type="submit" class="btn btn-primary btn-sm mx-auto">COMMANDER</button>
            </div>
            </form>
          </div>
        </div>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Fermer</button>
      </div>

    </div>
  </div>
</div>


<div class="modal" id="changement-de-statut-matrimonial">
  <div class="col-8 mx-auto modal-dialog">
    <div class="modal-content">

      <!-- Modal body -->
      <div class="modal-body">
        <div id="Changement-de-titulaire" class="row commander">
          <div class="row search">
            <form class="row" method="POST" action="Result.php">
            <div class="col-11 col-md-6 mx-auto search-box">
              <div class="row col-12 mx-auto input-group ">
                <div class="col-12 search-box--titre">
                  Votre immatriculation
                </div>
                	<input class="mx-auto form-control search-form" placeholder="AA-123-AA" type="text" name="immatriculation" required><br>
                  <input type="hidden" value="5" name="demande" >
              </div>
            </div>
            <div class="col-9 col-md-6 mx-auto search-box">
              <div class="row col-12 mx-auto input-group ">
                <div class="col-12 search-box--titre">
                  Departement (ex: 01, 02, 2A, 2B, 974, 976)
                </div>
          	<input type="text" class="search-form mx-auto" name="departement" pattern="[0-9,A-B]{2,3}" maxlength="3" minlength="2" required><br>
              </div>
            </div>
            <div class="col-11 col-md-6 mx-auto search-box">
              <div class="row col-12 mx-auto input-group ">
                <div class="col-12 search-box--titre">
                  Type
                </div>
                <select class="mx-auto search-form" name="type">
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
              	</select>
              </div>
            </div>

            <div class="col-11 col-md-6 mx-auto search-box">
              <div class="row col-12 mx-auto input-group ">
                <div class="col-12 search-box--titre">
                  Modele
                </div>
                <select class="mx-auto search-form" name="modele">
                  <option value="RENAULT"> RENAULT </option><option value="CITROEN"> CITROEN </option><option value="PEUGEOT"> PEUGEOT </option><option value="FIAT"> FIAT </option><option value="MERCEDES"> MERCEDES </option><option value="">----------------------------</option><option value="ABARTH">ABARTH</option><option value="AC">AC</option><option value="ac cobra">AC COBRA</option><option value="ACREA">ACREA</option><option value="AIXAM">AIXAM</option><option value="AIXAM PRO">AIXAM PRO</option><option value="ALFA ROMEO">ALFA ROMEO</option><option value="AUDI">AUDI</option><option value="APRILIA">APRILIA</option><option value="ASTON MARTIN">ASTON MARTIN</option><option value="BENELLI">BENELLI</option><option value="BETA">BETA</option><option value="BIMOTA">BIMOTA</option><option value="BMW">BMW</option><option value="BUELL">BUELL</option><option value="CAGIVA">CAGIVA</option><option value="CHATENET">CHATENET</option><option value="CHRYSLER">CHRYSLER</option><option value="CITROEN">CITROEN</option><option value="COMARTH">COMARTH</option><option value="COURB">COURB</option><option value="DACIA">DACIA</option><option value="DANGEL">DANGEL</option><option value="DE LOREAN">DE LOREAN</option><option value="DE TOMASO">DE TOMASO</option><option value="DKW">DKW</option><option value="DODGE">DODGE</option><option value="DAELIM">DAELIM</option><option value="DERBI">DERBI</option><option value="DUCATI">DUCATI</option><option value="DODGE">DODGE</option><option value="DONKERVOORT">DONKERVOORT</option><option value="DS">DS</option><option value="DUE">DUE</option><option value="ERAD">ERAD</option><option value="EXCALIBUR">EXCALIBUR</option><option value="EDUARD">EDUARD</option><option value="FAUTRAS">FAUTRAS</option><option value="FERRARI">FERRARI</option><option value="FIAT">FIAT</option><option value="FORD">FORD</option><option value="GAC GONOW">GAC GONOW</option><option value="GAS GAS">GAS GAS</option><option value="GG">GG</option><option value="GILERA">GILERA</option><option value="HARLEY DAVIDSON">HARLEY DAVIDSON</option><option value="HEADBANGER">HEADBANGER</option><option value="HM">HM</option><option value="HONDA">HONDA</option><option value="HYUNDAI">HYUNDAI</option><option value="HUSABERG">HUSABERG</option><option value="HUSQVARNA">HUSQVARNA</option><option value="HYOSUNG">HYOSUNG</option><option value="INDIAN">INDIAN</option><option value="ISUZU">ISUZU</option><option value="IVECO">IVECO</option><option value="JEEP">JEEP</option><option value="JDM SIMPA">JDM SIMPA</option><option value="Jinlun">Jinlun</option><option value="KAWASAKI">KAWASAKI</option><option value="KEEWAY">KEEWAY</option><option value="KNIEVEL">KNIEVEL</option><option value="KTM">KTM</option><option value="KYMCO">KYMCO</option><option value="KIA">KIA</option><option value="LADA">LADA</option><option value="LAMBORGHINI">LAMBORGHINI</option><option value="LANCIA">LANCIA</option><option value="LAND ROVER">LAND ROVER</option><option value="LEONART">LEONART</option><option value="LEXUS">LEXUS</option><option value="LIGIER">LIEBHERR</option><option value="MAN">MAN</option><option value="MAZDA">MAZDA</option><option value="MASH">MASH</option><option value="MATRA">MATRA</option><option value="MBK">MBK</option><option value="MCCORMICK">MCCORMICK</option><option value="MONTESA">MONTESA</option><option value="MOTO GUZZI">MOTO GUZZI</option><option value="MOTO MORINI">MOTO MORINI</option><option value="MOTRAC">MOTRAC</option><option value="MV AGUSTA">MV AGUSTA</option><option value="MZ">MZ</option><option value="MEGA">MEGA</option><option value="MERCEDES">MERCEDES</option><option value="MINI">MINI</option><option value="MINI MOKE">MINI MOKE</option><option value="MITSUBISHI">MITSUBISHI</option><option value="NISSAN">NISSAN</option><option value="OPEL">OPEL</option><option value="PEUGEOT">PEUGEOT</option><option value="PIAGGIO">PIAGGIO</option><option value="PORSCHE">PORSCHE</option><option value="RENAULT">RENAULT</option><option value="REWACO">REWACO</option><option value="RIEJU">RIEJU</option><option value="ROVER">ROVER</option><option value="ROYAL ENFIELD">ROYAL ENFIELD</option><option value="SANTANA">SANTANA</option><option value="SATELLITE">SATELLITE</option><option value="SEAT">SEAT</option><option value="SKODA">SKODA</option><option value="SMART">SMART</option><option value="SHERCO">SHERCO</option><option value="SKY TEAM">SKY TEAM</option><option value="SUBARU">SUBARU</option><option value="SUZUKI">SUZUKI</option><option value="SWM">SWM</option><option value="SYM">SYM</option><option value="SSANGYONG">SSANGYONG</option><option value="TOYOTA">TOYOTA</option><option value="TRIGANO">TRIGANO</option><option value="TM">TM</option><option value="TNT MOTOR">TNT MOTOR</option><option value="TOMOS">TOMOS</option><option value="TRIUMPH">TRIUMPH</option><option value="VAN HOOL">VAN HOOL</option><option value="VAX">VAX</option><option value="VEZEKO">VEZEKO</option><option value="VELOSOLEX">VELOSOLEX</option><option value="VOLKSWAGEN">VOLKSWAGEN</option><option value="VOLVO">VOLVO</option><option value="WEYTENS">WEYTENS</option><option value="YAMAHA">YAMAHA</option><option value="AUTRE">AUTRE</option>
                </select>
              </div>
            </div>

            <div class="col-11 col-md-6 mx-auto search-box">
              <div class="row col-12 mx-auto input-group ">
                <div class="col-12 search-box--titre">
                  Energie
                </div>
                <select class="mx-auto search-form" name="energie">
              		<option value="1">Diesel/Essence (GO/ES)</option>
              		<option value="2">Electricité (EL)</option>
              		<option value="3">Hybride (GH/GL/EH)</option>
              		<option value="4">GPL/GNV</option>
              		<option value="5">Superéthanol</option>
              		<option value="6">Biocarburants</option>
              	</select>
              </div>
            </div>

            <div class="col-11 col-md-6 mx-auto search-box">
              <div class="row col-12 mx-auto input-group ">
                <div class="col-12 search-box--titre">
                  Nombre de Cheval Fiscal (CV)
                </div>
          <input class="mx-auto search-form" type="number" name="cv" max=60 min=1 required><br>
              </div>
            </div>





              <div class="col-11 col-md-6 mx-auto search-box">
                <div class="row col-12 mx-auto input-group ">
                  <div class="col-12 search-box--titre">
                    Date de mise en circulation
                  </div>
          	<input class="mx-auto search-form" type="date" name="circulation" required><br>
                </div>
              </div>


              <div class="col-11 col-md-6 mx-auto search-box">
                <div class="row col-12 mx-auto input-group ">
                  <div class="col-12 search-box--titre">
                    CO2
                  </div>
          	<input class="mx-auto search-form" type="number" name="co2" max=1000 min=0 required><br>
                </div>
              </div>


              <div class="col-11 col-md-6 mx-auto search-box">
                <div class="row col-12 mx-auto input-group ">
                  <div class="col-12 search-box--titre">
                    Poids vehicule
                  </div>
                  <select class="mx-auto search-form" name="ptac">
                		<option value="1">Inférieur ou égal à 3,5 tonnes</option>
                		<option value="2">Entre 3,5 et 6 tonnes</option>
                		<option value="3">Entre 6 et à 11 tonnes</option>
                		<option value="4">Supérieur à 11 tonnes</option>
                	</select>
                </div>
              </div>




            <div class="col-12 col-md-6 mx-auto text-center search-box">
              <button type="submit" class="btn btn-primary btn-sm mx-auto">COMMANDER</button>
            </div>
            </form>
          </div>
        </div>
      </div>
      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Fermer</button>
      </div>

    </div>
  </div>

</div>
<?php
include __DIR__.'/../menu.php';
?>
<?php
include __DIR__.'/../footer.php';
?>
