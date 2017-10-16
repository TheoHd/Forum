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
if (isset($_POST['submit']))
{
        $contenuPost = $_POST['contenu'];
        $id_u = $_SESSION['id'];
        $id_t = $_POST['idget'];
        $auteur = $_SESSION['log'];

    // var_dump($contenuPost, $id_u, $id_t, $auteur);
    // exit();
    $bdd->exec("INSERT INTO post(contenuPost, auteur, idUtilisateur, idTopic) VALUES 
    (".$contenuPost."','".$auteur."','".$id_u."','".$id_t."')");
    echo "L'ajout du commentaire a bien été effectuée<br />"; 
    echo "Retour à la page d'accueil dans 3 secondes.";
    echo '<meta http-equiv="refresh" content="3;../topic.php?id='.$id_t.'" />';
}
else{
    die("Erreur lors de l'inscription");
}
?>