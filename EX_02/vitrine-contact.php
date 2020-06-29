<php>
    <head>
        <title>Vitrine - Contact</title>
        <meta charset='utf-8'>
        <link rel='stylesheet' type='text/css' href='style/vitrine.css'>
    </head>
<body>
    <nav>
        <?php
        $vitrine='contact';
        require 'navigation.php';
        ?>
    </nav>
    <header>
        <?php require 'header.php'; ?>
    </header>
    <div class='body1'>
        <h2>CONTACT</h2>
        <form>
            <form action='/page-de-traitement' method='post'>
                <div>    
                    <input type='text' id='name' name='user_name' placeholder='Votre nom'>
                </div>
                <div>
                    <input type='email' id='mail' name='user_mail' placeholder='Votre email'>
                </div>    
                <div>
                    <textarea id='msg' name='user_message' placeholder='Comment améliorer mon site ?'></textarea>
                </div>
            </form>
        </form>
            <a href='' class='button'>Envoyer</a>
    </div>
    <footer>
        <?php require 'footer.php'; ?>
    </footer>
</body>
</php>