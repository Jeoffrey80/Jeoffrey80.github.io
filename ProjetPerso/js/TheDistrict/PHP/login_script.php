<?php
session_start();

// Vérification des identifiants
$loginAttendu = 'admin';
$motDePasseAttendu = 'admin';

if ($_POST['login'] == $loginAttendu && $_POST['mot_de_passe'] == $motDePasseAttendu) {
    // Authentification réussie
    $_SESSION['auth'] = 'ok';
    header('Location: protected_page.php'); // Redirection vers la page protégée
} else {
    // Authentification échouée
    unset($_SESSION['auth']);
    header('Location: login_form.php'); // Redirection vers la page de connexion
}
?>
