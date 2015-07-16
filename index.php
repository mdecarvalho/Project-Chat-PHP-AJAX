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
    <section id="message-section">
        <div>
            <form action="index.php" method="post">
                <label>
                    Pseudo:
                    <?php
                        $nickname = "test";
                        echo $nickname;            
                    ?>
                </label>
                <textarea rows="4" cols="50" placeholder="Saisissez votre message" id="message" name="message"></textarea>
                <input type="hidden" name="nickname" value="<?php echo $nickname ?>">
                <INPUT type="submit" name="submit-button" id="submit-button" value="Envoyer">
            </form>
        </div>
    </section><!-- message.section -->
</body>
</html>