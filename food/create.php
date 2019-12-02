<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="img/3.png" />

    <title>Ajout</title>
</head>
<body>
<?php

include 'nav.php';
?>
</div>
<div class="container" style="padding: 20px;">
<div class="jumbotron">

<h3>Nouveau Customer</h3>
</div>
<form method="POST" action="store.php">
  <div class="form-group">
    <label>Name</label>
    <input type="text" class="form-control" name="nom">
  </div>
  <div class="form-group">
    <label>E-mail</label>
    <input type="email" class="form-control" name="email">
  </div>
  <div class="form-group">
    <label>Password</label>
    <input type="password" class="form-control" name="pwd">
  </div>
  <div class="form-group">
    <label>Phone</label>
    <input type="number" class="form-control" name="telephone">
  </div> 
  <div class="form-group">
    <label>Adresse</label>
    <input type="text" class="form-control" name="adresse">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
  <button type="reset" class="btn btn-primary">Annuler</button>
</form>
</div>
</body>
<?php

include 'footer.php';
?>
</html>
