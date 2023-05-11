<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css2?family=Koulen&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300;400&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Inconsolata&family=Open+Sans:wght@300&family=Roboto+Condensed:wght@300;400&display=swap" rel="stylesheet">
        <link rel="shortcut icon" href="cegelec-logo.png" type="image/png">
        <link rel="stylesheet" href="style-general-site.css">

        <title>Page_Formulaire</title>
    </head>
    <body>
        
        <nav>
            <div class="titre-vinci">
                <img src="https://th.bing.com/th/id/OIP.nvx7_0eSXWUhC0gFhhkRvgAAAA?pid=ImgDet&rs=1" width="150" height="60">
                <p>Cegelec Nord Tertiaire</p>
                   
            </div>
            <div class="navbar">
                <ul>
                    <li> <a href="accueil.php" class="slide-line">Accueil</a></li>
                    <li> <a href="index2.php" class="slide-line">Commandes</a></li>
                    <li><a href="" class="slide-line">Formulaire</a></li>
                </ul>
            </div>
        </nav>
        <section >
            <div class="container">
                <div class="partform ">
                    <div class="formulaire">
                        <form action="back-end/formulaire.php" method="post">
                            <div class="topBox">
                                <h2 class="slide-line-two">Formulaire commandes:</h2>
                            </div>
                            <div class="middleBox">
                                <label for="entreprise">Entreprise:</label>
                                <?php
                                $mysqli = new mysqli("localhost", "root", "root", "news_commandes");
                                $sql = "SELECT entreprise FROM feuil1";
                                $result = $mysqli -> query($sql);

                                // Numeric array
                                /*$row = $result -> fetch_array(MYSQLI_NUM);*/
                                echo '<select name="entreprise" id="entreprise">';
                                echo  '<option value="">--Choisissez une entreprise svp--</option>';
                                while($row = mysqli_fetch_array($result)) {
                                    echo "<option value='".$row['entreprise']."'>'".$row['entreprise']."'</option>";
                                }
                                echo '</select>';
                                ?>
                            </div>
                            <div class="bottomBox2">
                                <label for="N°DA">Numero DA:</label>
                                <input class="ChampsDA" type="text" name="N°DA" id="N°DA">
                            </div>
                            <div class="bottomBox">
                                <label for="materiels">Materiels:</label>
                                <?php
                                $sql = "SELECT DISTINCT  materiels FROM materiels ORDER BY materiels ASC";
                                $result = $mysqli -> query($sql);
                                echo '<select name="materiels" id="materiels">';
                                echo  '<option value="">--Choisissez le materiel svp--</option>';
                                while($row = mysqli_fetch_array($result)) {
                                    echo "<option value='".$row['materiels']."'>'".$row['materiels']."'</option>";
                                }
                                    echo '</select>';
                                ?>
                            </div>
                            <fieldset>
                                <div class="Primebox">
                                    <div class="sousbox">
                                        <label class="style_checkbox">
                                            <label class="finitions" for="sacoche">Sacoche</label>
                                            <input class="minibox" type="checkbox"  name='Options[]' value="sacoche">
                                            <span class="checkbox"> </span>
                                        </label>
                                    </div>
                                    <div class="sousbox">
                                        <label class="style_checkbox">
                                            <label class="finitions2" for="Ecran">Ecran</label>
                                            <input class="minibox" type="checkbox"  name='Options[]' value="Ecran">
                                            <span class="checkbox"> </span>
                                        </label>
                                    </div>
                                    <div class="sousbox">
                                        <label class="style_checkbox">
                                            <label class="finitions" for="Station">Station</label>
                                            <input class="minibox" type="checkbox"  name='Options[]' value="Station">
                                            <span class="checkbox"> </span>
                                        </label>
                                    </div>
                                </div>
                                <div class="Primebox">
                                    <div class="sousbox">
                                        <label class="style_checkbox">
                                            <label class="finitions" for="Kit_souris/clavier">Kit_souris/clavier</label>
                                            <input class="minibox" type="checkbox"  name='Options[]' value="Kit_souris/clavier">
                                            <span class="checkbox"> </span>
                                        </label>
                                    </div>
                                    <div class="sousbox">
                                        <label class="style_checkbox">
                                            <label class="finitions" for="Adaptateur_RJ45">Adaptateur_RJ45</label>
                                            <input class="minibox" type="checkbox"  name='Options[]' value="Adaptateur_RJ45">
                                            <span class="checkbox"> </span>
                                        </label>
                                    </div>
                                </div>
                            </fieldset>
                            <input class="button " type="submit" name="envoyer" value="Envoyer" >
                        </form>
                    </div>
                </div>
                <div class="bckgnd">
                    <div class="image"></div>
                </div>
            </div>
        </section>
        
    </body>
</html>