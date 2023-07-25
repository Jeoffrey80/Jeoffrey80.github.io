<!DOCTYPE html>
<html>
<head>
    <title>Formulaire d'authentification</title>
</head>
<body>
    <h1>Formulaire d'authentification</h1>
    <form action="login_script.php" method="post">
        <label for="login">Login (Email) :</label>
        <input type="text" id="login" name="login" required><br>

        <label for="mot_de_passe">Mot de passe :</label>
        <input type="password" id="mot_de_passe" name="mot_de_passe" required><br>

        <input type="submit" value="Se connecter">
    </form>
</body>
</html>

