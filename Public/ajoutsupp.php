<head>
</head>
    <body>
        <?php
        include 'header.php';
        ?>

<div class="main-content">
        <div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
            <button id="btnJV" class="btn btn-dark btn-lg btn-change-color">JV</button>
            <button id="btnMangas" class="btn btn-dark btn-lg btn-change-color">Mangas</button>
        </div>

        <!-- Fenêtre modale pour le formulaire JV -->
        <div id="modalJV" class="modal">
            <div class="modal-content">
                <span class="close" onclick="closeModal()">&times;</span>
                <h2>Formulaire JV</h2>
                <form>
                    <!-- Ajoute ici les champs du formulaire JV -->
                    <label>Nom du jeu:</label>
                    <input type="text" name="nom_jeu" required>

                    <label>Sur quelle plateforme:</label>
                    <input type="text" name="plateforme" required>

                    <!-- Ajoute les autres champs ici -->

                    <button type="submit" class="btn btn-primary">Envoyer</button>
                </form>
            </div>
        </div>

        <!-- Fenêtre modale pour le formulaire manga -->
        <div id="modalMangas" class="modal">
            <div class="modal-content">
                <span class="close" onclick="closeModal()">&times;</span>
                <h2>Formulaire Manga</h2>
                <form>
                    <!-- Ajoute ici les champs du formulaire Manga -->
                    <label>Nom du manga:</label>
                    <input type="text" name="nom_manga" required>

                    <label>Année de sortie:</label>
                    <input type="number" name="annee_sortie" required>

                    <!-- Ajoute les autres champs ici -->

                    <button type="submit" class="btn btn-primary">Envoyer</button>
                </form>
            </div>
        </div>
    </div>  

<!-- Dans le <script> de la page HTML -->
<script>
    function openModalJV() {
        document.getElementById("modalJV").style.display = "block";
    }

    function openModalMangas() {
        document.getElementById("modalMangas").style.display = "block";
    }

    function closeModal() {
        document.getElementById("modalJV").style.display = "none";
        document.getElementById("modalMangas").style.display = "none";
    }

    window.onclick = function(event) {
        var modalJV = document.getElementById("modalJV");
        var modalMangas = document.getElementById("modalMangas");
        if (event.target === modalJV || event.target === modalMangas) {
            closeModal();
        }
    }

    document.getElementById("btnJV").addEventListener("click", function() {
        openModalJV();
    });

    document.getElementById("btnMangas").addEventListener("click", function() {
        openModalMangas();
    });
</script>



            <footer class=footer>
                <?php
                include 'footer.php';
                ?>
            </footer>
    </body>