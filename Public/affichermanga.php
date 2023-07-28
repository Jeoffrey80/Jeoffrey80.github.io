<?php
// Démarrer la session et autres opérations PHP nécessaires
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

// Fonction pour afficher les mangas de l'utilisateur
function displayMangas() {
    $pseudo = $_SESSION["pseudo"];
    $filename = "manga_data_" . $pseudo . ".txt";

    if (file_exists($filename)) {
        $content = file_get_contents($filename);

        // Recherche des noms de mangas
        preg_match_all("/Nom du Manga: (.*?)\n/s", $content, $matches);
        $mangaList = $matches[1];

        if (!empty($mangaList)) {
            echo '<form action="' . htmlspecialchars($_SERVER["PHP_SELF"]) . '" method="post">';
            echo '<label for="display">Sélectionner un manga :</label>';
            echo '<select name="display">';
            foreach ($mangaList as $mangaName) {
                echo '<option value="' . $mangaName . '">' . $mangaName . '</option>';
            }
            echo '</select>';
            echo '<input type="submit" value="Afficher">';
            echo '</form>';
        } else {
            echo "Aucun manga enregistré.";
        }
    } else {
        echo "Aucun manga enregistré.";
    }
}

// Fonction pour afficher les détails d'un manga sélectionné
function displayMangaDetails($mangaTitle) {
    $pseudo = $_SESSION["pseudo"];
    $filename = "manga_data_" . $pseudo . ".txt";

    if (file_exists($filename)) {
        $content = file_get_contents($filename);
        preg_match("/Nom du Manga: " . $mangaTitle . "(.*?)\n\n/s", $content, $matches);

        if (!empty($matches[1])) {
            echo "<h3>Détails du manga : " . $mangaTitle . "</h3>";
            echo nl2br($matches[1]); // La fonction nl2br permet de conserver les sauts de ligne dans le texte affiché
        } else {
            echo "Aucun détail trouvé pour le manga : " . $mangaTitle;
        }
    } else {
        echo "Aucun manga enregistré.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <?php include 'header.php'; ?>

    <div class="main-content">
        <h2>Liste des mangas enregistrés</h2>
        <?php displayMangas(); ?>
    

     <div class="details-container"> <!--Ajouter la classe details-container ici 
        <h2>Afficher les détails d'un manga</h2>-->
        <!-- Ici, vous pouvez placer le formulaire pour sélectionner le manga -->
        <!--<form action="
        <?php //echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <label for="display">Sélectionner un manga :</label>
            <select name="display">
                <?php
                // Affiche les options pour les noms de mangas
                //foreach ($mangaList as $mangaName) {
                    //echo '<option value="' . $mangaName . '">' . $mangaName . '</option>';
                //}
                ?>
            </select>
            <input type="submit" value="Afficher">
        </form>-->

        <!-- Ici, vous pouvez afficher les détails du manga sélectionné -->
        <?php
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            if (isset($_POST["display"])) {
                $selectedManga = $_POST["display"];
                displayMangaDetails($selectedManga);
            }
        }
        ?>
    </div>
</div>
    <footer class="footer">
        <?php include 'footer.php'; ?>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>
