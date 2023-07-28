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
?>
<head>
</head>
    <body class="fondmanga">
    
                <?php
                include 'header.php';
                ?>
                <div class="main-content">
                    <br>
                    <!-- Boutons centrés -->
                    <div style="text-align: center;">
                        <a href="ajoutmanga.php"><button>Ajouter un manga</button></a>
                        <a href="affichermanga.php"><button>Afficher les mangas</button></a>
                    </div>
                </div>    

            <footer class=footer>
                <?php
                include 'footer.php';
                ?>
            </footer>
    </body>