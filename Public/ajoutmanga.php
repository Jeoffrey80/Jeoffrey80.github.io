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
// Traitement du formulaire lorsque celui-ci est soumis
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nomManga = $_POST["nomManga"];
    $typeManga = $_POST["typeManga"];
    $Edition = $_POST["Edition"];
    $nbVolume = $_POST["nbVolume"];
    $nbVolumeLu = $_POST["nbVolumeLu"];
    $mangafini = isset($_POST["mangafini"]) ? "Oui" : "Non";

    // Créer le contenu à enregistrer dans le fichier txt
    $data = "Nom du Manga: " . $nomManga . "\n";
    $data .= "Type de Manga: " . $typeManga ."\n";
    $data .= "Nom Maison D'édition: " . $Edition . "\n";
    $data .= "Nombre de volume: " . $nbVolume . "\n";
    $data .= "Nombre de Volume Lu: " . $nbVolumeLu . "\n";
    $data .= "Manga fini: " . $mangafini . "\n\n";

    // Récupérer le nom de l'utilisateur connecté depuis la session
    $pseudo = $_SESSION["pseudo"];

    // Enregistrer les données dans le fichier spécial manga de l'utilisateur
    $file = fopen("manga_data_" . $pseudo . ".txt", "a");
    fwrite($file, $data);
    fclose($file);

    echo "Les données du manga ont été enregistrées.";
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
                <h2>Ajouter un manga</h2>
                <br>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                    <label for="nomManga">Nom du Manga:</label>
                    <input type="text" name="nomManga" required><br>
                    <br>
                    <label for="typeManga">Type de Manga:</label>
                    <select name="typeManga" required>
                        <option value="Komodo">Komodo</option>
                        <option value="Shonen">Shonen</option>
                        <option value="Seinen">Seinen</option>
                        <option value="Shojo">Shojo</option>
                        <option value="Josei">Josei</option>
                        <option value="Seijin">Seijin</option>
                    </select><br><br>
                    <label for="Edition">Maison d'édition:</label>
                    <input type="text" name="Edition" required><br>
                    <br>
                    <label for="nbVolume">Nombre de Volume:</label>
                    <input type="text" name="nbVolume" required><br>
                    <br>
                    <label for="nbVolumeLu">Nombre de Volume lu:</label>
                    <input type="text" name="nbVolumeLu" required><br>
                    <br>
                    <label for="mangafini">Manga fini ?</label>
                    <input type="checkbox" name="mangafini"><br>
                    <br>
                    <input type="submit" value="Enregistrer">
                </form>
            </div>
        </div>
    </div>  

<footer class=footer>
    <?php
    include 'footer.php';
    ?>
</footer>
</body>