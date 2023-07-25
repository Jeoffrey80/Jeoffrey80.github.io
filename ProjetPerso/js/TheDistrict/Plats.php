<?php $title = "Plats";include 'header.php';?>
    <br>
    <div class="fixed-top" style="">

    <nav class="text-center">
        <ul class="list-unstyled">
            <button class="btn colorbtnplat" onclick="scrollToSection('#Asiatique')">Asiatiques</button>
            <button class="btn colorbtnplat" onclick="scrollToSection('#Burger')">Burgers</button>
            <button class="btn colorbtnplat" onclick="scrollToSection('#Pâtes')">Pâtes</button>
            <button class="btn colorbtnplat" onclick="scrollToSection('#Pizzas')">Pizzas</button>
            <button class="btn colorbtnplat" onclick="scrollToSection('#Salades')">Salades</button>
            <button class="btn colorbtnplat" onclick="scrollToSection('#Sandwich')">Sandwich</button>
            <button class="btn colorbtnplat" onclick="scrollToSection('#Veggies')">Veggies</button>
            <button class="btn colorbtnplat" onclick="scrollToSection('#Wraps')">Wraps</button>
            <button class="btn colorbtnplat" onclick="scrollToSection('#Kebab')">Kebab</button>
            <button class="btn colorbtnplat" onclick="scrollToSection('#Libanais')">Libanais</button>
            <button class="btn colorbtnplat" onclick="scrollToSection('#Panini')">Panini</button>
            <button class="btn colorbtnplat" onclick="scrollToSection('#Tacos')">Tacos</button>
        </ul>
    </nav>
    <script>function scrollToSection(sectionId) {
            var section = document.querySelector(sectionId);
            if (section) {
                section.scrollIntoView({ behavior: 'smooth' });
            }
        }
    </script>
<br>
    </div>
</header><!--Fin du header pour la partie Layout(entete) -->
<hr>
<body class="bplats" class="imgcommande">
<style>
  .imgcommande img{
    width:250px;
    height: 150px;
  }
</style>
    <section id="Asiatique">
        <h2>Plats Asiatiques</h2>
        <ul class="ulplats">
            <li class="liplats" >
                <img src="/images_the_disctrict/food/Plats/asiat1.jpg" class="imgcommande" alt="Image 1" 
                '>
                <div>
                    <h3>Sushi</h3>
                    <p>Sushi au saumon 2 pièces</p>
                    <p>Prix : 4.99€</p>
                    <button onclick="ajouterAuPanier(1)">Ajouter</button>
                </div>
            </li>
            <li class="liplats">
                <img src="/images_the_disctrict/food/Plats/asiat2.jpeg" class="imgcommande" alt="Image 2" style='width 150px; height: 150px;'>
                <div>
                    <h3>Maki</h3>
                    <p>Maki 6 pièces</p>
                    <p>Prix : 29.99€</p>
                    <button onclick="ajouterAuPanier(2)">Ajouter</button>
                </div>
            </li>
            <li class="liplats">
                <img src="/images_the_disctrict/food/Plats/asiat3.jpeg" class="imgcommande" alt="Image 3" style='width 150px; height: 150px;'>
                <div>
                    <h3>Yakitori</h3>
                    <p>Brochette de boeufs avec fromage fondue à l'intérieur 3 pièces</p>
                    <p>Prix : 14.99€</p>
                    <button onclick="ajouterAuPanier(3)">Ajouter</button>
                </div>
            </li>
        </ul>
    </section>
    <hr>
    <section id="Burger">
        <h2>Burger</h2>
        <ul class="ulplats">
            <li class="liplats">
                <img src="/images_the_disctrict/food/Plats/burger1.jpeg" class="imgcommande" alt="Image 1" style='width 150px; height: 150px;'>
                <div>
                    <h3>Burger Fromage</h3>
                    <p>Burger supplément fromage</p>
                    <p>Prix : 9.90€</p>
                    <button onclick="ajouterAuPanier(4)">Ajouter</button>
                </div>
            </li>
            <li class="liplats">
                <img src="/images_the_disctrict/food/Plats/burger2.jpg" class="imgcommande" alt="Image 2" style='width 150px; height: 150px;'>
                <div>
                    <h3>Burger Poisson</h3>
                    <p>Burger avec galette de poisson</p>
                    <p>Prix : 12.50€</p>
                    <button onclick="ajouterAuPanier(5)">Ajouter</button>
                </div>
            </li>
            <li class="liplats">
                <img src="/images_the_disctrict/food/Plats/burger3.jpeg" class="imgcommande" alt="Image 3" style='width 150px; height: 150px;'>
                <div>
                    <h3>Anguss Noire</h3>
                    <p>Burger viande anguss avec pain noire</p>
                    <p>Prix : 14.99€</p>
                    <button onclick="ajouterAuPanier(6)">Ajouter</button>
                </div>
            </li>
        </ul>
    </section>
    <hr>
    <section id="Pâtes">
        <h2>Pâtes</h2>
        <ul class="ulplats">
            <li class="liplats">
                <img src="/images_the_disctrict/food/Plats/pates1.jpeg" class="imgcommande" alt="Image 1" style='width 150px; height: 150px;'>
                <div>
                    <h3>Pâtes Carbonara</h3>
                    <p>Lardon fumé, crème fraîche, pâtes(tagliatelle), jaunes d'oeuf, oignon</p>
                    <p>Prix : 12.90€</p>
                    <button onclick="ajouterAuPanier(7)">Ajouter</button>
                </div>
            </li>
            <li class="liplats">
                <img src="/images_the_disctrict/food/Plats/pates2.jpeg" class="imgcommande" alt="Image 2" style='width 150px; height: 150px;'>
                <div>
                    <h3>Pâtes Bolognaise</h3>
                    <p>Spaghettis, Viande de boeuf hachée, tomate pelée, oignon, ail, thym, laurier, huile d'olive
                    </p>
                    <p>Prix : 14.99€</p>
                    <button onclick="ajouterAuPanier(8)">Ajouter</button>
                </div>
            </li>
            <li class="liplats">
                <img src="/images_the_disctrict/food/Plats/pates3.jpeg" class="imgcommande" alt="Image 3" style='width 150px; height: 150px;'>
                <div>
                    <h3>Pâtes au Saumon</h3>
                    <p>Pâtes type penne, zeste de citron, crème fraîche épaisse, saumon fumé haché, anette, parmesan rapé</p>
                    <p>Prix : 12.95€</p>
                    <button onclick="ajouterAuPanier(9)">Ajouter</button>
                </div>
            </li>
        </ul>
    </section>
    <hr>
    <section id="Pizzas">
        <h2>Pizzas</h2>
        <ul class="ulplats">
            <li class="liplats">
                <img src="/images_the_disctrict/food/Plats/pizza1.jpg" class="imgcommande" alt="Image 1">
                <div>
                    <h3>4 Fromages</h3>
                    <p>Pizza chèvre, bleu, conmté, mozzarella, base tomate</p>
                    <p>Prix : 16.50€</p>
                    <button onclick="ajouterAuPanier(10)">Ajouter</button>
                </div>
            </li>
            <li class="liplats">
                <img src="/images_the_disctrict/food/Plats/pizza2.jpg" class="imgcommande" alt="Image 2">
                <div>
                    <h3>Bolognaise</h3>
                    <p>base tomate, viande haché, gruyère rapé, oignon, huile d'olive, origan</p>
                    <p>Prix : 18.90€</p>
                    <button onclick="ajouterAuPanier(11)">Ajouter</button>
                </div>
            </li>
            <li class="liplats">
                <img src="/images_the_disctrict/food/Plats/pizza3.jpg" class="imgcommande" alt="Image 3">
                <div>
                    <h3>Magherita</h3>
                    <p>Parmesan reggianno, huile d'olive, mozzarella, feuille de basilic frais, base tomate</p>
                    <p>Prix : 14.50€</p>
                    <button onclick="ajouterAuPanier(12)">Ajouter</button>
                </div>
            </li>
        </ul>
    </section>
    <hr>
    <section id="Salades">
        <h2>Salades</h2>
        <ul class="ulplats">
            <li class="liplats">
                <img src="/images_the_disctrict/food/Plats/salade1.jpeg" class="imgcommande" alt="Image 1">
                <div>
                    <h3>Salade Niçoice </h3>
                    <p>Batavia, tomate, thon, anchois, poivrons vers, olive noire, oeufs..</p>
                    <p>Prix : 4.90€</p>
                    <button onclick="ajouterAuPanier(13)">Ajouter</button>
                </div>
            </li>
            <li class="liplats">
                <img src="/images_the_disctrict/food/Plats/salade2.jpg" class="imgcommande" alt="Image 2">
                <div>
                    <h3>Salade Mexicaine de quinoa à l'avocat</h3>
                    <p>Quinoa, avocats mûrs, maïs, haricots noirs, oignon rouge, botte de coriandre, citron vert, huile d'olive, sel, poivre</p>
                    <p>Prix : 6.99€</p>
                    <button onclick="ajouterAuPanier(14)">Ajouter</button>
                </div>
            </li>
            <li class="liplats">
                <img src="/images_the_disctrict/food/Plats/salade3.webp" class="imgcommande" alt="Image 3">
                <div>
                    <h3>Salade healthy</h3>
                    <p>Tomate/Mozzarella avec une touche d'huile d'olive</p>
                    <p>Prix : 3.50€</p>
                    <button onclick="ajouterAuPanier(15)">Ajouter</button>
                </div>
            </li>
        </ul>
    </section>
    <hr>
    <section id="Sandwich">
        <h2>Sandwich</h2>
        <ul class="ulplats">
            <li class="liplats">
                <img src="/images_the_disctrict/food/Plats/sandwich1.png" class="imgcommande" alt="Image 1">
                <div>
                    <h3>Thon Surimi</h3>
                    <p>Thon, Surimi, crudité (salade/tomate)</p>
                    <p>Prix : 3.50€</p>
                    <button onclick="ajouterAuPanier(16)">Ajouter</button>
                </div>
            </li>
            <li class="liplats">
                <img src="/images_the_disctrict/food/Plats/sandwich2.jpg" class="imgcommande" alt="Image 2">
                <div>
                    <h3>Rosette</h3>
                    <p>Beurre, rosette, cornichon</p>
                    <p>Prix : 3.50€</p>
                    <button onclick="ajouterAuPanier(17)">Ajouter</button>
                </div>
            </li>
            <li class="liplats">
                <img src="/images_the_disctrict/food/Plats/sandwich3.jpeg" class="imgcommande" alt="Image 3">
                <div>
                    <h3>Poulet Crudité</h3>
                    <p>Poulet crudité (salade/tomate)</p>
                    <p>Prix : 3.50€</p>
                    <button onclick="ajouterAuPanier(18)">Ajouter</button>
                </div>
            </li>
        </ul>
    </section>
    <hr>
    <section id="Veggies">
        <h2>Veggies</h2>
        <ul class="ulplats">
            <li class="liplats">
                <img src="/images_the_disctrict/food/Plats/veggie1.jpeg" class="imgcommande" alt="Image 1">
                <div>
                    <h3>Burger Vegan</h3>
                    <p>Burger avec galette de pomme de terre à la place de la viande, salade, tomate, oignon, cornichon, sauce secrète.(Accompagné de ses frites)</p>
                    <p>Prix : 8.50€</p>
                    <button onclick="ajouterAuPanier(19)">Ajouter</button>
                </div>
            </li>
            <li class="liplats">
                <img src="/images_the_disctrict/food/Plats/veggie2.jpg" class="imgcommande" alt="Image 2">
                <div>
                    <h3>Hot Dog Veggan</h3>
                    <p>Hot dog avec une saucisse de légume</p>
                    <p>Prix : 7.50€</p>
                    <button onclick="ajouterAuPanier(20)">Ajouter</button>
                </div>
            </li>
            <li class="liplats">
                <img src="/images_the_disctrict/food/Plats/veggie3.jpg" class="imgcommande" alt="Image 3">
                <div>
                    <h3> Poke bowl au saumon mariné </h3>
                    <p>Avocat, fève, citron vert, saumon cru, sésame doré, sauce soja, miel, riz.</p>
                    <p>Prix : 12.80€</p>
                    <button onclick="ajouterAuPanier(21)">Ajouter</button>
                </div>
            </li>
        </ul>
    </section>
    <hr>
    <section id="Wraps">
        <h2>Wraps</h2>
        <ul class="ulplats">
            <li class="liplats">
                <img src="/images_the_disctrict/food/Plats/wrap1.jpeg" class="imgcommande" alt="Image 1">
                <div>
                    <h3>Wraps aux pois chiches rôtis et à la feta</h3>
                    <p>pois chiche, oignon rouge, huile d'olice, crème de sucre, feta.</p>
                    <p>Prix : 4.20€</p>
                    <button onclick="ajouterAuPanier(22)">Ajouter</button>
                </div>
            </li>
            <li class="liplats">
                <img src="/images_the_disctrict/food/Plats/wrap2.jpeg" class="imgcommande" alt="Image 2">
                <div>
                    <h3>Wraps au crabe</h3>
                    <p>tortilla, chaire de crabe, feuille de laitue, crème fraiche, mayonnaise.</p>
                    <p>Prix : 5.50€</p>
                    <button onclick="ajouterAuPanier(23)">Ajouter</button>
                </div>
            </li>
            <li class="liplats">
                <img src="/images_the_disctrict/food/Plats/wrap3.jpeg" class="imgcommande" alt="Image 3">
                <div>
                    <h3>Wraps au poulet</h3>
                    <p>tortilla de blé, blanc de poulet, feuille de laitue, tomate, moutarde.</p>
                    <p>Prix : 4.80€</p>
                    <button onclick="ajouterAuPanier(24)">Ajouter</button>
                </div>
            </li>
        </ul>
    </section>
    <hr>
    <section id="Kebab">
        <h2>Kebab</h2>
        <ul class="ulplats">
            <li class="liplats">
                <img src="/images_the_disctrict/food/Plats/kebab1.png" class="imgcommande" alt="Image 1">
                <div>
                    <h3>Kebab assiette 3 viandes</h3>
                    <p>Assiette kebab 3 viandes avec frites/crudités.</p>
                    <p>Prix : 7.50€</p>
                    <button onclick="ajouterAuPanier(25)">Ajouter</button>
                </div>
            </li>
            <li class="liplats">
                <img src="/images_the_disctrict/food/Plats/kebab2.jpeg" class="imgcommande" alt="Image 2">
                <div>
                    <h3>Kebab classique</h3>
                    <p>Kebab classique, crudité, sauce avec ses frites.</p>
                    <p>Prix : 6.50€</p>
                    <button onclick="ajouterAuPanier(26)">Ajouter</button>
                </div>
            </li>
            <li class="liplats">
                <img src="/images_the_disctrict/food/Plats/kebab3.jpeg" class="imgcommande" alt="Image 3">
                <div>
                    <h3>Kebab Royal</h3>
                    <p>Kebab classique, plus grand avec galette de pomme de terre et supplément viande/fromages.</p>
                    <p>Prix : 8.00€</p>
                    <button onclick="ajouterAuPanier(27)">Ajouter</button>
                </div>
            </li>
        </ul>
    </section>
    <hr>
    <section id="Libanais">
        <h2>Libanais</h2>
        <ul class="ulplats">
            <li class="liplats">
                <img src="/images_the_disctrict/food/Plats/libanais1.jpg" class="imgcommande" alt="Image 1">
                <div>
                    <h3>Libanais classique</h3>
                    <p>Libanais classique crudité</p>
                    <p>Prix : 3.90€</p>
                    <button onclick="ajouterAuPanier(28)">Ajouter</button>
                </div>
            </li>
            <li class="liplats">
                <img src="/images_the_disctrict/food/Plats/libanais2.jpeg" class="imgcommande" alt="Image 2">
                <div>
                    <h3>Libanais royal</h3>
                    <p>Libanais avec supplément fromage/lamelle de kebab + galette de pomme de terre</p>
                    <p>Prix : 5.50€</p>
                    <button onclick="ajouterAuPanier(29)">Ajouter</button>
                </div>
            </li>
            <li class="liplats">
                <img src="/images_the_disctrict/food/Plats/libanais3.jpeg" class="imgcommande" alt="Image 3">
                <div>
                    <h3>Libanais vegan</h3>
                    <p>Libanais sans viande avec galette de légume et de pomme de terre, suplément fromage et crudité</p>
                    <p>Prix : 4.50€</p>
                    <button onclick="ajouterAuPanier(30)">Ajouter</button>
                </div>
            </li>
        </ul>
    </section>
    <hr>
    <section id="Panini">
        <h2>Panini</h2>
        <ul class="ulplats">
            <li class="liplats">
                <img src="/images_the_disctrict/food/Plats/panini1.jpeg" class="imgcommande" alt="Image 1">
                <div>
                    <h3>Panini Nutella</h3>
                    <p>Panini au Nutella.</p>
                    <p>Prix : 3.20€</p>
                    <button onclick="ajouterAuPanier(31)">Ajouter</button>
                </div>
            </li>
            <li class="liplats">
                <img src="/images_the_disctrict/food/Plats/panini2.jpeg" class="imgcommande" alt="Image 2">
                <div>
                    <h3>Panini 3 fromages</h3>
                    <p>Panini chèvre, bleu, ementale.</p>
                    <p>Prix : 4.50€</p>
                    <button onclick="ajouterAuPanier(32)">Ajouter</button>
                </div>
            </li>
            <li class="liplats">
                <img src="/images_the_disctrict/food/Plats/panini3.jpeg" class="imgcommande" alt="Image 3">
                <div>
                    <h3>Panini viande hachée</h3>
                    <p>Panini avec viande hachée fromage, crudité.</p>
                    <p>Prix : 7.00€</p>
                    <button onclick="ajouterAuPanier(33)">Ajouter</button>
                </div>
            </li>
        </ul>
    </section>
    <hr>
    <section id="Tacos">
        <h2>Tacos</h2>
        <ul class="ulplats">
            <li class="liplats">
                <img src="/images_the_disctrict/food/Plats/tacos1.jpeg" class="imgcommande" alt="Image 1">
                <div>
                    <h3>Tacos au poulet curry</h3>
                    <p>Tortilla, Escalope de Poulet, Crème liquide, Fromage rapé, oignon, frites.</p>
                    <p>Prix : 6.50€</p>
                    <button onclick="ajouterAuPanier(34)">Ajouter</button>
                </div>
            </li>
            <li class="liplats">
                <img src="/images_the_disctrict/food/Plats/tacos2.jpeg" class="imgcommande" alt="Image 2">
                <div>
                    <h3>Recette de tacos au bœuf haché </h3>
                    <p>Tacos avec boeuf haché frite supplément fromage, crudité.</p>
                    <p>Prix : 6.50€</p>
                    <button onclick="ajouterAuPanier(35)">Ajouter</button>
                </div>
            </li>
            <li class="liplats">
                <img src="/images_the_disctrict/food/Plats/tacos3.jpeg" class="imgcommande" alt="Image 3">
                <div>
                    <h3>Menu Tacos 3 Viandes</h3>
                    <p>Tacos 3 viandes: poulet/boeuf/mouton, frites, crudité.</p>
                    <p>Prix : 8.50€</p>
                    <button onclick="ajouterAuPanier(36)">Ajouter</button>
                </div>
            </li>
        </ul>
    </section>
    <hr>
    <nav class="fixed-bottom">
  <div class=" font-panier text-center">
    <button class="btn btn-primary" onclick="afficherPanier()">Voir le Panier</button>
  </div>
</nav>

    <script>
      function ajouterAuPanier(idProduit) {
        var produit = {
          image: "",
          nom: "",
          description: "",
          prix: 0
        };
  
        if (idProduit === 1) {
          produit.image ="/images_the_disctrict/food/Plats/asiat1.jpg";
          produit.nom = "Sushi";
          produit.description = "Sushi au saumon 2 pièces";
          produit.prix = 4.99;
        } else if (idProduit === 2) {
          produit.image ="/images_the_disctrict/food/Plats/asiat2.jpeg";
          produit.nom = "Maki";
          produit.description = "Maki goût variés 6 pièces";
          produit.prix = 29.99;
        } else if (idProduit === 3) {
          produit.image ="/images_the_disctrict/food/Plats/asiat3.jpeg";
          produit.nom = "Yakitori";
          produit.description = "Brochette de boeufs avec fromage fondue à l'intérieur 3 pièces";
          produit.prix = 14.99;
        } else if (idProduit === 4) {
          produit.image ="/images_the_disctrict/food/Plats/burger1.jpeg";
          produit.nom = "Burger fromage";
          produit.description = "Burger supplément fromage";
          produit.prix = 9.90;
        }else if (idProduit === 5) {
          produit.image ="/images_the_disctrict/food/Plats/burger2.jpg";
          produit.nom = "Burger Poisson";
          produit.description = "Burger avec galette de poisson";
          produit.prix = 12.50;
        }else if (idProduit === 6) {
          produit.image ="/images_the_disctrict/food/Plats/burger3.jpeg";
          produit.nom = "Anguss Noire";
          produit.description = "Burger viande anguss avec pain noire";
          produit.prix = 24.99;
        } else if (idProduit === 7) {
          produit.image ="/images_the_disctrict/food/Plats/pates1.jpeg";
          produit.nom = "Pâtes Carbonara";
          produit.description = "Lardon fumé, crème fraîche, pâtes(tagliatelle), jaunes d'oeuf, oignon";
          produit.prix = 12.90;
        } else if (idProduit === 8) {
          produit.image ="/images_the_disctrict/food/Plats/pates2.jpeg";
          produit.nom = "Pâtes Bolognaise";
          produit.description = "Spaghettis, Viande de boeuf hachée, tomate pelée, oignon, ail, thym, laurier, huile d'olive ";
          produit.prix = 14.99;
        }else if (idProduit === 9) {
          produit.image ="/images_the_disctrict/food/Plats/pates3.jpeg";
          produit.nom = "Pâtes au Saumon";
          produit.description = "Pâtes type penne, zeste de citron, crème fraîche épaisse, saumon fumé haché, anette, parmesan rapé";
          produit.prix = 12.95;
        }else if (idProduit === 10) {
          produit.image ="/images_the_disctrict/food/Plats/pizza1.jpg";
          produit.nom = "4 Fromages";
          produit.description = "Pizza chèvre, bleu, conmté, mozzarella, base tomate";
          produit.prix = 16.50;
        } else if (idProduit === 11) {
          produit.image ="/images_the_disctrict/food/Plats/pizza2.jpg";
          produit.nom = "Bolognaise";
          produit.description = "base tomate, viande haché, gruyère rapé, oignon, huile d'olive, origan";
          produit.prix = 18.90;
        } else if (idProduit === 12) {
          produit.image ="/images_the_disctrict/food/Plats/pizza3.jpg";
          produit.nom = "Margherita";
          produit.description = "Parmesan reggianno, huile d'olive, mozzarella, feuille de basilic frais, base tomate";
          produit.prix = 14.50;
        }else if (idProduit === 13) {
          produit.image ="/images_the_disctrict/food/Plats/salade1.jpeg";
          produit.nom = "Salade Niçoise";
          produit.description = "Batavia, tomate, thon, anchois, poivrons vers, olive noire, oeufs..";
          produit.prix = 4.90;
        }else if (idProduit === 14) {
          produit.image ="/images_the_disctrict/food/Plats/salade2.jpg";
          produit.nom = "Salade Mexicaine de quinoa à l'avocat";
          produit.description = "Quinoa, avocats mûrs, maïs, haricots noirs, oignon rouge, botte de coriandre, citron vert, huile d'olive, sel, poivre";
          produit.prix = 6.99;
        } else if (idProduit === 15) {
          produit.image ="/images_the_disctrict/food/Plats/salade3.webp";
          produit.nom = "Salade healthy";
          produit.description = "Tomate/Mozzarella avec une touche d'huile d'olive";
          produit.prix = 3.50;
        } else if (idProduit === 16) {
          produit.image ="/images_the_disctrict/food/Plats/sandwich1.png";
          produit.nom = "Thon Surimi";
          produit.description = "Thon, Surimi, crudité (salade/tomate)";
          produit.prix = 3.50;
        }else if (idProduit === 17) {
          produit.image ="/images_the_disctrict/food/Plats/sandwich2.jpg";
          produit.nom = "Rosette";
          produit.description = "Beurre, rosette, cornichon";
          produit.prix = 3.50;
        }else if (idProduit === 18) {
          produit.image ="/images_the_disctrict/food/Plats/sandwich3.jpeg";
          produit.nom = "Poulet Crudité";
          produit.description = "Poulet crudité (salade/tomate)";
          produit.prix = 3.50;
        } else if (idProduit === 19) {
          produit.image ="/images_the_disctrict/food/Plats/veggie1.jpeg";
          produit.nom = "Burger Vegan";
          produit.description = "Burger avec galette de pomme de terre à la place de la viande, salade, tomate, oignon, cornichon, sauce secrète.(Accompagné de ses frites)";
          produit.prix = 8.50;
        } else if (idProduit === 20) {
          produit.image ="/images_the_disctrict/food/Plats/veggie2.jpg";
          produit.nom = "Hot Dog Vegan";
          produit.description = "Hot dog avec une saucisse de légume";
          produit.prix = 7.50;
        }else if (idProduit === 21) {
          produit.image ="/images_the_disctrict/food/Plats/veggie3.jpg";
          produit.nom = "Poke bowl au saumon mariné";
          produit.description = "Avocat, fève, citron vert, saumon cru, sésame doré, sauce soja, miel, riz.";
          produit.prix = 12.80;
        }else if (idProduit === 22) {
          produit.image ="/images_the_disctrict/food/Plats/wrap1.jpeg";
          produit.nom = "Wraps aux pois chiches rôtis et à la feta";
          produit.description = "pois chiche, oignon rouge, huile d'olice, crème de sucre, feta.";
          produit.prix = 4.20;
        } else if (idProduit === 23) {
          produit.image ="/images_the_disctrict/food/Plats/wrap2.jpeg";
          produit.nom = "Wraps au crabe";
          produit.description = "tortilla, chaire de crabe, feuille de laitue, crème fraiche, mayonnaise.";
          produit.prix = 5.50;
        } else if (idProduit === 24) {
          produit.image ="/images_the_disctrict/food/Plats/wrap3.jpeg";
          produit.nom = "Wraps au poulet";
          produit.description = "tortilla de blé, blanc de poulet, feuille de laitue, tomate, moutarde.";
          produit.prix = 4.80;
        }else if (idProduit === 25) {
          produit.image ="/images_the_disctrict/food/Plats/kebab1.png";
          produit.nom = "Kebab assiette 3 viandes";
          produit.description = "Assiette kebab 3 viandes avec frites/crudités.";
          produit.prix = 7.50;
        }else if (idProduit === 26) {
          produit.image ="/images_the_disctrict/food/Plats/kebab2.jpeg";
          produit.nom = "Kebab classique";
          produit.description = "Kebab classique, crudité, sauce avec ses frites.";
          produit.prix = 6.50;
        } else if (idProduit === 27) {
          produit.image ="/images_the_disctrict/food/Plats/kebab3.jpeg";
          produit.nom = "Kebab Royal";
          produit.description = "Kebab classique, plus grand avec galette de pomme de terre et supplément viande/fromages.";
          produit.prix = 8.00;
        } else if (idProduit === 28) {
          produit.image ="/images_the_disctrict/food/Plats/libanais1.jpg";
          produit.nom = "Libanais classique";
          produit.description = "Libanais classique crudité";
          produit.prix = 3.90;
        }else if (idProduit === 29) {
          produit.image ="/images_the_disctrict/food/Plats/libanais2.jpeg";
          produit.nom = "Libanais royal";
          produit.description = "Libanais avec supplément fromage/lamelle de kebab + galette de pomme de terre";
          produit.prix = 5.50;
        }else if (idProduit === 30) {
          produit.image ="/images_the_disctrict/food/Plats/libanais3.jpeg";
          produit.nom = "Libanais vegan";
          produit.description = "Libanais sans viande avec galette de légume et de pomme de terre, suplément fromage et crudité";
          produit.prix = 4.50;
        } else if (idProduit === 31) {
          produit.image ="/images_the_disctrict/food/Plats/panini1.jpeg";
          produit.nom = "Panini Nutella";
          produit.description = "Panini au Nutella.";
          produit.prix = 3.20;
        } else if (idProduit === 32) {
          produit.image ="/images_the_disctrict/food/Plats/panini2.jpeg";
          produit.nom = "Panini 3 fromages";
          produit.description = "Panini chèvre, bleu, ementale.";
          produit.prix = 4.50;
        }else if (idProduit === 33) {
          produit.image ="/images_the_disctrict/food/Plats/panini3.jpeg";
          produit.nom = "Panini viande hachée";
          produit.description = "Panini avec viande hachée fromage, crudité.";
          produit.prix = 7.00;
        }else if (idProduit === 34) {
          produit.image ="/images_the_disctrict/food/Plats/tacos1.jpeg";
          produit.nom = "Tacos au poulet curry";
          produit.description = "Tortilla, Escalope de Poulet, Crème liquide, Fromage rapé, oignon, frites.";
          produit.prix = 6.50;
        } else if (idProduit === 35) {
          produit.image ="/images_the_disctrict/food/Plats/tacos2.jpeg";
          produit.nom = "Recette de tacos au bœuf haché ";
          produit.description = "Tacos avec boeuf haché frites suplément fromage, crudité.";
          produit.prix = 6.50;
        }else if (idProduit === 36) {
          produit.image ="/images_the_disctrict/food/Plats/tacos3.jpeg";
          produit.nom = "Recette de tacos au bœuf haché ";
          produit.description = "Tacos 3 viandes: poulet,boeuf,mouton,frites,crudités.";
          produit.prix = 8.50;
        }
  
        var panier = JSON.parse(sessionStorage.getItem("panier")) || [];
        panier.push(produit);
        sessionStorage.setItem("panier", JSON.stringify(panier));
  
        alert("Le produit a été ajouté au panier !");
      }
  
      function afficherPanier() {
        window.location.href = "Commande.php";
      }
    </script>
    <br><br>
    </body>
<foot>
    <?php include 'footer.php';?>
</foot>

<script type="module" src="dist/assets/index.js"></script>

</html>