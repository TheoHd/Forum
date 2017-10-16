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
    if(isset($_POST['categorie'])){
        $titre = $_POST['titre'];
        $desc = $_POST['desc'];
        $categorie = $_POST['categorie'];
        $rang = $_SESSION['rang'];
        $id_u = $_SESSION['id'];
        $auteur = $_SESSION['log'];
    }

    $bdd->exec("INSERT INTO topic(nomTopic, descTopic, idCategorie, rang, idUtilisateur, auteur) VALUES 
    ('".$titre."', '".$desc."', '".$categorie."','".$rang."','".$id_u."','".$auteur."')");
    echo "L'ajout du topic a bien été effectuée<br />"; 
    echo "Retour à la page d'accueil dans 3 secondes."; ?>
<meta http-equiv="refresh" content="3;../index.php" />
<?php	
}
else{
    die("Erreur lors de l'inscription");
}
?>