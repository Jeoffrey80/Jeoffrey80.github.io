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
    $nomJeu = $_POST["nomJeu"];
    $plateforme = $_POST["plateforme"];
    $tempsDeJeu = $_POST["tempsDeJeu"];
    $trophees = $_POST["trophees"];
    $jeuFini = isset($_POST["jeuFini"]) ? "Oui" : "Non";

    // Créer le contenu à enregistrer dans le fichier txt
    $data = "Nom du jeu: " . $nomJeu . "\n";
    $data .= "Plateforme: " . $plateforme . "\n";
    $data .= "Temps de jeu: " . $tempsDeJeu . "\n";
    $data .= "Trophées obtenus (%): " . $trophees . "\n";
    $data .= "Jeu fini: " . $jeuFini . "\n\n";

    // Récupérer le nom de l'utilisateur connecté depuis la session
    $pseudo = $_SESSION["pseudo"];

    // Enregistrer les données dans le fichier spécial jv de l'utilisateur
    $file = fopen("jv_data_" . $pseudo . ".txt", "a");
    fwrite($file, $data);
    fclose($file);

    echo "Les données du jeu ont été enregistrées.";
}
?>
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
                    <h2>Ajouter un jeu vidéo</h2>
                    <br>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <label for="nomJeu">Nom du jeu:</label>
            <input type="text" name="nomJeu" required><br>
            <br>
            <label for="plateforme">Plateforme:</label>
            <select name="plateforme" required>
                <option value="" disabled selected>Choisir une plateforme</option>
                <optgroup label="Nintendo">
                    <option value="NES">NES</option>
                    <option value="SNES">SNES</option>
                    <option value="N64">N64</option>
                    <option value="GameCube">GameCube</option>
                    <option value="Wii">Wii</option>
                    <option value="WiiU">WiiU</option>
                    <option value="Switch">Switch</option>
                    <option value="GB">GB/GBC</option>
                    <option value="GBA">GBA/GBASP/Micro</option>
                    <option value="DS">DS</option>
                    <option value="3DS">3DS</option>
                    <!-- Ajoutez d'autres consoles Nintendo ici si nécessaire -->
                </optgroup>
                <optgroup label="Sega">
                    <option value="MasterSystem">Master System</option>
                    <option value="Genesis">Genesis</option>
                    <option value="Saturn">Saturn</option>
                    <option value="Dreamcast">Dreamcast</option>
                    <!-- Ajoutez d'autres consoles Sega ici si nécessaire -->
                </optgroup>
                <optgroup label="Sony">
                    <option value="PS1">PlayStation 1</option>
                    <option value="PS2">PlayStation 2</option>
                    <option value="PS3">PlayStation 3</option>
                    <option value="PS4">PlayStation 4</option>
                    <option value="PS5">PlayStation 5</option>
                    <option value="PsP">PsP</option>
                    <option value="PsVita">PsVita</option>
                    <!-- Ajoutez d'autres consoles Sony ici si nécessaire -->
                </optgroup>
                <optgroup label="Microsoft">
                    <option value="Xbox">Xbox</option>
                    <option value="Xbox360">Xbox 360</option>
                    <option value="XboxOne">Xbox One</option>
                    <option value="XboxSeriesX">Xbox Series X</option>
                    <!-- Ajoutez d'autres consoles Microsoft ici si nécessaire -->
                </optgroup>
                <optgroup label="PC">
                    <option value="PC">PC</option>
                </optgroup>
            </select><br><br>
            <label for="tempsDeJeu">Temps de jeu:</label>
            <input type="text" name="tempsDeJeu" required><br>
            <br>
            <label for="trophees">Trophées obtenus (%):</label>
            <input type="number" name="trophees" min="0" max="100" required><br>
            <br>
            <label for="jeuFini">Jeu fini:</label>
            <input type="checkbox" name="jeuFini"><br>
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