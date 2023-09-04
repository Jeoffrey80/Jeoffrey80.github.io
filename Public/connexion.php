<!DOCTYPE html>
<html>
<head>
    <title>Page de connexion</title>
</head>
<body>
    <?php
    session_start();

    // Vérifier si le formulaire de connexion a été soumis
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $pseudo = $_POST["pseudo"];
        $password = $_POST["password"];

        // Connexion à la base de données en utilisant PDO
        $servername = "localhost"; // Remplacez par le nom de votre serveur
        $username = "jeoffrey"; // Remplacez par votre nom d'utilisateur de la base de données
        $password_db = "jojo123"; // Remplacez par votre mot de passe de la base de données
        $dbname = "siteperso"; // Remplacez par le nom de votre base de données

        try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password_db);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // Requête pour obtenir le mot de passe haché associé au pseudo
            $stmt = $conn->prepare("SELECT mdp FROM infouser WHERE pseudo = :pseudo");
            $stmt->bindParam(':pseudo', $pseudo);
            $stmt->execute();
            $row = $stmt->fetch();

            if ($row && password_verify($password, $row['mdp'])) {
                // Mot de passe correct, authentification réussie
                $_SESSION["pseudo"] = $pseudo;
                header("Location: index.php"); // Redirection vers la page d'accueil après connexion
                exit();
            } else {
                echo "Pseudo ou mot de passe incorrect.";
            }

        } catch (PDOException $e) {
            echo "Erreur de connexion : " . $e->getMessage();
        }
    }
    ?>
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
