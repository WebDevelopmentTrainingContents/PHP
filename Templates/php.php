<?php
$liens = ["<a href=\"#\">Newsletter</a> - " , "<a href=\"#\">Promo</a> - " , "<a href=\"#\">Nouveaux produits</a> - " , "<a href=\"#\">Meilleures ventes</a> - " , "<a href=\"#\">Mentions légales</a> - " , "<a href=\"#\">CGV</a> - " , "<a href=\"#\">Contactez-nous</a>" ];
$arrayNav = ["Accueil","Vente","Maison","Techno","Bijoux","Contacts"];
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