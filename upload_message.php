<?php
        // on teste les données du formulaire message
        if (isset($_POST['nickname']) && isset($_POST['message'])) {
            // envoie du message sur la bdd
            require("connexion.php");
            date_default_timezone_set('UTC');
            $date = date("Y-m-d H:i:s");
            $message = htmlspecialchars(mysqli_real_escape_string($connect, $_POST['message']));
            $nickname = htmlspecialchars(mysqli_real_escape_string($connect, $_POST['nickname']));
            $sql = "INSERT INTO message (id_message, message, date, login_user) VALUES ('','".$message."','".$date."','".$nickname."')";
            mysqli_query($connect, $sql) or die('Erreur d\'envoi de message');
            mysqli_close($connect);
        }
?>