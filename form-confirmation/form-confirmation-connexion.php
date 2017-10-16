<?php
    session_start();
    try
    {
        $bdd = new PDO("mysql:host=localhost;dbname=forum","root","");
    }
    catch(Exception $e)
    {
        die("Erreur de connexion");
    }
    
    if(isset($_POST['submit'])) 
    {
        $login = $_POST['login'];
        $mdp = sha1($_POST['mdp']);
        $requete = $bdd->query("SELECT * FROM user WHERE login ='".$login."' AND mdp = '".$mdp."'");        
    
        if($reponse = $requete->fetch())
        {
            $_SESSION['connecte']=true;
            $_SESSION['id']= $reponse['idUtilisateur'];
            $_SESSION['rang'] = $reponse['rang'];
            $_SESSION['log'] = $reponse['login'];
            $_SESSION['email'] = $reponse['email'];
            $_SESSION['avatar'] = $reponse['avatar'];
            header("Location:../index.php");
            die();
        }
        else
        {
            echo "Mauvais identifiant";
        }
    }
?>