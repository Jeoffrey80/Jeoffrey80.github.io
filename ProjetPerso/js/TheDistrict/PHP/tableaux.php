<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau des mois</title>
    <style>
        table {
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 5px;
        }
    </style>
</head>
<body>
<table>
        <tr>
            <th>Mois</th>
            <th>Nombre de jours</th>
        </tr>
<?php
// Tableau associatif des mois de l'année avec le nombre de jours
$mois = array(
    "Janvier" => 31,
    "Février" => 28, // Note: 29 pour les années bissextiles
    "Mars" => 31,
    "Avril" => 30,
    "Mai" => 31,
    "Juin" => 30,
    "Juillet" => 31,
    "Août" => 31,
    "Septembre" => 30,
    "Octobre" => 31,
    "Novembre" => 30,
    "Décembre" => 31
);
asort($mois);

// Affichage du tableau
foreach ($mois as $moisNom => $nbJours) {
    echo "<tr>";
    echo "<td>$moisNom</td>";
    echo "<td>$nbJours</td>";
    echo "</tr>";
}
echo"";
?>

  </table>
</body>
</html>