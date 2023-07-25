<!DOCTYPE html>
<html>
<head>
    <title>Formulaire avec JavaScript</title>
    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST["nom"];
    $email = $_POST["email"];
    $message = $_POST["message"];
}
?>

</head>
<body>
    <h1>Formulaire avec JavaScript</h1>
    <form action="formulaire.php" method="post">
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom" required><br>

        <label for="email">Email :</label>
        <input type="email" id="email" name="email" required><br>

        <label for="message">Message :</label>
        <textarea id="message" name="message" required></textarea><br>

        <input type="submit" value="Envoyer" onclick="afficherValeurs(); return true;">
    <h1>Valeurs transmises depuis le formulaire</h1>
    <p>
        Nom : <?php echo $_REQUEST["nom"]; ?>
    </p>
    <p>
        Email : <?php echo $_REQUEST["email"]; ?>
    </p>
    <p>
        Message : <?php echo $_REQUEST["message"]; ?>
    </p>

    </form>
</body>
</html>
