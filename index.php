<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CHAT</title>
    <link rel="stylesheet" type="text/css" href="css/main.css"/> 
</head>
<body>
    <?php require_once("chat.php");
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
    
</body>
</html>