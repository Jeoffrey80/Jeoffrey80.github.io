<!DOCTYPE html>
<html>
<head>
    <title>Page d'inscription</title>
</head>
<body>
    <?php
    // Vérifier si le formulaire a été soumis
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $pseudo = $_POST["pseudo"];
        $password = $_POST["password"];
        $confirm_password = $_POST["confirm_password"];
        $email = $_POST["email"];

        if ($password !== $confirm_password) {
            echo "Les mots de passe ne correspondent pas.";
        } else {
            // Concaténer les données en une chaîne pour l'enregistrement dans le fichier
            $data = "Pseudo: " . $pseudo . "\n" . "Mot de passe: " . $password . "\n" . "Adresse email: " . $email . "\n";

            // Ouvrir le fichier en mode écriture et ajouter les données
            $file = fopen("data.txt", "a");
            fwrite($file, $data);
            fclose($file);

            echo "Inscription réussie ! Les données ont été enregistrées dans le fichier data.txt.";

            // Redirection vers la page connexion.php après inscription réussie
            header("Location: connexion.php");
            exit(); // Assurez-vous d'utiliser exit() après une redirection pour terminer l'exécution du script
        }
    }
    ?>
    <h2>Inscription</h2>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label for="pseudo">Pseudo:</label>
        <input type="text" name="pseudo" required><br>

        <label for="password">Mot de passe:</label>
        <input type="password" name="password" required><br>

        <label for="confirm_password">Confirmation du mot de passe:</label>
        <input type="password" name="confirm_password" required><br>

        <label for="email">Adresse email:</label>
        <input type="email" name="email" required><br>

        <input type="submit" value="S'inscrire">
    </form>
    <h3>Vous avez déjà un compte ? <a href="connexion.php"> Connectez-vous !</a></h3>
</body>
</html>
