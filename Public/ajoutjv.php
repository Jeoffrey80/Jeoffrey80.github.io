<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();
include 'db_connection.php'; // Inclure la connexion à la base de données

// Vérifier si l'utilisateur est connecté, sinon rediriger vers la page de connexion
if (!isset($_SESSION["pseudo"])) {
    header("Location: connexion.php");
    exit();
}

$successMessage = "";
$errorMessage = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nomJeu = $_POST["nomJeu"];
    $plateforme = $_POST["plateforme"];
    $tempsDeJeu = $_POST["tempsDeJeu"];
    $trophees = $_POST["trophees"];
    $jeuFini = isset($_POST["jeuFini"]) ? 1 : 0;
    $pseudo = $_SESSION["pseudo"];

    // Gestion de l'upload de l'image
    $target_dir = 'uploads/';
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    if (isset($_FILES["image"])) {
        $check = getimagesize($_FILES["image"]["tmp_name"]);
        if ($check !== false) {
            if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                $sql = "INSERT INTO jeux (nomjeu, plateforme, tmpsjeu, trophéeobt, jeufini, pseudoj, img)
                        VALUES (?, ?, ?, ?, ?, ?, ?)";

                $stmt = $conn->prepare($sql);
                if ($stmt->execute([$nomJeu, $plateforme, $tempsDeJeu, $trophees, $jeuFini, $pseudo, $target_file])) {
                    $successMessage = "Jeu ajouté avec succès !";
                    header("Location: afficherjv.php?lastinsertid=" . $conn->lastInsertId()); // Rediriger vers afficherjv.php avec l'ID du dernier ajout
                    exit();
                } else {
                    $errorMessage = "Erreur lors de l'ajout du jeu : " . $stmt->errorInfo()[2];
                }
            } else {
                $errorMessage = "Une erreur s'est produite lors du téléchargement de l'image.";
            }
        } else {
            $errorMessage = "Le fichier n'est pas une image valide.";
        }
    }
}
?>


<style>
    .custom-bg {
        background-color: rgb(245, 245, 220);
    }
</style>
<body class="fondajoutjv">
    <?php include 'header.php'; ?>

    <div class="main-content text-center ">
    <div class="form-wrapper"style="max-width: 500px; margin: 0 auto; padding: 20px; border-radius: 10px;">
        
        <?php
        if (!empty($successMessage)) {
            echo "<p class='success'>$successMessage</p>";
        }
        if (!empty($errorMessage)) {
            echo "<p class='error'>$errorMessage</p>";
        }
        ?>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data" class="custom-bg">
        <div class="mx-auto custom-bg p-4" style="max-width: 400px;">  
         <h2>Ajouter un jeu vidéo</h2>
         <br>
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
                </optgroup>
                <optgroup label="Sega">
                    <option value="MasterSystem">Master System</option>
                    <option value="Genesis">Genesis</option>
                    <option value="Saturn">Saturn</option>
                    <option value="Dreamcast">Dreamcast</option>
                </optgroup>
                <optgroup label="Sony">
                    <option value="PS1">PlayStation 1</option>
                    <option value="PS2">PlayStation 2</option>
                    <option value="PS3">PlayStation 3</option>
                    <option value="PS4">PlayStation 4</option>
                    <option value="PS5">PlayStation 5</option>
                    <option value="PsP">PsP</option>
                    <option value="PsVita">PsVita</option>
                </optgroup>
                <optgroup label="Microsoft">
                    <option value="Xbox">Xbox</option>
                    <option value="Xbox360">Xbox 360</option>
                    <option value="XboxOne">Xbox One</option>
                    <option value="XboxSeriesX">Xbox Series X</option>
                </optgroup>
                <optgroup label="PC">
                    <option value="PC">PC</option>
                </optgroup>
            </select><br>
            <br>
            <label for="tempsDeJeu">Temps de jeu:</label>
            <input type="text" name="tempsDeJeu" required><br>
            <br>
            <label for="trophees">Trophées obtenus (%):</label>
            <input type="number" name="trophees" min="0" max="100" required><br>
            <br>
            <label for="jeuFini">Jeu fini:</label>
            <input type="checkbox" name="jeuFini"><br>
            <br>
            <label for="image">Image du jeu:</label>
            <input type="file" name="image" accept="image/*"><br>
            <br>
            <input type="submit" value="Ajouter le jeu">
    </div>
        </form>
    </div>
    </div>

    <footer class=footer>
                <?php
                include 'footer.php';
                ?>
            </footer>
</body>
