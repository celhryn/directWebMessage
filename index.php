<?php
$bdd = new PDO('mysql:host=localhost;dbname=messagerie;charset=utf8', 'root', 'root');
if(isset($_POST['envoyer'])){
    if(!empty($_POST['pseudonyme']) AND !empty($_POST['message']) ){
        $pseudo = htmlspecialchars($_POST['pseudonyme']);
        $message = nl2br(htmlspecialchars($_POST['message']));

        $insertMessage = $bdd->prepare('INSERT INTO messageStore(pseudonyme, message) VALUES(?, ?)');
        $insertMessage->execute(array($pseudo, $message));
    }
else{
    echo "Veuillez compléter tous les champs (sans exception) !";
    }
}
?>

<!DOCTYPE html>
<html>
    <title>Messagerie v0.0</title>
    <meta charset="utf-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body>
    <form method="POST" action="" align="center">
        <input type="text" name="pseudonyme">
        <br><br>
        <textarea name="message"></textarea>
        <br>
        <input type="submit" name="envoyer">
    </form>
    <section id="messageStore"></section>

    <script>
        setInterval('chargement_messages()', 100);
        function chargement_messages(){
            $('#messages').load('chargementMessage.php');
        }
    </script>

</body>
</html>
