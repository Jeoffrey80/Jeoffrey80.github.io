<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php
    echo "<b>Bonjour tout la team ! Premier exercice à l'AFPA sur le PhP, j'affiche l'ip du serveur et du client (c'est les même)</b> <br>";
    //Nom et version du navigateur utilisé par le client
    $vers=($_SERVER['HTTP_USER_AGENT']);
    //Adresse physique du répertoire contenant cette page
    $repert=($_SERVER['DOCUMENT_ROOT']);

   // Adresse IP du serveur
   $serverIP = gethostbyname($_SERVER['SERVER_NAME']);
   
   // Adresse IP du client
   $clientIP = $_SERVER['REMOTE_ADDR'];
   
   // Affichage des adresses IP
   echo "<b>Adresse IP du serveur : </b>" . $serverIP . "<br>";
   echo "<b>Adresse IP du client : </b>" . $clientIP . "<br>";
   echo "<b>Adresse physique du répertoire contenant le répertoire par défaut: </b>". $repert . "<br>";
   echo "<b>Nom et version du navigateur utilisé par le visiteur (client): </b>". $vers . "</br>";
   ?>
   
</body>
</html>