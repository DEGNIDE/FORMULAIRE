
     
<?php
     if(isset($_POST['valider']))
     {   /*verifier que les autres champs ont été remplis*/
        if(isset($_POST['user_name']) AND isset($_POST['user_email']) AND isset($_POST['user_message']))
        {    /* on va vérifier aussi par la methode empty*/
           if(!empty($_POST['user_name']) AND !empty($_POST['user.email']) AND !empty($_POST['user.message']))
           { /* on va maintenant recupérer et filtrer les saisies de l'utilisateur pour éviter les codes malveillants
            en utlisant des methodes php a l'aide de htmlspecialchars*/
            $name=htmlspecialchars($_POST['user.name']);
            $name=htmlspecialchars($_POST['user.email']);
            $name=htmlspecialchars($_POST['user.message']);
           /* toutes les vérifications étant faites, nous pouvons personnaliser la réponse à l'utilisateur*/

echo "Bonjour $name.Merci pour votre message et nous vous repondons au plus vite.";

           }
        }

     }
?>