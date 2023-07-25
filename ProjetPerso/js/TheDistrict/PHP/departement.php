<!DOCTYPE html>
<html>
<head>
    <title>Liste des régions et départements</title>
</head>
<body>
    <?php
    // Tableau associatif des régions et départements
    $departements = array(
        "Hauts-de-France" => array("Aisne", "Nord", "Oise", "Pas-de-Calais", "Somme"),
        "Bretagne" => array("Côtes d'Armor", "Finistère", "Ille-et-Vilaine", "Morbihan"),
        "Grand-Est" => array("Ardennes", "Aube", "Marne", "Haute-Marne", "Meurthe-et-Moselle", "Meuse", "Moselle", "Bas-Rhin", "Haut-Rhin", "Vosges"),
        "Normandie" => array("Calvados", "Eure", "Manche", "Orne", "Seine-Maritime")
    );

    // Trie le tableau par ordre alphabétique des clés (noms des régions)
    ksort($departements);
    ?>

    <h1>Liste des régions et départements</h1>
    <ul>
        <?php
        // Affichage de la liste des régions et départements
        foreach ($departements as $region => $deps) {
            echo "<li>$region<ul>";
            foreach ($deps as $dept) {
                echo "<li>$dept</li>";
            }
            echo "</ul></li>";
        }
        ?>
    </ul>

    <b><hr></b>
    <?php
    // Tableau associatif des régions et départements
    $departements = array(
        "Hauts-de-France" => array("Aisne", "Nord", "Oise", "Pas-de-Calais", "Somme"),
        "Bretagne" => array("Côtes d'Armor", "Finistère", "Ille-et-Vilaine", "Morbihan"),
        "Grand-Est" => array("Ardennes", "Aube", "Marne", "Haute-Marne", "Meurthe-et-Moselle", "Meuse", "Moselle", "Bas-Rhin", "Haut-Rhin", "Vosges"),
        "Normandie" => array("Calvados", "Eure", "Manche", "Orne", "Seine-Maritime")
    );

    // Trie le tableau par ordre alphabétique des clés (noms des régions)
    ksort($departements);
    ?>

    <h1>Liste des régions et nombre de départements</h1>
    <ul>
        <?php
        // Affichage de la liste des régions et nombre de départements
        foreach ($departements as $region => $deps) {
            $nombreDep = count($deps);
            echo "<li>$region - $nombreDep départements<ul>";
            foreach ($deps as $dept) {
                echo "<li>$dept</li>";
            }
            echo "</ul></li>";
        }
        ?>
    </ul>
</body>
</html>
