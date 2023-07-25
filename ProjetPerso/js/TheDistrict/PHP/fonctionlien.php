<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fonctions Liens</title>
    <?php include 'fonctions.php';?>
</head>
<body>
    <h1><b>Exercice partie Fonctions</b></h1>
    <hr>
    <?php
    
    echo "Exercice sur les fonctions liens:".$resultat;
  ?>
<b><hr></b>
  <?php
$tab = array(4, 3, 8, 2);
$resultat = somme($tab);
echo"calcule d'un tableau: " ;
echo $resultat;
  ?>
<b><hr></b>
<?php
$resultat = complex_password("TopSecret42");
echo"Créer une fonction qui vérifie le niveau de complexité d'un mot de passe: ";
var_dump($resultat);
?>
</body>
</html>