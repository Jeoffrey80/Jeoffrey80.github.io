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
            // Connexion à la base de données en utilisant PDO
            $servername = "localhost"; // Remplacez par le nom de votre serveur
            $username = "jeoffrey"; // Remplacez par votre nom d'utilisateur de la base de données
            $password_db = "jojo123"; // Remplacez par votre mot de passe de la base de données
            $dbname = "siteperso"; // Remplacez par le nom de votre base de données

            try {
                $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password_db);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                // Préparation de la requête d'insertion
                $stmt = $conn->prepare("INSERT INTO infouser (pseudo, email, mdp) VALUES (:pseudo, :email, :mdp)");
                $hashed_password = password_hash($password, PASSWORD_DEFAULT); // Hasher le mot de passe

                // Liaison des paramètres
                $stmt->bindParam(':pseudo', $pseudo);
                $stmt->bindParam(':email', $email);
                $stmt->bindParam(':mdp', $hashed_password);

                // Exécution de la requête
                $stmt->execute();

                echo "Inscription réussie !";

                // Redirection vers la page de connexion après inscription réussie
                header("Location: connexion.php");
                exit(); // Assurez-vous d'utiliser exit() après une redirection pour terminer l'exécution du script

            } catch (PDOException $e) {
                echo "Erreur d'inscription : " . $e->getMessage();
            }
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
