<?php
include('html/form.php');
include('config/config.php');

if(isset($_POST['pseudo']) AND isset($_POST['message'])){
    include('php/post.php');
}

$recupMessages = $bdd->query('SELECT * FROM messages'); 

?>

<div class="message">
    <p>
        <?php
            echo("$recupMessages")
        ?>
    </p>
</div>

