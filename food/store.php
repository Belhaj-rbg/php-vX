<?php
 include 'dbcnx.php' ;
 $name=$_POST['nom'];
 $email=$_POST['email'] ;
 $pass=$_POST['pwd'];
 $phone=$_POST['telephone'];
 $adr=$_POST['adresse'];

 $cnx -> exec('INSERT INTO client (nom, email, pwd , telephone, adresse) 
 VALUES (  "'.$name.'", "'.$email.'", "'.$pass.'", "'.$phone.'", "'.$adr.'") ');
header("location:index.php");

//modal
//alert.js
/*

$rep=$cnx->prepare
('INSERT INTO client (nom= :param_nom, email= :param_email, pwd= :param_pwd, telephone= :param_telephone, adresse= :param_adresse)');


$rep->bindParam(':param_nom', $name);
$rep->bindParam(':param_email', $email);
$rep->bindParam(':param_pwd', $pass);
$rep->bindParam(':param_telephone', $phone);
$rep->bindParam(':param_adresse', $adr);
$rep->execute();*/
header("location:index.php");