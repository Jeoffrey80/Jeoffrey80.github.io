<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $dateNaissance = $_POST["date_naissance"];
    $email = $_POST["email"];
    $motDePasse = $_POST["mot_de_passe"];
    $confirmationMotDePasse = $_POST["confirmation_mot_de_passe"];
    $adresse = $_POST["adresse"];

    // Vérifier si les mots de passe correspondent
    if ($motDePasse !== $confirmationMotDePasse) {
        $messageErreur = "Les mots de passe ne correspondent pas. Veuillez réessayer.";
    } else {
        // Enregistrer les informations de l'utilisateur dans le fichier
        $fichier = fopen("utilisateurs.txt", "a");
        if ($fichier) {
            $ligne = $nom . "," . $prenom . "," . $dateNaissance . "," . $email . "," . $motDePasse . "," . $adresse . "\n";
            fwrite($fichier, $ligne);
            fclose($fichier);
            echo "Inscription réussie !";
            header("Location: Connexion.php");
            } else {
            echo "Une erreur s'est produite lors de l'ouverture du fichier.";
        }
    }
}
?>

<?php 
$title = "Inscription";
include 'header.php';
?>

    <h1>Inscription</h1>
    <?php if (isset($messageErreur)) { ?>
        <p><?php echo $messageErreur; ?></p>
    <?php } ?>
    <form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <label for="nom">Nom :</label>
        <input type="text" name="nom" required><br>

        <label for="prenom">Prénom :</label>
        <input type="text" name="prenom" required><br>

        <label for="date_naissance">Date de naissance :</label>
        <input type="date" name="date_naissance" required><br>

        <label for="email">Email :</label>
        <input type="email" name="email" required><br>

        <label for="mot_de_passe">Mot de passe :</label>
        <input type="password" name="mot_de_passe" required><br>

        <label for="confirmation_mot_de_passe">Confirmer le mot de passe :</label>
        <input type="password" name="confirmation_mot_de_passe" required><br>

        <label for="adresse">Adresse :</label>
        <textarea name="adresse" required></textarea><br>

        <input type="submit" value="S'inscrire">
    </form>
</body>
</html>
