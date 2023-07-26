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
    <body class="fondaccueil">
                <?php
                include 'header.php';
                ?>
                <div class="main-content">
                <h2>Bienvenue sur le site, <?php echo $pseudo; ?> !</h2>
                    <p>C'est votre page d'accueil personnalisée.</p>
                    <p>Contenu de la page d'accueil...</p>
                </div>   

            <footer class=footer>
                <?php
                include 'footer.php';
                ?>
            </footer>
    </body>