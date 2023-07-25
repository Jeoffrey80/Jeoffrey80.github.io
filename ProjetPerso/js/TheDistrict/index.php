<?php 
$title = "Accueil";
?>
  <div class="parallax-bg">
      <header><!--Début du header pour la partie Layout(entete) -->
        <?php include 'header.php';?>
    </header><!--Fin du header pour la partie Layout(entete) -->
    <main class="mt-auto">
      <br><br>
      <div class=" video-container d-flex justify-content-center couleur-navigation">
        <video id="myVideo" class="d-block video" width="900" height="450" autoplay muted controls loop>
          <source src="/video/pizza_-_176 (360p).mp4" type="video/mp4">
          Votre navigateur ne prend pas en charge la lecture de vidéos HTML5.
        </video>

      </div>
      <br><br>
      <div class="d-flex justify-content-center couleur-navigation"><!--Début de la partie Carousel-->
        &nbsp;
        <div class="row">
          <div class="col-12">
            <div id="carouselaccueil" class="carousel slide" data-bs-ride="carousel" data-interval="2000">
              <div class="carousel-inner">
                <div class="carouselmedia carousel-item active">
                  <img src="/images_the_disctrict/bg.jpg" class="d-block" alt="..." style="width:900px;height:450px;">
                </div>
                <div class="carouselmedia carousel-item">
                  <img src="/images_the_disctrict/bg1.jpeg" class="d-block" alt="..." style="width:900px;height:450px;">
                </div>
                <div class="carouselmedia carousel-item">
                  <img src="/images_the_disctrict/bg2.jpeg" class="d-block" alt="..." style="width:900px;height:450px;">
                </div>
                <div class="carouselmedia carousel-item">
                  <img src="/images_the_disctrict/bg3.jpeg" class="d-block" alt="..." style="width:900px;height:450px;">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div><!--Fin de la partie Carousel-->
      <br>
      <button class="navbar-toggler col-btn" type="button" data-bs-toggle="collapse"
        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon text-primary"></span>
      </button>
      <div class="taillelogoaccueil d-flex justify-content-center align-items-center couleur-navigation carousel-item">
        <!--Corps de la page avec le slogan ainsi que quelques images-->
        <ul class="nav-link couleurslogan "><u class="fs-1 taillelogoaccueil"><b>Large choix sur vos produits ! </b></u>
          <p class="fs-4 taillelogoaccueil">Bienvenue dans l'ère culinaire de The District :</p>
          <p>une fusion exquise de saveurs rapides et de satisfaction gourmande,
            où chaque bouchée vous transporte vers un monde de délices.</p>
        </ul>
        <a class="taillelogoaccueil mx-5"><img src="/images_the_disctrict/burger.jpg" class="d-block"
            alt="..." style="width:250px;height:250px;"></a>&nbsp;
        <a class=" taillelogoaccueil mx-5"><img src="/images_the_disctrict/pizza.jpg" class="d-block"
            alt="..." style="width:250px;height:250px;"></a>&nbsp;
      </div><!--Corps de la page avec le slogan ainsi que quelques images-->
  </div>
  
  <footer class="footer fixed-bottom"><!-- Début du pied de page avec les réseaux sociaux -->
  <?php include 'footer.php';?>
</footer>

  <script type="module" src="dist/assets/index.js"></script>
</main>
</body>
</html>