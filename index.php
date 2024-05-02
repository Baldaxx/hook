<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page de vente</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <div class="product">
            <h2>Pomme</h2>
            <p>Description du produit</p>
            <button class="add-to-cart" data-product-id="1">Ajouter au panier</button>
            <h2>Fraise</h2>
            <p>Description du produit</p>
            <button class="add-to-cart" data-product-id="2">Ajouter au panier</button>
            <h2>Cerise</h2>
            <p>Description du produit</p>
            <button class="add-to-cart" data-product-id="3">Ajouter au panier</button>
        </div>

        <div id="monCurseurContainer">
            <h2>Mon panier</h2>
            <p>Plus que <span id="restant">70</span> euros pour profiter de la livraison gratuite !</p>
            <input type="range" id="monCurseur" min="0" max="100" value="0" style="width: 100%;">
            <div id="messagePort"></div>
        </div>
    </div>
    <script src="main.js"></script>
</body>

</html>

<!-- A faire correspondre avec public function add_to_cart -->
