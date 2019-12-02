<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="img/3.png" />
    <title>Customer</title>

</head>
<body>
<?php

include 'nav.php';
?>
</div>
<div class="container" style="padding: 20px;">
<div class="jumbotron">
    <h1>Liste des Customer</h1>
</div>
<a class="btn btn-primary" href="create.php">Nouveau Customer</a>
<br>

<table class="table table-striped">
    <h3>Info des Customer</h3>
 <tr>
    <td>Id</td>
    <td>Name</td>
    <td>Email</td>
    <td>Password</td>
    <td>Phone</td>
    <td>Adress</td>
   </tr>
   <?php 
   include 'dbcnx.php';
   $reponse = $cnx->query('SELECT * FROM `client`'); 
   while ($donnees = $reponse->fetch()) 
      {
          echo '<tr>';
          echo '<td>'.$donnees['cid'].'</td>';
          echo '<td>'.$donnees['nom'].'</td>';
          echo '<td>'.$donnees['email'].'</td>';
          echo '<td><p hidden>'.$donnees['pwd'].'</p></td>';
          echo '<td>'.$donnees['telephone'].'</td>';
          echo '<td>'.$donnees['adresse'].'</td> ';
        
         
          echo '</tr>';
      }


  ?>
    
</table>
</div>
</body>
<?php

include 'footer.php';
?>
</html>