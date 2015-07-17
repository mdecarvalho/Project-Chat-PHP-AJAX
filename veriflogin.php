<?php
    session_start();
    require('connexion.php');
    // On démarre la session

    $loginOK = false;  

    // On n'effectue les traitement qu'à la condition que 
    // les informations aient été effectivement postées
    if ( isset($_POST) && (!empty($_POST['login'])) && (!empty($_POST['password'])) ) {


        extract($_POST);  // on verifie chaque clé pour savoir si elle a un nom de variable valide

      // On va chercher le mot de passe correspondant à ce login
      $sql = 'SELECT * FROM user WHERE login="'.$_POST['login'].'" AND password="'.$_POST['password'].'"';

      $req = mysqli_query($connect,$sql) or die('Erreur SQL : <br />'.$sql);

      // On vérifie que l'utilisateur existe bien
      if (mysqli_num_rows($req) > 0) {
         $data = mysqli_fetch_assoc($req);

        // On vérifie que son mot de passe est correct
        if ($password == $data['password']) {
          $loginOK = true;
          $login = $_POST['login'];
          $sql1="update user set status=1 where login='".$login."'";
          $req1=mysqli_query($connect,$sql1); 
        }
      }
    }

    // Si le login a été validé on met les données en sessions
    if ($loginOK) {
        $_SESSION['login'] = $data['login'];
        $_SESSION['statut'] = $data['status'];
        header ('location: index.php'); //redirection vers la page de tchat
    }
    else {
        header ('location: login.php'); //redirection vers la page de login
    }
    mysqli_close($connect);
?>