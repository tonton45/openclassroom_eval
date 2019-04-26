
<?php 
session_start();

if (isset($_POST['pseudo']) AND isset($_POST['message']) ) 
{
	$pseudo = strip_tags($_POST['pseudo']);
	$message = strip_tags($_POST['message']);
	$_SESSION['pseudo-seesion'] = $pseudo;

	try
	{
		$bdd = new PDO('mysql:host=localhost;dbname=test_formation;charset=utf8', 'root', '');
	}
	catch (Exception $e)
	{
	        die('Erreur : ' . $e->getMessage());
	}

	$req = $bdd->prepare('INSERT INTO minichat(pseudo, message, date_message) VALUES(:pseudo, :message, NOW())');
	$req->execute(array(
		'pseudo' => $pseudo,
		'message' => $message,
		));


}

header('Location: minichat.php');

?>


