<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CHAT</title>
    <link rel="stylesheet" type="text/css" href="css/main.css"/> 
</head>
<body>
    <?php 
        require_once("upload_message.php");
    ?>
    <?php 
        require_once("chat.php");
    ?>
    <a href="login.php" id="logout"></a>
    <section id="message-section">
        <div>
            <form action="index.php" method="post">
                <label>
                    Pseudo:
                    <?php
                        session_start();
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