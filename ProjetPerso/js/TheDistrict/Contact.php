<?php 
$title = "Contact";
include 'header.php';
?>
<body>
  <br><br>
  <div class="d-flex flex-column justify-content-center align-items-center couleur-navigation-text text-center">
    <!--Formulaire de contact-->
    <div class="d-flex couleur-navigation-text justify-content-center fs-1 my-4 mx-5">
      <h1 class="mx-2"><b>Contact</b></h1>
    </div>
    <div class="d-flex couleur-navigation-text justify-content-center fs-5 mx-2">
      <p><i><small>* Ces zones sont obligatoires</small></i></p>
    </div>
    <form method="post" action="traitform.php" onsubmit="return validerFormulaire();"
      oninvalid="alert('Veuillez entrer les champs demandés (Obligatoire!)');">
      <div class="mx-2"><b>Vos coordonées</b></div>
      <div class="mt-2">
        <div class="mx-2">
          <label for="nom"><b>Votre nom* :</b></label><br>
          <input type="text" id="nom" name="nom" required>
        </div>
      </div>
      <div class="mt-2">
        <div class="mx-2">
          <label for="prenom"><b>Votre prénom* :</b></label><br>
          <input type="text" id="prenom" name="prenom" required>
        </div>
      </div>
      <div class="mt-2">
        <div class="mx-2">
          <label for="telephone"><b>Téléphone* :</b></label><br>
          <input type="text" id="telephone" name="telephone" required>
        </div>
      </div>
      <div class="mt-2">
        <div class="mx-2  my-1">
          <label for="email"><b>Email*:</b></label><br>
          <input type="email" id="email" placeholder="totodutoto@mail.fr" name="email" required>
        </div>
      </div>
      <div class="mt-2">
        <fieldset class="mx-2">
          <div class="mx-2">
            <label for="question" ><b>Votre Demande :</b></label><br>
            <textarea id="question" name="question"></textarea>
          </div>
          <p></p>
        </fieldset>
      </div>
      <p><input type="checkbox" required class="mx-2"><b>* J'accepte le traitement informatique de ce formulaire</b></p>
      <div class="d-flex justify-content-center mx-4 mt-2 my-2">
        <input type="submit" value="Envoyer" class="modification-btn mx-2">
        <button type="button" onclick="resetForm()" class="modification-btn">Effacer</button>
      </div>
    </form>
  </div><!--Fin du formulaire de contact-->

  <script>//Fonction en JS permettant l'obligation à l'utilisateur d'entrer toutes les coordonnées demandé sur la page
    function validerFormulaire() {
      const nom = document.getElementById("nom").value;
      const prenom = document.getElementById("prenom").value;
      const telephone = document.getElementById("telephone").value;
      const email = document.getElementById("email").value;
      const question = document.getElementById("question").value;
      const regexEmail = /\S+@\S+\.\S+/;
      const regexNumero = /^\d{10}$/;

      if (nom.trim() === "") {
        alert("Veuillez marquer votre nom de famille (obligatoire!)");
        return false;
      }

      if (prenom.trim() === "") {
        alert("Veuillez marquer votre prénom (obligatoire!)");
        return false;
      }

      if (!regexNumero.test(telephone)) {
        alert("Le numéro de téléphone doit comporter exactement 10 chiffres (obligatoire!)");
        return false;
      }

      if (!regexEmail.test(email)) {
        alert("L'e-mail doit comporter au moins le caractère @ (obligatoire!)");
        return false;
      }
      
      return true;
    }

    function resetForm() {//Fonction permettant de remettre le formulaire de contact vierge
      document.getElementById("nom").value = "";
      document.getElementById("prenom").value = "";
      document.getElementById("telephone").value = "";
      document.getElementById("email").value = "";
      document.getElementById("question").value = "";
    }
  </script><!--Fin de la fonction JS-->
  <!-- SB Forms JS -->
  <br><br>
</body>
<foot>
  <?php include 'footer.php';?>
</foot>

<script type="module" src="dist/assets/index.js"></script>
</html>