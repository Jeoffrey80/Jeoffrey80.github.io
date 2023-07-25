<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercices Fichiers</title>
    
</head>
<body>
<?php
// Chemin vers le fichier à lire
$cheminFichier = 'liens.txt';

// Lecture du contenu du fichier
$contenuFichier = file_get_contents($cheminFichier);

// Séparation du contenu en lignes
$lignes = explode("\n", $contenuFichier);

// Construction de la liste de liens hypertextes
$listeLiens = '';
foreach ($lignes as $ligne) {
    // Supprimer les espaces blancs en début et fin de ligne
    $ligne = trim($ligne);
    
    // Vérifier si la ligne est vide
    if (!empty($ligne)) {
        // Générer le lien hypertexte
        $listeLiens .= '<li><a href="' . $ligne . '">' . $ligne . '</a></li>';
    }
}

// Construction de la page web
$pageWeb = '<html>
<head>
    <title>Liste de liens</title>
</head>
<body>
    <h1>Liste de liens</h1>
    <ul>' . $listeLiens . '</ul>
</body>
</html>';

// Affichage de la page web
echo $pageWeb;
?>
<b><hr></b>
<?php
// Chemin vers le fichier customers.csv
$cheminFichier = 'customers.csv';

// Lecture du contenu du fichier
$contenuCSV = file($cheminFichier);

// Tableau pour stocker les utilisateurs
$utilisateurs = [];

// Parcourir chaque ligne du fichier CSV
foreach ($contenuCSV as $ligne) {
    // Découper la ligne en utilisant la virgule comme séparateur
    $utilisateur = explode(',', $ligne);

    // Ajouter l'utilisateur au tableau
    $utilisateurs[] = $utilisateur;
}

// Affichage du tableau HTML
echo '<table class="table table-bordered">';
echo '<thead><tr><th>Surname</th><th>Firstname</th><th>Email</th><th>Phone</th><th>City</th><th>State</th></tr></thead>';
echo '<tbody>';
foreach ($utilisateurs as $utilisateur) {
    echo '<tr>';
    echo '<td>' . $utilisateur[0] . '</td>';
    echo '<td>' . $utilisateur[1] . '</td>';
    echo '<td>' . $utilisateur[2] . '</td>';
    echo '<td>' . $utilisateur[3] . '</td>';
    echo '<td>' . $utilisateur[4] . '</td>';
    echo '<td>' . $utilisateur[5] . '</td>';
    echo '</tr>';
}
echo '</tbody>';
echo '</table>';
?>

</body>
</html>