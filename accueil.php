<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css2?family=Koulen&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300;400&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro:wght@300&display=swap" rel="stylesheet">
        <link rel="shortcut icon" href="cegelec-logo.png" type="image/png">
        <link rel="stylesheet" href="style.css">

        <title>Page_Accueil</title>
    </head>
    <body>
        <nav>
            <div class="titre-vinci">
                <img src="https://th.bing.com/th/id/OIP.nvx7_0eSXWUhC0gFhhkRvgAAAA?pid=ImgDet&rs=1" width="150" height="60">
                <p>Cegelec Nord Tertiaire</p>
            </div>
            
            <div class="navbar">
                <ul>
                    <li><a href="#" class="slide-line">Accueil</a></li>
                    <li><a href="index2.php" class="slide-line">Commandes</a></li>
                    <li><a href="formulaires.php" class="slide-line">Formulaire</a></li>
                </ul>
            </div>
                
        </nav>
        <header>
            
            <div class ="login " id="content">
            <!-- tester si l'utilisateur est connecté -->
            <?php
                session_start();
                if($_SESSION['username'] !== ""){
                    $user = $_SESSION['username'];
                    // afficher un message
                    echo "<p class='slide-line'>Bonjour $user, vous êtes connecté !</p>";
                }
            ?>
            </div>
            <div class="wrap">
                <button class="buttonlog" onclick="window.location.href = 'index.php' ">Deconnexion</button>
            </div>
        </header>
            <section class="decouvrir">
                    <div class="img "></div>
                    <div class="box1 ">
        
                        <p ><strong>Notre savoir-faire:</strong></br>Cegelec Nord Grands Projets est l'entreprise du groupe VINCI Energies experte des grands projets tertiaires dans le Nord et l'Est de la France. Nous réalisons vos installations électriques, intégrons du SMART et rendons votre bâtiment apte au service (label R2S) afin de faciliter la maintenance, optimiser votre exploitation et maîtriser les usages présents et futurs de votre patrimoine immobilier.</p>
                    </div>
             </section>
        <footer>
            <div class="contact ">
                <span class="titre-span slide-line">Contacts:</span>
                <p>31 rue Pasteur, Wasquehal 59290</br>
               CegelecNord@gmail.com</br>
                Tel:0890109231</p>
            </div>
        </footer>
    </body>
</html>