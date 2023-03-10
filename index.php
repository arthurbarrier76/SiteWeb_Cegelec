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
        <link rel="stylesheet" href="style2.css">
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
                <form action="verification.php" method="POST" >
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
                    <div class="title text">S??curit??</div>
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
                    <div class="title text">Acteurs priv??s/publics</div>
                </div>
           </div>
        </div>
        <div class="box3 ">
            <h3>Mission,vision,r??alisation et ambition</h3>
            </br>
            </br>
            <p>
                Notre mission est de concevoir, financer, construire et g??rer des infrastructures et des ??quipements qui contribuent ?? am??liorer la vie quotidienne et la mobilit?? de chacun.</br>
                Parce que notre vision de la r??ussite est globale et va au-del?? de nos r??sultats ??conomiques, nous nous engageons sur la performance environnementale, sociale et soci??tale de nos activit??s.</br>
                Parce que nos r??alisations sont d???utilit?? publique, nous consid??rons l?????coute et le dialogue avec les parties prenantes de nos projets comme des conditions n??cessaires ?? l???exercice de nos m??tiers.</br>
                Notre ambition est de  cr??er de la valeur ?? long terme pour nos clients, nos actionnaires, nos salari??s, nos partenaires et pour la soci??t?? en g??n??ral.
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
                    <p>Arthur barrier 2022??</p>
                </div>
                
            </div>

            
        </footer>
        
    </body>
</html>

