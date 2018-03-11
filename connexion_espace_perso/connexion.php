<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title></title>
  </head>
  <body>
    <form>
      <div class="form-group">
        <label for="exampleInputEmail1">Votre identifiant email</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Votre mot de passe (6 caractères minimum)</label>
        <input type="password" pattern=".{6,}" required title="6 caractères minimum" class="form-control" id="exampleInputPassword1" placeholder="Password">
        <div>
          Vous avez oublié votre mot de passe : <a href="#">Cliquez ici</a>
        </div>
      </div>
      <button type="submit" class="btn btn-primary">Connexion</button>
    </form>
  </body>
</html>
