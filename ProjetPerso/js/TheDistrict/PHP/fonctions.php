<?php
function genererLien($lien, $titre) {
    return '<a href="' . $lien . '">' . $titre . '</a>';
}
// Exemple d'utilisation
$resultat = genererLien("https://www.reddit.com/", "Reddit Hug");
?>

<?php
function somme($tableau) {
    $somme = 0;
    foreach ($tableau as $valeur) {
        $somme += $valeur;
    }
    return $somme;
}
?>

<?php
function complex_password($motDePasse) {
    // Vérifier la longueur
    if (strlen($motDePasse) < 8) {
        return false;
    }

    // Vérifier la présence d'au moins 1 chiffre
    if (!preg_match('/[0-9]/', $motDePasse)) {
        return false;
    }

    // Vérifier la présence d'au moins 1 majuscule et 1 minuscule
    if (!preg_match('/[A-Z]/', $motDePasse) || !preg_match('/[a-z]/', $motDePasse)) {
        return false;
    }

    // Toutes les règles sont respectées
    return true;
}

?>