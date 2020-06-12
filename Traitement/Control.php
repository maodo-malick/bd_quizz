<?php 
session_start();
 require_once './Data/Config.php';
 function pageConnexion($post)
 {
     $Login=$post['Login'];
     $Password=$post['Password'];

     $result=getting_connected($Login, $Password);
     if($result !== null)
     {

        $_SESSION ['userConnect']= $result;
        $reference=$result ["Profile"];
        echo $reference;
       
     }
     else{
          echo " Sorry your connexion's data doesn't match any reference";
     }

     
 }
 function deconnection(){
    //Destruction des données utlisateur
    session_destroy();
    unset( $_SESSION['userConnect']);
     echo "logout";
 }

 function Connected(){
     if(isset($_SESSION['userConnect']))
     {
         return true;
     }
     else{
        return false;
     }
 }
      