<!doctype html>
<html lang="fr-fr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>The District: <?= $title ?></title>
    <link rel="stylesheet" href="dist/assets/index.css">
    <link rel="shortcut icon" href="images_the_disctrict/the_district_brand/favicon.png" />
</head>

<body>
<header><!--Début du header pour la partie Layout(entete) -->
      <nav class="color navbar navbar-expand-lg bg-danger rounded custom-rounded "><!--Début de la NavBar Bootstrap-->
        <div class="container-fluid">
          <a class="navbar-brand" href="/index.php"><img class="logo" src="/images_the_disctrict/the_district_brand/logo.png"
              alt="logo" title="logo"></a>
          <ul class="col-3 nav-link couleurtitre fs-1"><u><b><a href="/index.php" style="color:white;"> The District</a></b></u></ul>
          <button class="navbar-toggler col-btn" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon text-primary"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link custom-heading active fs-1" aria-current="page"
                  href="/">Accueil</a>
              </li>
              <li class="nav-item">
                <a class="nav-link custom-heading active fs-1" href="/Categorie.php">Catégorie</a>
              </li>
              <li class="nav-item">
                <a class="nav-link custom-heading active fs-1" href="/Contact.php">Contact</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle custom-heading active fs-1" href="#" role="button"
                    data-bs-toggle="dropdown" aria-expanded="false">Plats</a>
                <ul class="dropdown-menu custom-heading" aria-labelledby="menudropdown">
                    <li><a class="dropdown-item custom-heading active fs-2" href="/Plats.php">Choix</a></li>
                    <li><a class="dropdown-item custom-heading active fs-2" href="/Plats.php#Asiatique">Asiatiques</a></li>
                    <li><a class="dropdown-item custom-heading active fs-2" href="/Plats.php#Burger">Burgers</a></li>
                    <li><a class="dropdown-item custom-heading active fs-2" href="/Plats.php#Pâtes">Pâtes</a></li>
                    <li><a class="dropdown-item custom-heading active fs-2" href="/Plats.php#Pizzas">Pizzas</a></li>
                    <li><a class="dropdown-item custom-heading active fs-2" href="/Plats.php#Salades">Salades</a></li>
                    <li><a class="dropdown-item custom-heading active fs-2" href="/Plats.php#Sandwich">Sandwichs</a></li>
                    <li><a class="dropdown-item custom-heading active fs-2" href="/Plats.php#Veggies">Veggies</a></li>
                    <li><a class="dropdown-item custom-heading active fs-2" href="/Plats.php#Wraps">Wraps</a></li>
                    <li><a class="dropdown-item custom-heading active fs-2" href="/Plats.php#Kebab">Kebabs</a></li>
                    <li><a class="dropdown-item custom-heading active fs-2" href="/Plats.php#Libanais">Libanais</a></li>
                    <li><a class="dropdown-item custom-heading active fs-2" href="/Plats.php#Panini">Paininis</a></li>
                    <li><a class="dropdown-item custom-heading active fs-2" href="/Plats.php#Tacos">Tacos</a></li>
                </ul>
            </li>
        </ul>
            <ul class="ml-auto">
              <form class="d-flex justify-content-right align-items-center " role="search">
                <input class="form-control me-2" type="search" placeholder="Rechercher" aria-label="Search">
                <button class="btn btn-outline-success color-search" type="submit">Rechercher</button>
              </form>
            </ul>

          </div>
        </div>
      </nav><!--Fin de la NavBar-->
 <script type="module" src="main.js"></script>   
