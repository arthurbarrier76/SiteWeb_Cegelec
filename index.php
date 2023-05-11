<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link href="https://fonts.googleapis.com/css2?family=Koulen&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300;400&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&family=Roboto+Condensed:wght@300;400&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@300&family=Inconsolata&family=Open+Sans:wght@300&family=Roboto+Condensed:wght@300;400&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@300&family=Inconsolata&family=Open+Sans:wght@300&family=Roboto+Condensed:wght@300;400&display=swap" rel="stylesheet">
        <link rel="shortcut icon" href="cegelec-logo.png" type="image/png">
        <title>Page_Login</title>
        <link rel="stylesheet" href="style-pages-connexion-Accueil.css">
    </head>
    <header>
        <div class="container">
            <div class="img5"></div>
            <nav>
                <a href="creation.php" class="slide-line ">Creer</a>
            </nav>
        </div>
       
    </header>
    <body>
        <div class="background2">
            <div class ="box_login  " id="box">
                <form action="back-end/verification.php" method="POST" >
                    <div class="boxh1">
                        <h1>Connexion</h1>
                    </div>
                    <div class="topBox">
                        <label>Nom d'utilisateur :</label> 
                        <input class="name" type ="text" placeholder="Entrer un  utilisateur" name ="username" required>
                    </div>
                    <div class="middlebox">
                        <label>Mot de passe :</label> 
                        <input class="mdp" type ="password" placeholder="Entrer  mot de passe" name ="passworde" required>
                    
                    </div>
                    <div class="bottomBox">
                        <input class="button" type= "submit" id='submit' value='LOGIN' >
                    </div>
                    <?php
                    if(isset($_GET['erreur'])){
                        $err = $_GET['erreur'];
                        if($err==1 || $err==2)
                            echo "<p class='incorect'>Utilisateur ou mot de passe incorrect</p>";
                    }
                    ?>
                </form>
            </div>
        </div>
        <div class="boxh2">
            <h2 class="  slide-line-two ">Notre presentation:</h2>
        </div>
        </br>
        <div class="box2 " >
            <div class="style1">
                <div class="img one"></div>
                <div class="fadedbox">
                    <div class="title text">Sécurité</div>
                </div>
            </div>
            <div class="style1">
                <div class="img two"></div>
                <div class="fadedbox">
                    <div class="title text">Innovant</div>
                </div>
           </div>
           <div class="style1">
                <div class="img three"></div>
                <div class="fadedbox">
                    <div class="title text">Acteurs privés/publics</div>
                </div>
           </div>
        </div>
        <div class="box3 ">
            <h3>Mission,vision,réalisation et ambition</h3>
            </br>
            </br>
            <p>
                Notre mission est de concevoir, financer, construire et gérer des infrastructures et des équipements qui contribuent à améliorer la vie quotidienne et la mobilité de chacun.</br>
                Parce que notre vision de la réussite est globale et va au-delà de nos résultats économiques, nous nous engageons sur la performance environnementale, sociale et sociétale de nos activités.</br>
                Parce que nos réalisations sont d’utilité publique, nous considérons l’écoute et le dialogue avec les parties prenantes de nos projets comme des conditions nécessaires à l’exercice de nos métiers.</br>
                Notre ambition est de  créer de la valeur à long terme pour nos clients, nos actionnaires, nos salariés, nos partenaires et pour la société en général.
            </p>
        </div>
        <footer>
            <div class="email">
                <p class="slide-line " >
                    vinci.Lille@gmail.com
                </p>
            </div>
            <div class="contact-perso ">
                <div class="invisible"></div>
                <div class="linkdin">
                    <a href="https://www.linkedin.com/in/arthur-barrier-00559819b" class="slide-line ">Linkedin</a>
                </div>
                <div class="creator">
                    <p>Arthur barrier 2022©</p>
                </div>
                
            </div>

            
        </footer>
        
    </body>
</html>

