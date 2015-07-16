<?php
// connexion au serveur mysql
$connect = mysqli_connect('localhost', 'root', '')or die ("erreur de connexion serveur");

//selection de la bdd
$bd= mysqli_select_db($connect, 'chat') or die ("erreur de connexion base");
?>
