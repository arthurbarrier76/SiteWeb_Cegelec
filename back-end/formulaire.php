
<?php
if ( (isset($_POST['envoyer'])))	
{


    //on teste si tous les champs du formulaire sont remplits
    if ((!empty($_POST['entreprise'])) && (!empty($_POST['materiels']))	)
    {

        $mysqli = new mysqli("localhost", "root", "root", "news_commandes");

        if($mysqli === false)
        {
           die("ERREUR : connexion impossible ! " . $mysqli->connect_error);      
        }
        $variable = "";
        
    
            if (!empty($_POST['Options'])) {
                
                foreach($_POST['Options'] as $value){
                    $variable = $value." + ".$variable ;
                   
                }
            }
            
        
        
        $sql = "INSERT INTO feuil1 (Num_com,N°DA,entreprise,materiels,Options) VALUES (NULL ,'".$_POST['N°DA']."', '".$_POST['entreprise']."', '".$_POST['materiels']."','".$variable."')";

        if($mysqli->query($sql) === true)
        {
            echo "enregistrement inséré avec succes";
        }
        else 
        {
            echo "ERREUR impossible d'executer $sql. " .$mysqli->error;
        }
    }

      
}


?>


<meta http-equiv="refresh" content="0; url=formulaires.php" />

