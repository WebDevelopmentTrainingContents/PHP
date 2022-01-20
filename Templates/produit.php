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