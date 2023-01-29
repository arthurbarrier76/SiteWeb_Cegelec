<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link href="https://fonts.googleapis.com/css2?family=Koulen&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300;400&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&family=Roboto+Condensed:wght@300;400&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@300&family=Inconsolata&family=Open+Sans:wght@300&family=Roboto+Condensed:wght@300;400&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@300&family=Inconsolata&family=Open+Sans:wght@300&family=Roboto+Condensed:wght@300;400&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Oxygen:wght@300&display=swap" rel="stylesheet">
        <link rel="shortcut icon" href="cegelec-logo.png" type="image/png">
        <link rel="stylesheet" href="style2.css">
        <title>Page_Creation</title>
    </head>
    <body>
        <header>
            <div class="container">
                <div class="img5"></div>
                <nav>
                    <a href="index.php" class="slide-line">Annuler</a>
                </nav>
            </div>
        </header>
        <section>
            <div class="background">
                <div class ="box_creation" >
                    <form action="VERIF.php" method="POST" >
                    <?php 
                    $mysqli = new mysqli("localhost", "root", "root", "news_commandes");
                    ?>
                        <div class="box-creation-h2">
                            <h1 >Nouveau compte</h1>
                        </div>
                        <div class="topBox">
                            <label>Nom d'utilisateur :</label> 
                            <input class="name" type ="text" placeholder="Entrer un  utilisateur" name ="username" required>
                        </div>
                        <div class="middlebox">
                            <label>Mot de passe :</label> 
                            <input class="mdp" type ="password" placeholder="Entrer  mot de passe" name ="passworde" required> 
                        </div>
                        <div class="bottombox">
                            <input class="button" type= "submit" name="creer"  value='Creer' >
                        </div>
                    </form>
                </div> 
            </div>
        </section>
        <script src=" reveal.js ">
        </script>
    </body>
</html>