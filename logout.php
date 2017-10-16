
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
        session_destroy();
        $_SESSION['connecte'] = false;
        echo " <div class='container'> <p>Déconnexion réussie, retour à la page d'accueil dans 3 secondes.</p></div>";
    ?>
    <meta http-equiv="refresh" content="3;index.php" />

