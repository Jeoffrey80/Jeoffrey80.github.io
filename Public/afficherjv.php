<?php
// Démarrer la session
session_start();
include 'db_connection.php'; // Inclure la connexion à la base de données

// Vérifier si l'utilisateur est connecté, sinon rediriger vers la page de connexion
if (!isset($_SESSION["pseudo"])) {
    header("Location: connexion.php");
    exit();
}

// Récupérer l'ID du jeu sélectionné si présent dans l'URL
$selectedGameId = isset($_GET['gameId']) ? $_GET['gameId'] : null;

// Fonction pour afficher les détails d'un jeu sélectionné
function displayGameDetails($gameId) {
    global $conn;

    $sql = "SELECT * FROM jeux WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$gameId]);
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($row) {
        echo '<div class="game-details text-center">';
        echo '<h3>' . htmlspecialchars($row["nomjeu"]) . '</h3>';
        echo '<img src="' . htmlspecialchars($row["img"]) . '" alt="Image du jeu">';
        echo '<p>Plateforme: ' . htmlspecialchars($row["plateforme"]) . '</p>';
        echo '<p>Temps de jeu: ' . htmlspecialchars($row["tmpsjeu"]) . '</p>';
        echo '<p>Trophées obtenus: ' . htmlspecialchars($row["trophéeobt"]) . '%</p>';
        echo '<p>Jeu fini: ' . ($row["jeufini"] == 1 ? "Oui" : "Non") . '</p>';
        echo '</div>';
    } else {
        echo "Jeu non trouvé.";
    }
}
?>
<style>
    .custom-bg {
        background-color: rgb(245, 245, 220);
    }
</style>
<head>
    <title>Afficher un jeu vidéo</title>
</head>
<body>
    <?php include 'header.php'; ?>

    <div class="main-content text-center">
        <h2>Afficher un jeu vidéo</h2>
        <form class="custom-bg"action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="get">
            <label for="gameId">Sélectionner un jeu à afficher:</label>
            <select name="gameId" required>
                <option value="" disabled selected>Choisir un jeu</option>
                <?php
                // Afficher la liste des jeux de l'utilisateur pour sélection
                $pseudo = $_SESSION["pseudo"];
                $sql = "SELECT id, nomjeu FROM jeux WHERE pseudoj = ?";
                $stmt = $conn->prepare($sql);
                $stmt->execute([$pseudo]);
                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    echo '<option value="' . $row["id"] . '">' . htmlspecialchars($row["nomjeu"]) . '</option>';
                }
                ?>
            </select><br>
            <input type="submit" class="btn btn-primary" value="Afficher">
        </form>
<br>
        <?php
        // Afficher les détails du jeu sélectionné s'il existe
        if ($selectedGameId !== null) {
            displayGameDetails($selectedGameId);
            echo '<div class="custom-bg"><style>.game-details img { max-width: 300px; max-height: 500px; }</style></div>';
        }
        ?>
    </div>

    <footer class=footer>
                <?php
                include 'footer.php';
                ?>
            </footer>
</body>
</html>