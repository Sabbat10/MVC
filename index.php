<?php 
    
    //traitement des 

    //Routeur: a pour but de rediriger nos utilisateur vers les bon dossier
   require('cotroler/cotroler.php');

   try {
        if (isset($_GET['page'])) {
            
            if ($_GET['page'] == 'acceuil') {
                    home();

            }elseif ($_GET['page'] == 'avis') {
                homeAvis();
            }else{
                throw new Exception("Cette page n'existe pas ou a été suprimée !");
                
            }   
       }
       else
       {
            home();
       }
       
   } catch (Exception $e) {
       // die('Erreur :'.$e->getMessage());

        $error = $e->getMessage();
        require('view/errorView.php');
   }

   
