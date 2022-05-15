<?php
try{
    $bdd = new PDO('mysql:host=localhost;dbname=messagerie;charset=utf8', 'root', 'Dudul8585!');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
?>