<?php
// Démarrer la session
session_start();

// Vérifier si le pseudo est stocké dans la variable de session
if (isset($_SESSION["pseudo"])) {
    $pseudo = $_SESSION["pseudo"];
} else {
    // Rediriger vers la page de connexion si le pseudo n'est pas défini
    header("Location: connexion.php");
    exit();
}

// Fonction de déconnexion
if (isset($_GET["logout"])) {
    session_destroy(); // Détruire toutes les données de la session
    header("Location: connexion.php");
    exit();
}
// Fonction pour supprimer les jeux sélectionnés
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST["delete"])) {
        $selectedGames = $_POST["delete"];
        $pseudo = $_SESSION["pseudo"];

        $filename = "jv_data_" . $pseudo . ".txt";

        // Lire le contenu du fichier
        $content = file_get_contents($filename);

        // Supprimer les jeux sélectionnés du contenu
        foreach ($selectedGames as $gameName) {
            // Recherche le début du jeu à supprimer
            $startPos = strpos($content, "Nom du jeu: " . $gameName);

            // Recherche la fin du jeu à supprimer (la ligne "Jeu fini: Oui" ou "Jeu fini: Non")
            $endPos = strpos($content, "Jeu fini", $startPos);

            // Supprime le contenu du jeu du fichier
            if ($startPos !== false && $endPos !== false) {
                // Trouve la fin de la ligne "Jeu fini: Oui" ou "Jeu fini: Non"
                $endLinePos = strpos($content, "\n", $endPos);
                $endLinePos = ($endLinePos !== false) ? $endLinePos + 1 : $endPos;

                $content = substr_replace($content, "", $startPos, $endLinePos - $startPos);
            }
        }

        // Réécrire le contenu du fichier avec les jeux supprimés
        file_put_contents($filename, $content);

        // Rediriger vers la page actuelle pour rafraîchir la liste après suppression
        header("Location: afficherjv.php");
        exit();
    }
}

// Fonction pour afficher les jeux de l'utilisateur
function displayGames() {
    $pseudo = $_SESSION["pseudo"];
    $filename = "jv_data_" . $pseudo . ".txt";

    if (file_exists($filename)) {
        $content = file_get_contents($filename);

        // Recherche du nom du jeu et affichage
        preg_match_all("/Nom du jeu: (.*?)\n/", $content, $matches);
        $gamesList = $matches[1];

        echo '<form action="' . htmlspecialchars($_SERVER["PHP_SELF"]) . '" method="post">';
        foreach ($gamesList as $gameName) {
            echo '<input type="checkbox" name="delete[]" value="' . $gameName . '">' . $gameName . '<br>';
        }
        echo '<input type="submit" value="Supprimer">';
        echo '</form>';
    } else {
        echo "Aucun jeu enregistré.";
    }
}
?>

<head>
</head>
<body>
    <?php
    include 'header.php';
    ?>

    <div class="main-content">
    <br>
                    <div class="form-container">
                        <div class="form-wrapper">
        <h2>Liste des jeux vidéo enregistrés</h2>
        <?php displayGames(); ?>
    </div>  
</div>
</div> 

    <footer class="footer">
        <?php
        include 'footer.php';
        ?>
    </footer>
</body>