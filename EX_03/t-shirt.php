<?php
    $nom_produit = "T-shirt simple";
    $couleur = "blanc";
    $prix = 10.50;
    $disponible = true;
    $quantite = 10;
    
    echo "<h3>Le nom du produit est $nom_produit\n</h3>";
    echo "<h3>Il reste $quantite produits en stock\n</h3>";
    echo "<h3>Le produit $nom_produit est de couleur : $couleur \n</h3>";

    echo "<h4>Acheter 3 produits couterait ",3*$prix,"€\n</h4>";
    echo "<h4>Acheter la totalité des produits disponibles coûterait ",10*$prix,"€\n</h4>";
    echo "<h4>Si 3 produits sont vendus\n</h4>";

    if ($disponible == true) {
        echo "<p>Le produit $nom_produit est disponible</p>";
    }
    else {
        echo "<p>Le produit $nom_produit n'est malheureusement plus disponible</p>";
    }

    if ($quantite > 5) {
        echo "<p>Il reste $quantite produits en magasin.</p>";
    }
    elseif ($quantite < 5) {
        echo "<p>Il ne reste plus que $quantite produits en magasin</p>";
    }
    elseif ($quantite == 1) {
        echo "<p>Il ne reste plus qu'un produit en magasin</p>";
    }
    else {
        echo "<p>Il ne reste plus de produit en magasin</p>";
    }
?>
