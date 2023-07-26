<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Jeoffrey Lavallée</title>
</head>
<body>
<div class="navbar">
    <div class="menu-bar">
        <i class="fa fa-bars"> </i>
    </div>
    <div class="logo">
        <a href="#" class="logo"><img src="/img/logo.jpg" alt="" class="photoprof"><span>Jeoffrey</span></a>
    </div>
    
    <nav>
        <ul>
            <li><a href="#" class="active">Acceuil</a></li>
            <li><a href="ggfdhgfh#" class="active">A Propos</a></li>
            <li><a href="#" class="active">Services</a></li>
            <li><a href="#" class="active">Portfolio</a></li>
            <li><a href="#" class="active">Contact</a></li>
            <li><a href="Public/index.php" class="active">Site Perso</a></li>
        </ul>
    </nav>
    <button class="btn">Resume<i class="fa fa-arrow-down"></i></button>
</div>
<header> 
<div class="content">
    <div class="container">
        <div class="heading">
            <h1>Bonjour !</h1>
            <h2>Je m'appelle Jeoffrey.</h2>
            <h4>Dev web/Application Réseau.</h4>
            <p>J'adore le PHP ainsi que le font avec PhpMyAdmin :]</p>
        <button class="btn">Engagez moi !<span><i class="fa fa-arrow-right"></i></span></button>
        </div>
        <div class="headerimg">
            <img src="/img/headerimg.jpg" alt="" class="img1">
            <img src="/img/pokeball.png" alt="" class="img2">
            <img src="/img/superball.png" alt="" class="img3">
            <img src="/img/masterball.png" alt="" class="img4">
            <img src="/img/hyperball.png" alt="" class="img5">
        </div>
   </div>
</div>
</header>
<script>
    let menu = document.querySelector(".fa-bars");
    let nav = document.querySelector("nav");
    menu.addEventListener("click", function(){
        menu.classList.toggle("fa-xmark");
        nav.classList.toggle("active");
    })
    window.addEventListener("scroll", function(){
        var navbar = document.querySelector(".navbar");
        navbar.classList.toggle("sticky", window.scrollY > 0);
    })
</script>
</body>
</html>
