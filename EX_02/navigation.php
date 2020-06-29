<?php
    if ($vitrine=='accueil') {
        echo "
        <a href='vitrine-contact.php'>CONTACT</a>
        <a href='vitrine-programme.php'>PROGRAMME</a>
        <a class='encours' href='vitrine-accueil.php'>ACCUEIL</a>";
    }
    if ($vitrine=='programme') {
        echo "
        <a href='vitrine-contact.php'>CONTACT</a>
        <a class='encours' href='vitrine-programme.php'>PROGRAMME</a>
        <a href='vitrine-accueil.php'>ACCUEIL</a>";
    }
    if ($vitrine=='contact') {
        echo "
        <a class='encours' href='vitrine-contact.php'>CONTACT</a>
        <a href='vitrine-programme.php'>PROGRAMME</a>
        <a href='vitrine-accueil.php'>ACCUEIL</a>";
    }
?>