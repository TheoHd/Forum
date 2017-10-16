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
    
    echo "Votre photo de profil a bien été mise à jour ! ";
    echo "Retour à la page du compte dans 3 secondes.";
?>
<meta http-equiv="refresh" content="3;../compte.php" />