<?php
    try {
        $cnx = new PDO('mysql:host=localhost;dbname=resto', 'root', '');
    } catch (Exception $e) {
        echo 'Erreur: '.$e;
    }
