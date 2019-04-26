
<?php 
session_start();

if (isset($_POST['pseudo']) AND isset($_POST['message']) ) 
{
	$pseudo = strip_tags($_POST['pseudo']);
	$message = strip_tags($_POST['message']);
	$_SESSION['pseudo-seesion'] = $pseudo;



}

header('Location: minichat.php');

?>


