<?php

$pseudo = htmlspecialchars($_POST['pseudo']);
$msg = nl2br(htmlspecialchars($_POST['message']));


if(empty($pseudo) AND empty($msg))
{
echo("<p class='error'><center>Veuillez remplir les deux champs !</center></p>");
}
elseif(empty($pseudo) OR empty($msg))
{
    echo("<p class='error'><center>Le champ pseudo ou le champ message n'est pas rempli !</center></p>");
}
elseif(!empty($pseudo) AND !empty($msg))
{
    echo("<p class='error'><center>Le message a été envoyé avec succès !</center></p>");
    $insertMessage = $bdd->prepare('INSERT INTO messages (pseudonyme, msg) VALUES(:pseudo, :msg)');
    $insertMessage->execute(array(':pseudo'=>$pseudo, ':msg'=>$msg));
}


/*echo($bdd->prepare('SELECT * FROM messages'));*/
?>