<php>
    <head>
        <title>Vitrine - Accueil</title>
        <meta charset='utf-8'>
        <link rel='stylesheet' type='text/css' href='style/vitrine.css'>
    </head>
<body>
    <nav>
        <?php
        $vitrine='accueil';
        require 'navigation.php';
        ?>
    </nav>
    <header>
        <?php require 'header.php'; ?>
    </header>
    <div class='body1'>
        <h2>ACCUEIL</h2>
            <p>Le numérique, nouvelle ère de l’humanité, source d’innovation et de performance ?<br>
            Pour mieux comprendre cette révolution, venez apprendre les rudiments du code et
            découvrir les bases de la programmation des sites internet. Destiné aux étudiants,
            ce code camp vous initiera en un mois aux principaux langages de programmation
            Web (php-CSS et PHP), vous dévoilera le fonctionnement d’outils comme Google ou
            Paypal et vous éclaira sur la sécurité des sites internet.</p>
    </div>
    <div class='img-accueil'>
        <img src='style/image1.jpg' alt='Coding'>
        <img src='style/image2.jpg' alt='Work'>
    </div>
    <footer>
        <?php require 'footer.php'; ?>
    </footer>
</body>
</php>