<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title></title>
  </head>
  <body>
	  	<!-- Espace de redirection -->
	  	<div class="jumbotron jumbotron-fluid">
	  		<div align="center" style="margin: 0em 2em 0em 2em;">
		  		<a href="../consult_document/document.php" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true" style="margin: 0 1em 0 1em;">Consulter un document</a>
		  		<a href="../file_deposit/file.php" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true" style="margin: 0 1em 0 1em;">Déposer un dossier</a>
		  		<a href="../pay/pay.php" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true" style="margin: 0 1em 0 1em;">Payer en ligne</a>
		  	</div>
	  	</div>

  	<!-- Espace dépôt de dossiers --> 
	  	<div style="padding: 1em 3em 1em 3em;">
	  		<form>
			  <div class="form-group">
			    <label for="InputFile" style="font-size: 16pt; font-weight: bold;">Donnez un titre à votre dossier</label>
			    <input type="text" class="form-control" id="InputFile" placeholder="Entrer un nom de dossier">
			  </div>
			  <div class="form-group" style="margin-top: 2em;">
				<label for="FormControlFile" style="font-size: 16pt; font-weight: bold;">Ajouter votre fichier ici</label>
				<input type="file" class="form-control-file" id="FormControlFile">
			  </div>
			  <button type="submit" class="btn btn-primary" style="margin-top: 1em;">Envoyer le dossier</button>
			</form>
			<div style="margin-top: 3em;">
				<em style="color: red">Ajouter ici un message via php lors de la validation du formulaire via le bouton submit</em>
			</div>
	  	</div>

  </body>
</html>
