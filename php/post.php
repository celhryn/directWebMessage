<?php
include('config/config.php');

$pseudo = htmlspecialchars($_POST['pseudo']);
$message = nl2br(htmlspecialchars($_POST['message']));

if(isset($_POST['valider'])){
if(empty($pseudo) AND empty($message))
{
echo("Veuillez remplir les deux champs !");
}
if(empty($pseudo) OR empty($message))
{
    echo("Le champ pseudo ou le champ message n'est pas rempli !");
}
if(!empty($pseudo) AND !empty($message))
{
    echo("Le message a été envoyé avec succès !");
    $insertMessage = $bdd->prepare("INSERT INTO messages('', pseudo, message) VALUES(NULL, ?, ?)");
    $insertMessage->execute(array($pseudo, $message));
}
