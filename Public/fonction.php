<?php
session_start();

// Vérifier si l'utilisateur est connecté
function isUserLoggedIn() {
    return isset($_SESSION['username']);
}

// Inscription d'un nouvel utilisateur
function registerUser($username, $password) {
    $user = $username . ':' . $password . PHP_EOL;
    file_put_contents('users.txt', $user, FILE_APPEND);
}

// Connexion de l'utilisateur
function loginUser($username, $password) {
    $users = file('users.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($users as $user) {
        list($storedUsername, $storedPassword) = explode(':', $user);
        if ($username === $storedUsername && $password === $storedPassword) {
            $_SESSION['username'] = $username;
            return true;
        }
    }
    return false;
}

// Déconnexion de l'utilisateur
function logoutUser() {
    unset($_SESSION['username']);
}

// Actions
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['action'])) {
        if ($_POST['action'] === 'register') {
            $username = $_POST['username'];
            $password = $_POST['password'];
            registerUser($username, $password);
            header('Location: index.php'); // Rediriger après l'inscription
            exit();
        } elseif ($_POST['action'] === 'login') {
            $username = $_POST['username'];
            $password = $_POST['password'];
            if (loginUser($username, $password)) {
                header('Location: dashboard.php'); // Rediriger après la connexion
                exit();
            } else {
                $loginError = "Nom d'utilisateur ou mot de passe incorrect.";
            }
        } elseif ($_POST['action'] === 'logout') {
            logoutUser();
            header('Location: index.php'); // Rediriger après la déconnexion
            exit();
        }
    }
}
?>
