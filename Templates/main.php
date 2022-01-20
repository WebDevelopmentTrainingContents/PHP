
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