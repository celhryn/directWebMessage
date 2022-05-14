<?php
    $bdd = new PDO('mysql:host=localhost;dbname=messagerie;charset=utf8', 'root', 'root');
    $recupMessages = $bdd->query('SELECT * FROM messages');
    while($message = $recupMessages->fetch())
?>
    <div class="message">
        <?php
            echo($message['pseudonyme'])
            echo($message['message'];)
        ?>
    </div>