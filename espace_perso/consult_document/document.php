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

	<!-- Espace de gestion des dossiers -->
	  	<div style="margin: 1em 3em 1em 3em;">
	  		<table class="table table-striped" style="background-color: white;">
			  <thead>
			    <tr>
			      <th scope="col">Date</th>
			      <th scope="col">Libellé du document</th>
			      <th scope="col">Lien</th>
			    </tr>
			  </thead>
			  <tbody>
			    <tr>
			      <th scope="row">10/02/2015</th>
			      <td>Titre 1</td>
			      <td><button type="button" class="btn btn-secondary btn-sm">PDF</button></td>
			    </tr>
			    <tr>
			      <th scope="row">20/10/2015</th>
			      <td>Titre 2</td>
			      <td><button type="button" class="btn btn-secondary btn-sm">PDF</button></td>
			    </tr>
			    <tr>
			      <th scope="row">30/10/2016</th>
			      <td>Titre 3</td>
			      <td><button type="button" class="btn btn-secondary btn-sm">PDF</button></td>
			    </tr>
			  </tbody>
			</table>
	  	</div>

  </body>
</html>
