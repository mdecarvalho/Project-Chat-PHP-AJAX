<?php
//redirection vers la connexion à la base
require('connexion.php');
// Selectionner tous les utilisateurs connectés
$sql= "SELECT * FROM `user` WHERE status=1";
$req = mysqli_query($connect,$sql) or die('Erreur SQL : <br />'.$sql);
while ($data = mysqli_fetch_assoc($req))
{
	echo '<p><strong>' . htmlspecialchars($data['login']) . '</strong> ';
}

?>