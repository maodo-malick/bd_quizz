<?php
 define("WEBROOT","http://localhost/database_quizz");
   define("ACTION","action");
  require_once("./Traitement/Control.php");
  require_once("./Data/Config.php");
if(isset($_GET[ACTION]))
{


    if($_GET[ACTION]=='Connexion')
    {
          //Traitement de connexion
          pageConnexion($_POST);
    }
    else if($_GET[ACTION]=='inscription')
    {
        require_once './Pages/registration.php';
    }elseif($_GET[ACTION]=="Admin"){
        
        if(Connected()){
           
            if(isset($_GET["page"])){
              
                if($_GET["page"]=="showJoueur"){
                    //Chargement de la liste des Joueurs
                    require_once './pages/admin/liste_joueur.php';
                }elseif($_GET["page"]=="addQuestion"){
                    //Chargement de la Vue qui permet d'ajouter des Questions
                    require_once './pages/admin/question.php';
                }
                
            }else{
                //Vue Admin charger par défaut
                require_once './pages/Admin_side.php';
            }
        }else{
            //Page de Connexion
            require_once './Pages/Midle.php'; 
        }
        
    }elseif($_GET[ACTION]=="joueur"){
        if(Connected()){
            require_once './Pages/Joueur.php';
        }
      
  } elseif($_GET[ACTION]=="deconnexion"){
          //Traitement de Deconnexion
           deconnection();
    }
}
else
{

        require_once './Pages/Midle.php';
}


?>