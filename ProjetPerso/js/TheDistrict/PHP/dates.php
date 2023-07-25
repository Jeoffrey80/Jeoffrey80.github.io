<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Dates</title>
</head>
<body>
    <h1>Exercice dates</h1>
    <hr>
    <?php
$date = "14/07/2019";
$numeroSemaine = date("W", strtotime(str_replace('/', '-', $date)));
echo"La semaine de la date du 14/07/2019 est: ";
echo $numeroSemaine;
?>
<b><hr></b>

<?php
$dateFinFormation = "28/07/2023";
$aujourdHui = date("d/m/Y");

$timestampFinFormation = strtotime(str_replace('/', '-', $dateFinFormation));
$timestampAujourdhui = strtotime(str_replace('/', '-', $aujourdHui));

$diffEnSecondes = $timestampFinFormation - $timestampAujourdhui;
$diffEnJours = floor($diffEnSecondes / (60 * 60 * 24));

echo "Il reste " . $diffEnJours . " jours avant la fin de votre formation.";
$heureActuelle = date("H");
$minutesActuelles = date("i");
$secondesActuelles = date("s");
echo "<br><br>";
echo "Il est actuellement ".$heureActuelle."h".$minutesActuelles."m".$secondesActuelles."s";

?>
<b><hr></b>

<?php
$annee = 2023; // Remplacez par l'année que vous souhaitez vérifier

$bissextile = date("L", strtotime("$annee-02-29"));

if ($bissextile == 1) {
    echo "L'année $annee est bissextile.";
} else {
    echo "L'année $annee n'est pas bissextile.";
}
?>

<b><hr></b>
<?php
$date = "31/12/2019";

$jour = intval(substr($date, 0, 2));
$mois = intval(substr($date, 3, 2));
$annee = intval(substr($date, 6, 4));

if (checkdate($mois, $jour, $annee)) {
    echo "La date est valide.";
} else {
    echo "La date ". $date ." est erronée.";
}

?>

<b><hr></b>
<?php
$heureCourante = date("H");
$minutesCourantes = date("i");

$heureAffichee = $heureCourante . "h" . $minutesCourantes;

echo "L'heure actuel est : ".$heureAffichee;
?>

<b><hr></b>
<?php
$dateCourante = new DateTime();
$dateCourante->add(new DateInterval('P1M'));

$nouvelleDate = $dateCourante->format('d/m/Y');

echo "La nouvelle date est : " . $nouvelleDate;

?>

<b><hr></b>

<?php
$timestamp = 1000200000;
$date = date("d/m/Y H:i:s", $timestamp);

echo "La date correspondante est : " . $date;
echo"<br>";
echo"Cette date correspond à l'attentat des 2 tours jumelles en Amérique où deux avions de ligne détournés par des pirates de l'air 
détruisent les tours jumelles du World Trade Center situées dans le quartier de Manhattan à New York, un troisième avion 
s'écrase contre le Pentagone près de Washington et un quatrième s'écrase à Shanksville, à une centaine de kilomètres de Pittsburgh (Pennsylvanie). ";
?>
</body>
</html>