<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CHAT</title>
    <link rel="stylesheet" type="text/css" href="css/main.css"/> 
</head>
<body>
    <?php
        // on teste les données du formulaire
        if (isset($_POST['nickname']) && isset($_POST['message'])) {
            // envoie du message sur la bdd
            date_default_timezone_set('UTC');
            $date= date();
            echo $date;
            $sql = "INSERT INTO message (message, date, login) VALUES ('$message','$date','$login')";
            mysql_query($sql) or die('Erreur d\'envoye de message'); 
        }
    ?>
    <form action="index.php" method="post">
        <section id="message-section">
            <label>
                Pseudo:
                <?php
                    session_start();
                   $pseudo = $_SESSION['login'];
                    echo $pseudo;            
                ?>
            </label>
            <textarea rows="4" cols="50" placeholder="Saisissez votre message" id="message"></textarea>
            <INPUT type="submit" name="submit-button" id="submit-button" value="Envoyer">
        </section><!-- message.section -->
    </form>

    <?php 
        require_once("upload_message.php");
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