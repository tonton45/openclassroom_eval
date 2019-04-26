
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
			
		</p>

    </body>
</html>