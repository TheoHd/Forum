<?php session_start();
try
	{
		$bdd = new PDO("mysql:host=localhost;dbname=forum;charset=utf8","root","");
	}
	catch(Exception $e)
	{
		die("Erreur de connexion");
	} 
$elemParPage = 8;
$topicTotalReq = $bdd->query("SELECT idTopic from topic");
$topicTotal = $topicTotalReq->rowCount();
$pagesTotales = ceil(($topicTotal) - 3);
if(isset($_GET['page']) AND !empty($_GET['page']) AND $_GET['page'] > 0 AND $_GET['page'] <= $pagesTotales)
{
	$_GET['page'] = intval($_GET['page']);
	$pageCourante = $_GET['page'];
}
else{
	$pageCourante = 1;
}
$depart =($pageCourante-1)*$elemParPage;

?>