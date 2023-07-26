<?php
// Démarrer la session
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $pseudo = $_POST["pseudo"];
    $password = $_POST["password"];

    // Lire le contenu du fichier data.txt
    $data = file_get_contents("data.txt");

    // Vérifier si les informations de connexion sont correctes
    if (strpos($data, "Pseudo: " . $pseudo) !== false && strpos($data, "Mot de passe: " . $password) !== false) {
        // Authentification réussie, stocker le pseudo dans une variable de session
        $_SESSION["pseudo"] = $pseudo;

        // Redirection vers index.php après connexion réussie
        header("Location: index.php");
        exit();
    } else {
        echo "Pseudo ou mot de passe incorrect.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Page de connexion</title>
</head>
<body>
    <h2>Connexion</h2>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label for="pseudo">Pseudo:</label>
        <input type="text" name="pseudo" required><br>

        <label for="password">Mot de passe:</label>
        <input type="password" name="password" required><br>

        <input type="submit" value="Se connecter">
    </form>
    <h3>Pas de compte ? <a href="inscription.php">Inscrivez-vous !</a></h3>
</body>
</html>
