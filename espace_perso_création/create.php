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
        <label for="exampleFormControlSelect1">Civilité</label>
        <select class="form-control" id="exampleFormControlSelect1">
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
          <option>5</option>
        </select>
      </div>
      <div class="form-group">
        <label for="formGroupExampleInput">Nom</label>
        <input type="text" class="form-control" id="formGroupExampleInput">
      </div>
      <div class="form-group">
        <label for="formGroupExampleInput">Prénom</label>
        <input type="text" class="form-control" id="formGroupExampleInput">
      </div>
      <div class="form-group">
        <label for="formGroupExampleInput">Adresse</label>
        <input type="text" class="form-control" id="formGroupExampleInput">
      </div>
      <div class="container-fluid">
        <div class="row">
          <div class="col">
            <div class="form-group">
              <label for="formGroupExampleInput">Code postale</label>
              <input type="text" class="form-control" id="formGroupExampleInput">
            </div>
          </div>
          <div class="col">
            <div class="form-group">
              <label for="formGroupExampleInput">Commune</label>
              <input type="text" class="form-control" id="formGroupExampleInput">
            </div>
          </div>
        </div>
      </div>
      <div class="form-group">
        <label for="formGroupExampleInput">Tel.</label>
        <input type="number" class="form-control" id="formGroupExampleInput">
      </div>
      <div class="form-group">
        <label for="formGroupExampleInput">E.mail</label>
        <input type="email" class="form-control" id="formGroupExampleInput">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Créez votre mot de passe (8 caractères minimum)</label>
        <input type="password" pattern=".{6,}" required title="8 caractères minimum" class="form-control" id="exampleInputPassword1" placeholder="Password">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Confirmation de votre mot de passe</label>
        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
      </div>

    </form>
  </body>
</html>
