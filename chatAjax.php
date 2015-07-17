<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CHAT</title>
    <link rel="stylesheet" type="text/css" href="css/main.css"/> 
    <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
      <script>
            $('#submit-button').click(function(e){
                e.preventDefault(); // on empêche le bouton d'envoyer le formulaire
            // on sécurise le message
            var message = encodeURIComponent( $('#message').val() );
            if(message != ""){ // on vérifie que le message n'est pas vide
            $.ajax({
                url : "upload_message.php", // on donne l'URL du fichier de traitement
                type : "POST", // la requête est de type POST
                data : "&message=" + message // et on envoie le message
            });
           $('#messages').append("<p>" + message + "</p>"); // on ajoute le message dans la zone prévue
        }
    });
          function charger(){
              setTimeout( function(){
                  // on lance une requête AJAX
                  $.ajax({
                  url : "chat.php",
                  type : "POST",
                  success : function(html){
                $('#messages').prepend(html); // on veut ajouter les nouveaux messages au début du bloc #messages
            }
        });

        charger(); // on relance la fonction
    }, 5000); // on exécute le chargement toutes les 5 secondes
}  
       charger();
      </script>
</head>
<body>
    <?php
        session_start();
        if($_SESSION['login'] == ''){
            header('location: login.php');
        }
    ?>
    <div id="messages">
    <?php
        require_once("upload_message.php");
        require_once("chat.php");
    ?>
    </div>
    <a href="deconnexion.php" id="logout">Deconnexion</a>
    <form action="chatAjax.php" method="post">
        <section id="message-section">
            <label>
                Pseudo:
                <?php
                   $login = $_SESSION['login'];
                    echo $login;            
                ?>
            </label>
            <textarea rows="4" cols="50" placeholder="Saisissez votre message" name="message" id="message"></textarea>
            <input type="submit" name="submit-button" class="submit-button" id="submit-button" value="Envoyer">
        </section><!-- message.section -->
    </form>
    <script src="js/jquery.js"></script>
    <script src="js/script.js"></script>
</body>
</html>