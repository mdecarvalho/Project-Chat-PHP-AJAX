<?php
//requête pour récupérer les 10 derniers messages
$sql = 'SELECT login, message, DATE_FORMAT(date, \'%d/%m/%Y à %Hh%imin%ss\') AS date_fr FROM message, user WHERE user.id_user=message.id_user LIMIT 0, 10';

//Envoi de la requête
$requete = mysql_query($sql) or die('Erreur affichage messages <br>'.$sql.'<br>'.mysql_error());

//Boucle pour afficher les messages 
while ($donnees = mysql_fetch_assoc($requete))
{
	echo '<p><strong>' . htmlspecialchars($donnees['login']) . '</strong> le ' . htmlspecialchars($donnees['date_fr']) . ': ' . htmlspecialchars($donnees['message']) . '</p>';
}

mysql_close();