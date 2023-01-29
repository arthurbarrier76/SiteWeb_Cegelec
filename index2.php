<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css2?family=Koulen&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300;400&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&family=Roboto+Condensed:wght@300;400&display=swap" rel="stylesheet">
        <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
        <link rel="shortcut icon" href="cegelec-logo.png" type="image/png">
        <link rel="stylesheet" href="styletab.css">
      
        <title>Page_Tableau</title>
    </head>

    <nav>
        <div class="titre-vinci">
            <img src="https://th.bing.com/th/id/OIP.nvx7_0eSXWUhC0gFhhkRvgAAAA?pid=ImgDet&rs=1" width="150" height="60"> 
             <p> Cegelec Nord Tertiaire</p>
        </div>
        <div class="navbar">
            <ul>
                 <li><a href="accueil.php" class="slide-line">Accueil</a></li>
                 <li><a href="" class="slide-line">Commandes</a> </li>
                 <li><a href="formulaires.php" class="slide-line">Formulaire</a></li>
            </ul>
        </div>
    </nav>
    <body>
        <div class="boxsearch">
            <input class="zoneSaisie" type="text" placeholder="Entrer le nom de l'entreprise" id="maRecherche" onkeyup="filtrer()">
        </div>
        <div class="container">
            <table class="tableau" id="tableau">
                <form method="post">
                    <?php
                        $mysqli = new mysqli("localhost", "root", "root", "news_commandes");
                        // On récupère les désignations des prestations :
                        $sql="SELECT * FROM feuil1 ORDER BY Num_com DESC " ;
                        $result= $mysqli->query($sql) ;
                    ?>
                    
                    <thead>
                        <?php
                            echo "<tr><td>Numero_commandes</td><td>N°DA</td><td>Entreprise</td><td>materiels</td><td>Options</td><td>Supprimer</td></tr> ";
                        ?>
                    </thead>
                    <tbody>
                        <?php
                            while ($row=mysqli_fetch_assoc($result)) {
                                echo "<tr><td>{$row['Num_com']} </td><td>{$row['N°DA']}</td><td class='entreprise'>{$row['entreprise']}</td><td> {$row['materiels']}</td><td> {$row['Options']} </td><td> <input class='button2' name='supprimer' type='submit' value={$row['Num_com']}>";
                                        
                                }
                            echo "</table>";
                                
                            if (isset($_POST['modifier'])) #On a cliqué sur le premier bouton
                            {
                                include ("modifier.php");
                                    
                                    
                            }
                            elseif (isset($_POST['supprimer'])) #On a cliqué sur le second bouton
                            {
                                include('supprimer.php'); #On appelle la page 2
                            }
                        ?>
                    </tbody>
                </form>       
            </table>
        </div>
       
    </body>

    <script>
        function filtrer()
        {
            var filtre, tableau, ligne, cellule, i, texte;

            filtre = document.getElementById("maRecherche") .value.toUpperCase();
            tableau = document.getElementById("tableau");
            ligne = tableau.getElementsByTagName("tr");

            for (i = 0; i < ligne.length; i++)
            {
                     else{
                        ligne[i].style.display = "none";
                    }
                }
            cellule = ligne[i].getElementsByTagName("td")[1];

            if(cellule){
                texte = cellule.innerText;
                if (texte.toUpperCase().indexOf(filtre) > -1)
                {
                    ligne[i].style.display = "";
                }
            }
        }
    </script>
</html>     
         