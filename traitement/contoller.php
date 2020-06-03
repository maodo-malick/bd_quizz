<?php 
 require_once './data/model.php';

 function pageConnexion($post)
 {
     $login=$post['login'];
     $password=$post['password'];

     $result=getUserConnexion($login, $password);
     
        $result_array = $result->fetch();
     if($result_array !== false)
     {

        if($result_array['profil']=="admin")
        {
            require_once './pages/accueil.php';
        }
        else
        {
            require_once './pages/joueur.php';
        }
     }
     else
     {
         echo "error";
     }

 }