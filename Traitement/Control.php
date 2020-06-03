<?php 
 require_once './data/config.php';

 function pageConnexion($post)
 {
     $Login=$post['Login'];
     $Password=$post['Password'];

     $result=Connect_me($Login, $Password);
     
        $result_array = $result->fetch();
     if($result_array !== false)
     {

        if($result_array['ID_user']=="Admin")
        {
            require_once './pages/Admin_side.php';
        }
        else
        {
            require_once './pages/joueur.php';
        }
     }
     else
     {
         echo "Sorry your connexion's data doesn't match any reference ";
     }

 }