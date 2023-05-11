<?php
if ( (isset($_POST['creer'])))	
{


    //on teste si tous les champs du formulaire sont remplits
    if ((!empty($_POST['username'])) && (!empty($_POST['passworde']))	)
    {

        $mysqli = new mysqli("localhost", "root", "root", "news_commandes");

        if($mysqli === false)
        {
           die("ERREUR : connexion impossible ! " . $mysqli->connect_error);      
        }
        
        
        
        $sql = "INSERT INTO utilisateurs (username,passworde) VALUES ('".$_POST['username']."','".$_POST['passworde']."')";

        if($mysqli->query($sql) === true)
        {
            
            
            echo "<script>alert(\"Enregistrement effectué avec succès\")</script>";
            
            


        }
        else 
        {
            echo "ERREUR impossible d'executer $sql. " .$mysqli->error;
        }
    }

      
}


?>
<meta http-equiv="Refresh" content="0; url=index.php" />