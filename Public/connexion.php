<?php
session_start();// Inscription d'un nouvel utilisateur

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
?>