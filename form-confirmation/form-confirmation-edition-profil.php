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
    $login = $_POST['login'];
    $prenom = $_POST['prenom'];
    $nom = $_POST['nom'];
    $mdp = sha1($_POST['mdp']);
    $email=$_POST['email'];
    $rang = 1;
    $id = $_SESSION['id'];

    $requete = "UPDATE user SET login ='$login', prenom ='$prenom', nom = '$nom', mdp = '$mdp', email = $email WHERE idUtilisateur = '$id'";
    $requete = $bdd->query($requete);
    
    echo "La mise à jour des données a réussi !<br />"; 
    echo "Retour à la page d'accueil dans 3 secondes."; ?>
<meta http-equiv="refresh" content="3;../index.php" />
<?php   
}
else{
    die("Erreur lors de l'inscription");
}
?>