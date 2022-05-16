<?php


$pseudo = htmlspecialchars($_POST['pseudo']);
$msg = nl2br(htmlspecialchars($_POST['message']));


if(empty($pseudo) AND empty($msg))
{
echo("Veuillez remplir les deux champs !");
}
elseif(empty($pseudo) OR empty($msg))
{
    echo(" Le champ pseudo ou le champ message n'est pas rempli !");
}
elseif(!empty($pseudo) AND !empty($msg))
{
    echo("Le message a été envoyé avec succès !");
    $insertMessage = $bdd->prepare('INSERT INTO messages (pseudonyme, msg) VALUES(:pseudo, :msg)');
    $insertMessage->execute(array(':pseudo'=>$pseudo, ':msg'=>$msg));
}



?>