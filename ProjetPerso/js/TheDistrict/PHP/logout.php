<?php
session_start();

// Destruction de la session
session_destroy();

// Redirection vers la page de connexion
header('Location: login_form.php');
exit();
?>
