<?php if(isset($_POST['cookie'])){$choixProduit = $_POST['cookie'];}; ?>
<?php setcookie('produit' , $choixProduit) ?>
<?php if(isset($_COOKIE)){foreach($_COOKIE as $cookie) {echo $cookie;}} ?>