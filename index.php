<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CHAT</title>
    <link rel="stylesheet" type="text/css" href="css/main.css"/> 
</head>
<body>
    <form action="index.php" method="post">
        <section id="message-section">
            <label>
                Pseudo:
                <?php
                    $pseudo = "test";
                    echo $pseudo;            
                ?>
            </label>
            <textarea rows="4" cols="50" placeholder="Saisissez votre message" id="message"></textarea>
            <INPUT type="submit" name="submit-button" id="submit-button" value="Envoyer">
        </section><!-- message.section -->
    </form>
</body>
</html>