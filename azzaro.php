<?= "Mon cookie contient : " . $_COOKIE['id']; ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maquette Azzaro</title>

    <!-- CDN BS CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- mon css -->
    <link rel="stylesheet" href="CSS/style.css">
 
</head>
<body>

<?php
$liens = ["<a href=\"#\">Newsletter</a> - " , "<a href=\"#\">Promotions</a> - " , "<a href=\"#\">Nouveaux produits</a> - " , "<a href=\"#\">Meilleures ventes</a> - " , "<a href=\"#\">Mentions légales</a> - " , "<a href=\"#\">CGV</a> - " , "<a href=\"#\">Contactez-nous</a>" ];
$arrayNav = ["Accueil","ID KDO","Maison","Techno","Bijoux","Vêtements"];
$heure = date('h:i:s');
$date = date('d/m/y');
//--------- Qui sommes nous ? -----------
$mots = ['sommes' , '?!'];
$phrase = [' Bienvenue chez MaBoutique ! MaBoutique est la plus grande boutique en ligne de France consacrée
à la mode et à la beauté pour femmes et hommes.<br />' , '  Nous proposons plus de 850 marques ainsi que nos propres collections.<br /> N\'hésitez plus ! les livraisons et les retours sont gratuits.<br />' , ' Retrait possible de votre commande dans notre entrepot sur RDV. '];
// Fonctions :

function maFonction($mot1, $mot2, $mot3) {
    echo $mot1;
    echo $mot2;
    echo $mot3;
};

// Est-ce qu'une valeur nom a été soumise ?
if (!empty($_GET['titre'])) {
    $titre = $_GET['titre'];
}
// Dans le cas contraire :
else {
    $titre = "Pas de titre";
  
}

//-----POST 

/* // Est-ce qu'une valeur nom a été soumise ?
if (!empty($_POST['titre1'])) {
    $titre1 = $_POST['titre1'];
}
// Dans le cas contraire :
else {
    $titre1 = "Pas de titre 1";
  
}

// Est-ce qu'une valeur nom a été soumise ?
if (!empty($_POST['titre2'])) {
    $titre2 = $_POST['titre2'];
}
// Dans le cas contraire :
else {
    $titre2 = "Pas de titre 2";
  
}

// Est-ce qu'une valeur nom a été soumise ?
if (!empty($_POST['titre3'])) {
    $titre3 = $_POST['titre3'];
}
// Dans le cas contraire :
else {
    $titre3 = "Pas de titre 3";
  
} */

// Condition raccourcie :

if (!empty($_POST['titre1']) && !empty($_POST['titre2']) && !empty($_POST['titre3'])) {
    $titre1 = $_POST['titre1'];
    $titre2 = $_POST['titre2'];
    $titre3 = $_POST['titre3'];
    $cookie = $_POST['cookie'];
}
else {
    $titre1 = $titre2 = $titre3 = "Renseignez tous les titres"; 
}

echo $cookie;

?>


  

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
                            <p class="telephone">0800 10 28 10</p>
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
                                        <a class="nav-link px-3 active" href="#"><?php echo $arrayNav[0]
                                         ?></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><?php echo $arrayNav[1] ?></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><?php echo $arrayNav[2] ?></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><?php echo $arrayNav[3] ?></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><?php echo $arrayNav[4] ?></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><?php echo $arrayNav[5] ?></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
                <!-- fin de row nav -->

            </header>
        </div>

        <!-- début de main, pris dans une row pour que son bg color prenne la totalité de la largeur. Tester sans pour voir l'effet sans -->
        <div class="row">
            <main>

                <!-- row pour l'image bandeau -->
                <div class="row bandeau">
                    <img class="img-fluid" src="img/bandeau.png" alt="Le parfum Azzaro pour homme, avec Enrique Iglesias pour le promouvoir">
                <!-- fin image bandeau -->

                <!-- début de row pour les services---------------------- -->
                <!-- uen marge top seulement pour les grands ecrans. Elle disparait pour les petits ecrans (grace à la syntaxe mt-md-4) -->
                <div class="row mt-md-4 services">

                    <!-- colonne paiement -->
                    <!-- colonne col-md-2 (coulissera ensuite) avec sa bordure droite (end), grise. Avec un pading sur l'axe des y -->
                    <div class="col-md-2 py-2 border-end border-secondary paiement">
                        <!-- h2 avec une font-size h4 -->
                        <h2 class="h4"><?= $titre1 ?></h2>
                        <p>Reglez vos achats en toute sérénité sur maboutique.com</p>
                        <img class="img-fluid" src="img/paiement.png" alt="les différents cartes de crédit acceptées pour payer en ligne">
                    </div>
                    <!-- fin de colonne paiement -->

                    <!-- colonne qui sommes nous -->
                    <!-- colonne col-md-8 (coulissera ensuite) avec sa bordure droite (end), grise. Avec un pading sur l'axe des y et un autre sur l'axe des x qui disparaitra sur petits ecrans (px-md-4) -->
                    <div class="col-md-8 px-md-4 py-2 border-end border-secondary qsn">
                        <!-- h2 avec une font-size h4 -->
                        <h2 class="h4"><?= $titre2 ?></h2>
                        <p>

                        
                           <?= maFonction($phrase[0], $phrase[1], $phrase[2]); ?>
                          
                      
                        </p>
                        <p id="test">Il est : <?= $heure ?></p>
                    </div>
                    <!-- fin de colonne qsn -->

                    <!-- colonne livraison -->
                    <!-- colonne col-md-2 (coulissera ensuite). Avec un pading sur l'axe des y -->
                    <div class="col-md-2 py-2 livraison">
                        <!-- h2 avec une font-size h4 -->
                        <h2 class="h4"><?= $titre3 ?></h2>
                        <!-- row avec du padding vertical pour les livraisons -->
                        <div class="row py-1">
                            <!-- col qui accueillera ensuite le bg img du camion en css, c'est la raison pour laquelle je suis donne du margin start (ms) et padding statrt (ps) ici, pour séparer les différents éléments entre eux -->
                            <div class="col-11 ms-3 ps-5 camion">
                                <p>Livraison sous 48h</p>
                            </div>
                        </div>
                        <!-- fin de row livraisons -->

                        <!-- row pour echange de produits, padding vertical -->
                        <div class="row py-1">
                            <!-- col qui accueillera ensuite le bg img des fleches inversées en css, c'est la raison pour laquelle je suis donne du margin start (ms) et padding statrt (ps) ici, pour séparer les différents éléments entre eux -->
                            <div class="col-11 ms-3 ps-5 echange">
                                <p>Produits Echangeables</p>
                            </div>
                        </div>
                    </div>
                    <!-- fin de colonne livraison -->

                </div>
                <!-- fin de row services---------------------------------- -->

                <!-- row pour les produits----------------------------------- -->
                <!-- le justify-content-around permet la meilleur répartition des éléments pour rspecter la maquette. Margin dans l'axe des y (my) -->
                <div class="row justify-content-around my-4 rangee-produits">
                    <!-- colonne pour le premier produit, avec col-md-3 pour coulisser ensuite. Le padding vertical sera pratique en responsive pour séparer les produits entre eux -->
                    <div class="col-md-3 my-2 produits">

                        <!-- une row pour le h2, importante pour avoir le bg-img en css sur toute la largeur. tester sans pour avoir l'effet sans -->
                        <div class="row">
                            <!-- je centre mon h2 avec une autre syntaxe pour la font-size, + du bold directement ici + du padding vertical pour l'espace pour le titre -->
                            <h2 class="text-center fs-5 fw-bold py-1">Bon Plan</h2>
                        </div>

                        <!-- du padding end (pe) pour que le texte soit + loin de la bordure droite pour cette colonne -->
                        <div class="row pe-2">
                            <div class="col-3">
                                <img class="img-fluid" src="img/robe.png" alt="Robe noire en promotion">
                            </div>
                            <div class="col-9">
                                <p class="texte-produits">Bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla</p>
                                <!-- lien qui permet d'aller lire plus d'infos sur le produit sur sa page dédiée -->
                                <p class="text-end lien-produits"><a href="#">Voir</a></p>
                            </div>
                        </div>

                    </div>
                    <!-- fin premier produit -->

                    <!-- colonne pour le second produit, avec col-md-3 pour coulisser ensuite. Le padding vertical sera pratique en responsive pour séparer les produits entre eux -->
                    <div class="col-md-3 my-2 produits">

                        <!-- une row pour le h2, importante pour avoir le bg-img en css sur toute la largeur. tester sans pour avoir l'effet sans -->
                        <div class="row">
                            <!-- je centre mon h2 avec une autre syntaxe pour la font-size, + du bold directement ici + du padding vertical pour l'espace pour le titre -->
                            <h2 class="text-center fs-5 fw-bold py-1">Coup de Coeur</h2>
                        </div>

                        <!-- du padding end (pe) pour que le texte soit + loin de la bordure droite pour cette colonne -->
                        <div class="row pe-2">
                            <!-- noter la répartition entre les deux cols différente ici par rapport au preier produit (3 vs 9 pourl e premier.  4 vs 8 ici...maquette oblige) -->
                            <div class="col-4">
                                <img class="img-fluid" src="img/talons.png" alt="Robe noire en promotion">
                            </div>
                            <div class="col-8">
                                <p class="texte-produits">Bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla</p>
                                <!-- lien qui permet d'aller lire plus d'infos sur le produit sur sa page dédiée -->
                                <p class="text-end lien-produits"><a href="#">Voir</a></p>
                            </div>
                        </div>
                    </div>
                    <!-- fin second produit -->

                    <!-- colonne pour le second produit, avec col-md-3 pour coulisser ensuite. Le padding vertical sera pratique en responsive pour séparer les produits entre eux -->
                    <div class="col-md-3 my-2 produits">

                        <!-- une row pour le h2, importante pour avoir le bg-img en css sur toute la largeur. tester sans pour avoir l'effet sans -->
                        <div class="row">
                            <!-- je centre mon h2 avec une autre syntaxe pour la font-size, + du bold directement ici + du padding vertical pour l'espace pour le titre -->
                            <h2 class="text-center fs-5 fw-bold py-1">Objectif Plaisir</h2>
                        </div>

                        <!-- du padding end (pe) pour que le texte soit + loin de la bordure droite pour cette colonne -->
                        <div class="row pe-2">
                            <!-- noter la répartition entre les deux cols différente ici par rapport au preier produit (3 vs 9 pourl e premier.  4 vs 8 ici...maquette oblige) -->
                            <div class="col-4">
                                <img class="img-fluid" src="img/chemise.png" alt="Robe noire en promotion">
                            </div>
                            <div class="col-8">
                                <p class="texte-produits">Bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla</p>
                                <!-- lien qui permet d'aller lire plus d'infos sur le produit sur sa page dédiée -->
                                <p class="text-end lien-produits"><a href="#">Voir</a></p>
                            </div>
                        </div>

                    </div>

                    
                </div>
                <!-- fin row pour les produits----------------------------------- -->

            </main>
        </div>
        <!-- fin de row pour le main -->

        <footer>
            <!-- row pour les liens navigation, avec un padding top -->
            <nav class="row pt-2 site-map">
                <!-- je centre tout le paragraphe -->
                <p class="text-center"><?php foreach($liens as $lien){echo $lien;} ?></p>
            </nav>

        </footer>

    </div>
    <!-- fin de fluid -->

    <!-- CDN BS JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    
</body>
</html>