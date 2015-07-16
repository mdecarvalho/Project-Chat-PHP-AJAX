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
    ?>
    <a href="deconnexion.php" id="logout">Deconnexion</a>
    <form action="index.php" method="post">
        <section id="message-section">
            <label>
                Pseudo:
                <?php
                   $pseudo = $_SESSION['login'];
                    echo $pseudo;            
                ?>
            </label>
            <textarea rows="4" cols="50" placeholder="Saisissez votre message" id="message"></textarea>
            <INPUT type="submit" name="submit-button" id="submit-button" value="Envoyer">
        </section><!-- message.section -->
    </form>
    <script src="js/jquery.js"></script>
    <script src="js/script.js"></script>
</body>
</html>