<?php 
session_start();
try
{
    $bdd = new PDO("mysql:host=localhost;dbname=blog","root","");
}
catch(Exception $e)
{
    die("Erreur de connexion");
}
if (isset($_POST['submit']))
{
    $login=$_POST['login'];
    $mdp = sha1($_POST['mdp']);
    $email=$_POST['email'];
    $rang = 2;

    $bdd->exec("INSERT INTO user(login, mdp, email, rang) VALUES 
    ('".$login."', '".$mdp."', '".$email."', '".$rang."')");
    echo "L'inscription a réussi ! Vous êtes désormais inscrit ! <br />"; 
    echo "Retour à la page d'accueil dans 3 secondes."; ?>
<meta http-equiv="refresh" content="3;index.php" />
<?php	
}
else{
    die("Erreur lors de l'inscription");
}
?>