<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CHAT</title>
    <link rel="stylesheet" type="text/css" href="css/main.css"/> 
</head>
<body>
    <?php
    session_start();
    if($_SESSION['login'] == ''){
        header ('location: login.php');
    }   
    ?>
    <?php 
        require_once("upload_message.php");
        require_once("chat.php");
    ?>

    <a href="deconnexion.php" id="logout">Deconnexion</a>
    <section id="message-section">
        <div>
            <form action="index.php" method="post">
                <label>
                    Pseudo:
                    <?php

                        $nickname = $_SESSION['login'];
                        echo $nickname;            
                    ?>
                </label>
                <textarea rows="4" cols="50" placeholder="Saisissez votre message" id="message" name="message"></textarea>
                <input type="hidden" name="nickname" value="<?php echo $nickname ?>">
                <INPUT type="submit" name="submit-button" id="submit-button" value="Envoyer">
            </form>
        </div>
    </section><!-- message.section -->
    <script src="js/jquery.js"></script>
    <script src="js/script.js"></script>
</body>
</html>