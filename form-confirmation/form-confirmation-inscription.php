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

    $bdd->exec("INSERT INTO user(login, prenom, nom, mdp, email, rang) VALUES 
    ('".$login."', '".$prenom."', '".$nom."', '".$mdp."', '".$email."', '".$rang."')");
    echo "L'inscription a réussi ! Vous êtes désormais inscrit ! <br />"; 
    echo "Retour à la page d'accueil dans 3 secondes."; ?>
<meta http-equiv="refresh" content="3;../index.php" />
<?php	
}
else{
    die("Erreur lors de l'inscription");
}
?>