<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="36; URL=/index.php">
    <title>Formulaire envoyé</title>
    <link rel="stylesheet" href="dist/assets/index.css">
</head>
<body>
<header><!--Début du header pour la partie Layout(entete) -->
        <?php include 'header.php';?>
    </header><!--Fin du header pour la partie Layout(entete) -->
<video id="myVideo" class="d-block video" width="1200" height="600" autoplay muted controls loop>
          <source src="/video/lorenzo.mp4" type="video/mp4">-->
 <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $email = $_POST["email"];
    $telephone = $_POST["telephone"];
    $demande = $_POST["question"];

    // Générer le nom du fichier
    $date = date("Y-m-d-H-i-s");
    $directory = "client/";
    $filename = $directory . $date . ".txt";

    //  données à enregistrer dans le fichier
    $data = "Nom: " . $nom . "\n";
    $data .= "Prénom: " . $prenom . "\n";
    $data .= "Email: " . $email . "\n";
    $data .= "Téléphone: " . $telephone . "\n";
    $data .= "Demande: " . $demande . "\n";

    // Enregistrement  dans un fichier
    $file = fopen($filename, "w");
    fwrite($file, $data);
    fclose($file);

    // Affiche un message de succès
    echo "<br><br><br><center><h1>Le formulaire a été soumis avec succès.</h1><br></center>";
    echo "<center>Vous allez être redirectionné à la page d'acceuil ou sinon <br><center>";
    echo '<center>Cliquer <a href="/index.php"> ici</a> pour retourner à la page d acceuil</h1></center><br>';
    echo '<img src="images_the_disctrict/food/Plats/redirection.jpg">';
    //header('Location: index.php');
}
?>   
<footer class="footer fixed-bottom"><!-- Début du pied de page avec les réseaux sociaux -->
  <?php include 'footer.php';?>
</footer>
<script type="module" src="dist/assets/index.js"></script>
</body>
</html>
