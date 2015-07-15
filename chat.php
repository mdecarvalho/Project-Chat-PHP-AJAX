<?php
//requête pour récupérer les 10 derniers messages
$requete = $bdd->query('SELECT login, message, DATE_FORMAT(date, \'%d/%m/%Y à %Hh%imin%ss\') AS date_fr FROM message ORDER BY ID DESC LIMIT 0, 10');

//Boucle pour afficher les messages 
while ($donnees = $requete->fetch())
{
	echo '<p><strong>' . htmlspecialchars($donnees['login']) . '</strong> le ' . htmlspecialchars($donnees['date_fr']) . ': ' . htmlspecialchars($donnees['message']) . '</p>';
}

$requete->closeCursor();