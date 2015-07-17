<?php
    if(!isset($_SESSION))
    {
	   session_start();
    }
    require("connexion.php");

    //requête pour récupérer les 10 derniers messages
    $sql = 'SELECT login_user, message, DATE_FORMAT(date, \'%d/%m/%Y at %Hh %imin %ss\') AS date_fr FROM message ORDER BY date';

    //Envoi de la requête
    $requete = mysqli_query($connect, $sql) or die('Erreur affichage messages <br>'.$sql.'<br>'.mysql_error());

    //Boucle pour afficher les messages 
    while ($donnees = mysqli_fetch_assoc($requete))
    {
        echo '<p><strong>' . htmlspecialchars($donnees['login_user']) . '</strong>  ' . htmlspecialchars($donnees['date_fr']) . ' : ' . htmlspecialchars($donnees['message']) . '</p>';
    }
    mysqli_close($connect);
?>