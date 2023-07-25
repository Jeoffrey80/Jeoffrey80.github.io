<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table de multiplication</title>
    <style>
        table {
            border-collapse: collapse;
        }
        td, th {
            border: 1px solid black;
            padding: 5px;
        }
    </style>
</head>
<body>
    <?php
    echo "<b>Premier exercice sur les boucles: On doit afficher les nombre impaires jusqu'à arriver à 150</b>";
    // Boucle pour afficher les nombres impairs
for ($i = 1; $i <= 150; $i += 2) {
    echo  $i . " ";
}
echo"<br>";

// Boucle pour répéter la phrase 500 fois
for ($i = 1; $i <= 500; $i++) {
    echo "Je dois faire des sauvegardes régulières de mes fichiers." . $i . "<br>" ;
}

    ?>

<table>
        <tr>
            <th>&nbsp;</th>
            <?php
            // En-têtes de colonnes (1 à 9)
            for ($i = 1; $i <= 9; $i++) {
                echo "<th>$i</th>";
            }
            ?>
        </tr>
        <?php
        // Corps du tableau
        for ($i = 1; $i <= 9; $i++) {
            echo "<tr>";
            echo "<th>$i</th>";
            for ($j = 1; $j <= 9; $j++) {
                echo "<td>" . ($i * $j) . "</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>