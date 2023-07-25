
<!--Début du header pour la partie Layout(entete) -->
<?php $title = "commande";include 'header.php';?>
<!--Fin du header pour la partie Layout(entete) -->

<style>
  #panier-liste {
    list-style-type: none;
    padding-left: 0;
  }
  #panier-liste img{
    width:250px;
    height: 150px;
  }
</style>

    <div class="text-center" >
        <h1>Mon Panier</h1>
        <h2>Produits sélectionnés :</h2>
        <ul  id="panier-liste"></ul>
        <h2>Prix total :</h2>
        <p id="prix-total"></p>
        <button onclick="resetPanier()">Réinitialiser</button>
    </div>
    <script>
        function resetPanier() {
            // Supprimer les données du sessionStorage
            sessionStorage.removeItem("panier");
            sessionStorage.removeItem("prixTotal");

            // Rediriger vers la page principale
            window.location.href = "Plats.php";
        }

        document.addEventListener("DOMContentLoaded", function () {
            // Récupérer les données du sessionStorage
            var panier = JSON.parse(sessionStorage.getItem("panier")) || [];

            // Calculer le prix total
            var prixTotal = 0;
            panier.forEach(function (produit) {
                prixTotal += produit.prix;
            });

            // Enregistrer le prix total dans le sessionStorage
            sessionStorage.setItem("prixTotal", prixTotal);

            // Afficher les produits sélectionnés
            var panierListe = document.getElementById("panier-liste");
            panier.forEach(function (produit) {
                var li = document.createElement("li");

                var img = document.createElement("img");
                img.src = produit.image;
                img.alt = "Produit";
                li.appendChild(img);

                var div = document.createElement("div");

                var h3 = document.createElement("h3");
                h3.textContent = produit.nom;
                div.appendChild(h3);

                var pDesc = document.createElement("p");
                pDesc.textContent = produit.description;
                div.appendChild(pDesc);

                var pPrix = document.createElement("p");
                
                pPrix.textContent = "Prix : " + produit.prix + "€";
                div.appendChild(pPrix);
                var hr = document.createElement("hr");
                pPrix.insertAdjacentElement("afterend", hr);
                li.appendChild(div);
                panierListe.appendChild(li);
                
            });

            // Afficher le prix total
            var prixTotalElement = document.getElementById("prix-total");
            prixTotalElement.textContent = "Prix total : " + prixTotal.toFixed(2) + "€";
            
        });
    </script>
    <br><br>

    <br>
    <div class="d-flex flex-column justify-content-center align-items-center couleur-navigation-text text-center">
        <!--Formulaire de contact-->
        <div class="d-flex couleur-navigation-text justify-content-center fs-1 my-4 mx-5">
        </div>
        <div class="d-flex couleur-navigation-text justify-content-center fs-5 mx-2">
        </div>
        <div class="container">
            <h1><b>Formulaire de contact</b></h1>
            <p><i><small>* Ces zones sont obligatoires</small></i></p>
            <form method="post" action="index.php" onsubmit="return validerFormulaire();">
                <div class="mx-2"><b>Vos coordonnées</b></div>
                <div class="mt-2">
                    <div class="mx-2">
                        <label for="nom"><b>Votre nom* :</b></label><br>
                        <input type="text" id="nom" name="nom" required
                            oninvalid="this.setCustomValidity('Veuillez marquer votre nom de famille (obligatoire!)')"
                            oninput="this.setCustomValidity('')">
                    </div>
                </div>
                <div class="mt-2">
                    <div class="mx-2">
                        <label for="prenom"><b>Votre prénom* :</b></label><br>
                        <input type="text" id="prenom" name="prenom" required
                            oninvalid="this.setCustomValidity('Veuillez marquer votre prénom (obligatoire!)')"
                            oninput="this.setCustomValidity('')">
                    </div>
                </div>
                <div class="mt-2">
                    <div class="mx-2">
                        <label for="telephone"><b>Téléphone* :</b></label><br>
                        <input type="text" id="telephone" name="telephone" required pattern="\d{10}"
                            oninvalid="this.setCustomValidity('Le numéro de téléphone doit comporter exactement 10 chiffres (obligatoire!)')"
                            oninput="this.setCustomValidity('')">
                    </div>
                </div>
                <div class="mt-2">
                    <div class="mx-2 my-1">
                        <label for="email"><b>Email*:</b></label><br>
                        <input type="email" id="email" placeholder="totodutoto@mail.fr" name="email" required
                            oninvalid="this.setCustomValidity('L\'e-mail doit comporter au moins le caractère @ (obligatoire!)')"
                            oninput="this.setCustomValidity('')">
                    </div>
                </div>
                <div class="mt-2">
                    <fieldset class="mx-2">
                        <div class="mx-2">
                            <label for="question"><b>Adresse :</b></label><br>
                            <textarea id="question" name="question"
                                placeholder="2 Rue du général Toto Apt290 au 6e étage" required
                                oninvalid="this.setCustomValidity('L\'adresse est obligatoire !')"
                                oninput="this.setCustomValidity('')"></textarea>
                        </div>
                        <p></p>
                    </fieldset>
                </div>
                <p><input type="checkbox" required class="mx-2" id="cgu"><b>* J'accepte le traitement informatique de ce
                        formulaire</b></p>
                <div class="d-flex justify-content-center mx-4 mt-2 my-2">
                    <input type="submit" value="Envoyer" class="modification-btn mx-2">
                    <button type="button" onclick="resetForm()" class="modification-btn">Effacer</button>
                </div>
            </form>
        </div>

        <!-- Inclure le fichier JavaScript -->
        <script>
            function validerFormulaire() {
                const nom = document.getElementById("nom").value;
                const prenom = document.getElementById("prenom").value;
                const telephone = document.getElementById("telephone").value;
                const email = document.getElementById("email").value;
                const cgu = document.getElementById("cgu").checked;
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

                if (!cgu) {
                    alert("Vous devez accepter le traitement informatique du formulaire");
                    return false;
                }

                return true;
            }

            function resetForm() {
                document.getElementById("nom").value = "";
                document.getElementById("prenom").value = "";
                document.getElementById("telephone").value = "";
                document.getElementById("email").value = "";
                document.getElementById("question").value = "";
                document.getElementById("cgu").checked = false; // Décocher la case à cocher
            }
        </script>

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    </div>

</body>
<br>
<foot>
    <?php include 'footer.php';?>
</foot>

<script src="dist/assets/index.js"></script>

</html>