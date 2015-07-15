<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CHAT</title>
</head>
<body>
    <form action="index.php" method="post">
        <label>
            Pseudo:
            <?php
                $pseudo = "test";
                echo $pseudo;            
            ?>
            <input type="text" name="chat-message"  maxlength="500">
            <INPUT type="submit" name="submit-button" id="submit-button" value="Envoyer">
        </label>
    </form>
</body>
</html>