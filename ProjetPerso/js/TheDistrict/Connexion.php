<?php
$title = "connexion";
include 'header.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $motDePasse = $_POST["mot_de_passe"];

    // Vérifier les informations d'identification dans le fichier utilisateurs.txt
    $fichier = fopen("utilisateurs.txt", "r");
    $utilisateurTrouve = false;

    if ($fichier) {
        while (($ligne = fgets($fichier)) !== false) {
            $infosUtilisateur = explode(",", $ligne);
            $emailEnregistre = trim($infosUtilisateur[3]);
            $motDePasseEnregistre = trim($infosUtilisateur[4]);

            if ($emailEnregistre === $email && $motDePasseEnregistre === $motDePasse) {
                $utilisateurTrouve = true;
                break;
            }
        }

        fclose($fichier);

        if ($utilisateurTrouve) {
            header('Location: index.php');
            exit();
        } else {
            echo "Identifiants incorrects. Veuillez réessayer.";
        }
    } else {
        echo "Une erreur s'est produite lors de l'ouverture du fichier.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Connexion</title>
</head>
<body>
    <h1>Connexion</h1>
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="email">Email :</label>
        <input type="email" name="email" required><br>

        <label for="mot_de_passe">Mot de passe :</label>
        <input type="password" name="mot_de_passe" required><br>

        <input type="submit" value="Se connecter">
    </form>
</body>
</html>
