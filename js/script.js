$(document).ready(function(){
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
        }
        $('#message').val('');
    });
          function charger(){
              setTimeout( function(){
                  // on veut ajouter les nouveaux messages au début du bloc #messages
                  $.ajax({
                  url : "chat.php",
                  type : "POST",
                  success : function(html){
                    $('.chat-container').html(html);  
                     }
                  });
                      
                  $.ajax({
                  url : "display_user.php",
                  type : "POST",
                  success : function(html){
                    $('.users').html(html);  
                    }
                  });
        

        charger(); // on relance la fonction
    }, 1000); // on exécute le chargement toutes les 5 secondes
}  
       charger();    
});

