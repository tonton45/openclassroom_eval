<?php 
session_start();
if (isset($_SESSION['pseudo-seesion']))  {
	$pseudo=$_SESSION['pseudo-seesion'];
} else {
	$pseudo="";
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Ma page web</title>
    </head>
    <body>
        <h1>Minichat</h1>
        <p>
	        <form method="post" action="minichat_post.php">
	   			<p>
			       <label for="pseudo">Votre pseudo : </label><input type="text" name="pseudo" id="pseudo" value="<?php echo $pseudo ; ?>"/><br />
			       <label for="pseudo">Votre message : </label><input type="text" name="message" id="message" /><br />
			       <input type="submit" value="Envoyer" />
			   </p>
			</form>
		</p>

		<h2>Les messages : </h2>

		<p>
			
<?php 

// Sous WAMP (Windows)
$bdd = new PDO('mysql:host=localhost;dbname=test_formation;charset=utf8', 'root', '');
// Si tout va bien, on peut continuer

// On récupère tout le contenu de la table jeux_video
$reponse = $bdd->query('SELECT pseudo, message, DATE_FORMAT(date_message, "%d/%m/%Y %Hh %imin %ss") AS date FROM minichat ORDER BY ID DESC LIMIT 0, 10 ');

// On affiche chaque entrée une à une
while ($donnees = $reponse->fetch())
{
?>
    [<?php echo $donnees['date']; ?>] <strong> <?php echo $donnees['pseudo']; ?></strong> : <?php echo $donnees['message']; ?><br />
<?php
}

$reponse->closeCursor(); // Termine le traitement de la requête

?>



		</p>

    </body>
</html>