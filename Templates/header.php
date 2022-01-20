<?php require('php.php'); 
include('cookie.php');
require('head.php');?>
<body>
  

    <!-- debut de container -->
    <!-- je donne un margin dans l'axe des y pour séparer en haut et en bas mon container de body -->
    <div class="container my-2">

        <!-- cette row me permet d'avoir le bg color sur toute la largeur du header. Testez en enlevant pour voir l'effet sans -->
        <div class="row">
            <header>

                <!-- row pour les 3 colonnes -->
                <div class="row">

                    <!-- colonne logo titre et slogan -->
                    <!-- col-md-5 pour que les cols coulissent les uns sous les autres en responsive -->
                    <div class="col-md-5 logo-titre-slogan">
                        <!-- h1 est un lien cliquable (retour vers l'accueil qlq soit la page du site ou je me trouve) -->
                        <!-- le logo sera mis en bg-image dans le css -->
                        <h1 class="titre"><a href="#"><?php echo $titre ?></a></h1>
                        <!-- h6 pour la font-size -->
                        <h2 class="slogan h6">Vente en ligne : Mode, Tendance et Déco</h2>
                        <p id="test">Il est : <?= $heure ?></p>
                        <p id="test"><?= "Il est : " . $heure ?></p>
                        <?= "<p id=\"test\">Il est : " . $heure . "</p>" ?>
                 
                        <?="<p id=\"test\">Il est " . $heure . ". Et nous somme le  " . $date ."</p>" ?>
                    </div>
                    <!-- fin titre et slogan -->

                    <!-- colonne aide -->
                    <!-- col-md-4 pour que les cols coulissent les uns sous les autres en responsive -->
                    <div class="col-md-4 aide">
                        <h2 class="help">Besoin d'aide ?</h2>
                        <div class="sav">
                            <img class="img-fluid" src="img/aide.png" alt="Numéro de téléphone pour joindre le SAV">
                            <p class="telephone">0800 10 28 18</p>
                        </div>
                        <p class="horaires">Du lundi au vendredi de 10h à 17h30</p>
                        <p id="test">Il est : <?= $heure ?></p>
                        <p id="test">Il est : <?= $heure ?></p>
                 
                    </div>
                    <!-- fin aide -->

                    <!-- colonne profil -->
                    <!-- col-md-3 pour que les cols coulissent les uns sous les autres en responsive -->
                    <nav class="col-md-3 profil">
                        <div class="row compte">
                            <!-- lien cliquable pour aller sur lapage profil -->
                            <h2 class="h6 text-center"><a href="#">Mon Compte</a></h2>
                        </div>
                        <div class="row panier">
                            <div class="col-12">
                                <!-- lien cliquable pour aller sur la page panier -->
                                <!-- l'image viendra en bg-image dans le css -->
                                <p class="texte-panier"><a href="#">article(s) dans votre panier</a></p>
                            </div>
                        </div>
                    </nav>
                    <!-- fin profil -->
                </div>
                <!-- fin row les 3 colonnes -->

                <!-- la row pour la nav -->
                <div class="row">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <div class="container-fluid">
                            <!-- text light, propriété qui permet d'avoir le toggler en blanc lorsque cliqué -->
                            <button class="navbar-toggler text-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <!-- pour que mes onglets occupent la totalité de la nav (w-100 pour width=100%)
                                Par défaut elle n'a pas ce comportement, qu'il faut donc parametrer ainsi -->
                                <ul class="navbar-nav w-100 justify-content-around">
                                    <li class="nav-item">
                                        <!-- onglet actif (css) avec un padding sur l'axe des x de 3 -->
                                        <a class="nav-link px-3 active" href="azzaro.php"><?php echo $arrayNav[0]
                                         ?></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="azzaroProduit.php"><?php echo $arrayNav[1] ?></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="azzaroProduit.php"><?php echo $arrayNav[2] ?></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="azzaroProduit.php"><?php echo $arrayNav[3] ?></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="azzaroProduit.php"><?php echo $arrayNav[4] ?></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="azzaroContact.php"><?php echo $arrayNav[5] ?></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
                <!-- fin de row nav -->

            </header>
        </div>