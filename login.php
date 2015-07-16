   <html>
   <head>
       <script>
       $('#envoi').click(function(e){

    e.preventDefault(); // on empêche le bouton d'envoyer le formulaire


    var login = encodeURIComponent( $('#login').val() ); // on sécurise les données

    var password = encodeURIComponent( $('#password').val() );


    if(login != "" && password != ""){ // on vérifie que les variables ne sont pas vides

        $.ajax({

            url : "veriflogin.php", // on donne l'URL du fichier de traitement

            type : "POST", // la requête est de type POST

            data : "login=" + login + "&password=" + password // et on envoie nos données

        });


    }

});
       </script>
   </head>
    <body>
       
        <form action="verifLogin.php" method="POST">
            <label>Login:</label>
            <input type="name" name="login"/><br>
            <label>password:</label>
            <input type="password" name="password"/><br>
            <input type="submit" value="connexion" id="envoi"/>
        </form>
    </body>
</html>