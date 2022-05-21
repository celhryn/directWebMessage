<?php
include('html/post.php');
include('config/config.php');

if(isset($_POST['pseudo']) AND isset($_POST['message'])){

        include('php/post.php');
}
?>

<?php $recupMessages = $bdd->query('SELECT * FROM messages'); ?>

<div class="message">
        <br><br>
        <b><?php echo($pseudo); ?></b>
        <p><?php echo($message); ?></p>
        <br><br>
    </div>
