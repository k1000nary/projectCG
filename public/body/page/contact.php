<?php
include __DIR__.'/../head.php';
?>
  <?php
include __DIR__.'/../menu.php';
?>
    <div class="row contact-content contact-content--texte d-flex flex-row align-items-center my-flex-container">
      <div class="col-10 mx-auto">
  <div class="card">
      <div class="card-header">
          Envoyer un message
      </div>
      <div class="card-block">
          <form role="form">
              <div class="form-group col-lg-4">
                  <label class="form-control-label" for="form-group-input">Prénom</label>
                  <input type="text" class="form-control" id="form-group-input" name="name">
              </div>
              <div class="form-group col-lg-4">
                  <label class="form-control-label" for="form-group-input">Nom</label>
                  <input type="text" class="form-control" id="form-group-input" name="name">
              </div>
              <div class="form-group col-lg-4">
                  <label class="form-control-label" for="form-group-input">Email</label>
                  <input type="text" class="form-control" id="form-group-input" name="email">
              </div>
              <div class="form-group col-lg-4">
                  <label class="form-control-label" for="form-group-input">Raison</label>
                  <select size="0" class="form-control" name="reason">
                      <option>Sales</option>
                      <option>Tech Support</option>
                      <option>General Feedback</option>
                  </select>
              </div>
              <div class="form-group col-lg-12">
                  <label class="form-control-label" for="form-group-input">Notes</label>
                  <textarea class="col-12 mx-auto form-control" id="form-group-input" name="notes" rows="6"></textarea>
              </div>
              <button type="button" class="btn btn-outline-primary">Envoyer</button>
          </form>
      </div>
  </div>
</div>
        <div class="col-12 col-sm-3 contact-content--titre d-flex flex-row align-items-center my-flex-container">
          Editeur&nbsp;:
        </div>

        <div class="col-10 mx-auto col-sm-8 ">
          <p dir="ltr">CGOFFICIEL, SARL au capital de 500,00 €, inscrite au RCS de Toulouse sous le numéro 838 972 917, ayant son siège social&nbsp;20 Impasse Camille Langlade 31100 Toulouse.</p>
          <p dir="ltr">N°&nbsp;de TVA intracommunautaire&nbsp;: FR11 83892917</p>
          <p dir="ltr">Directeur de la publication&nbsp;: Alain ABADIE</p>
          <p dir="ltr">Hébergeur&nbsp;: le Site est hébergé par la société&nbsp;OVH&nbsp;:</p>
          <p dir="ltr">SAS au capital de&nbsp;10&nbsp;069&nbsp;020&nbsp;€</p>
          <p dir="ltr">Siège social : 2 rue Kellermann 59100 Roubaix - France</p>
          <p dir="ltr">RCS Lille Métropole 424 761 419 00045</p>
          <p dir="ltr">Vous trouverez ci-après les conditions d’utilisation du site Internet, que vous acceptez du seul fait de la consultation de ce site. Si vous êtes mineur, vous vous engagez à ne consulter ce site qu’en présence de vos parents ou tuteur qui auront
            préalablement accepté les présentes conditions.</p>
          <p>Les présentes conditions, comme l’ensemble du contenu du site, peuvent être modifiées à tout moment et sans préavis.</p>
          <p>Nous nous réservons le droit de refuser l’admission ou d’exclure et supprimer le profil de toute personne qui ne respecterait pas les présentes conditions.</p>
          <p>Toute prestation de services payants effectuée par l’intermédiaire de notre site est soumise également à nos conditions générales de prestation de services que vous pouvez consulter en cliquant sur ce lien.</p>
          <p>&nbsp;</p>
        </div>
      </div>
      <?php
    include __DIR__.'/../menu.php';
    ?>
      <?php
  include __DIR__.'/../footer.php';
  ?>
