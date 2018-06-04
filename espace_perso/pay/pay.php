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

	<!-- Espace paiement --> 
		<div style="margin: 2em 3em 1em 3em;">
			<form>
			   <div class="form-group">
			   	 <h3>Objet du réglement</h3>
			     <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Entrez ici l'objet de votre réglement"></textarea>	
			  </div>
			  <h3 style="margin-top: 1.5em;">Réglement par carte bancaire</h3>
			  <div class="form-group row">
			    <label for="inputname" class="col-sm-2 col-form-label">Nom</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" id="inputName" placeholder="Veuillez entrer votre nom">
			    </div>
			  </div>
			  <div class="form-group row">
			    <label for="inputAmount" class="col-sm-2 col-form-label">Montant</label>
			    <div class="col-sm-5">
			      <input type="text" class="form-control" id="inputAmount" placeholder="montant de la transaction">
			    </div>
			  </div>
			  <div class="form-group row">
			    <label for="inputAccount" class="col-sm-2 col-form-label">N° de compte</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" id="inputAccount" placeholder="Veuillez entrer le numéro de votre compte">
			    </div>
			  </div>
			  <div class="form-group row">
			    <div class="form-group col-sm-4">
			      <label for="inputDate" class="col-form-label">Date d'expiration</label>
			      <input type="text" class="form-control" id="inputDate" placeholder="dd/mm/yyyy">
			    </div>
			    <div class="form-group col-sm-4">
			      <label for="inputCode" class="col-form-label">Code à 3 chiffres</label>
			      <input type="password" class="form-control" id="inputCode" placeholder="Code">
			    </div>
			  </div>
			  <button type="submit" class="btn btn-primary">Valider la transaction</button>
			</form>
		</div>

  </body>
</html>
