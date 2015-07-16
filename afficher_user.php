<?php
//redirection vers la connexion à la base
require('connexion.php');
// Selectionner tous les utilisateurs connctés
$sql= "SELECT login FROM user";
$req = mysqli_query($connect,$sql) or die('Erreur SQL : <br />'.$sql);

?>