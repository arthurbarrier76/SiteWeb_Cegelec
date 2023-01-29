<?php
session_start();
if(isset($_POST['username']) && isset($_POST['passworde']))
{
    // connexion à la base de données
   
    $mysqli = new mysqli("localhost", "root", "root", "news_commandes");
       
    
    // on applique les deux fonctions mysqli_real_escape_string et htmlspecialchars
    // pour éliminer toute attaque de type injection SQL et XSS
    $username = mysqli_real_escape_string($mysqli,htmlspecialchars($_POST['username'])); 
    $passworde = mysqli_real_escape_string($mysqli,htmlspecialchars($_POST['passworde']));
    
    if($username !== "" && $passworde !== "")
    {
        $requete = "SELECT count(*) FROM utilisateurs where 
              username = '".$username."' and passworde = '".$passworde."' ";
        $exec_requete = $mysqli->query($requete);
        $reponse      = mysqli_fetch_array($exec_requete);
        $count = $reponse['count(*)'];
        if($count!=0) // nom d'utilisateur et mot de passe correctes
        {
           $_SESSION['username'] = $username;
           header('Location: accueil.php');
        }
        else
        {
           header('Location: index.php?erreur=1'); // utilisateur ou mot de passe incorrect
        }
    }
    else
    {
      header('Location: index.php?erreur=2'); // utilisateur ou mot de passe vide
    }
}
else
{
   header('Location: index.php');
   
}
//mysqli_close($db); // fermer la connexion
?>