<?php
    if(!isset($_SESSION))
    {
	   session_start();
    }
    require("connexion.php");

    //requête pour récupérer les 10 derniers messages
    $sql = 'SELECT login_user, message, DATE_FORMAT(date, \'%d/%m/%Y at %Hh %imin %ss\') AS date_fr FROM message ORDER BY date DESC LIMIT 10';
    //Envoi de la requête
    $requete = mysqli_query($connect, $sql) or die('Erreur affichage messages <br>'.$sql.'<br>'.mysql_error());

    //stockage dans tableau puis inversion pour avoir les 10 derniers messages
    $tab = array();
    while ($donnees = mysqli_fetch_assoc($requete)){
        $tab[] = array('login_user' => $donnees['login_user'], 'date_fr' => $donnees['date_fr'], 'message' => $donnees['message']);
    }
    $tab = array_reverse($tab);

    //Boucle pour afficher les messages 
    foreach($tab as $cle => $arr){
        echo '<p><strong>' . htmlspecialchars($arr['login_user']) . '</strong>  ' . htmlspecialchars($arr['date_fr']) . ' : ' . htmlspecialchars($arr['message']) . '</p>';
    }

    mysqli_close($connect);
?>