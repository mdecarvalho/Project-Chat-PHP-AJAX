<?php
    if(!isset($_SESSION))
    {
	   session_start();
    }
    // on teste les données du formulaire message
    if (isset($_POST['message'])) {
        // envoie du message sur la bdd
        require("connexion.php");
        $date = date("Y-m-d H:i:s");
        $message = mysqli_real_escape_string($connect, $_POST['message']);
        $nickname = mysqli_real_escape_string($connect, $_SESSION['login']);
        $sql = "INSERT INTO message (id_message, message, date, login_user) VALUES ('','".$message."','".$date."','".$nickname."')";
        mysqli_query($connect, $sql) or die('Erreur d\'envoi de message');
        mysqli_close($connect);
    }
?>