<?php
//connecting function to the database
 function Connect_me()
 {
     
     $bdd="";
    
     try {
         
          $bdd= new PDO('mysql mysql:host=localhost;dbname=database_quizz;charset=utf8','root','');
          $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       }
      catch (PDOException $e) {
         die("Oops something went wrong"); 
     }
    
    }   
    //function trying to join the database
    function getting_connected($login,$password)
    {
        $abc=Connect_me();
        $sql='SELECT * FROM utilisateurs WHERE login =:login AND password =:password';
        $requete=$abc->prepare($sql);
        $requete->Execute(array('Login'=>$login,'Password'=>$password));
        return $requete;

    }
    //sending data to the Database
    function Insert_data($Satut,$Avatar,$Nom,$Prenom,$Login,$Password)
    {
        $bdd= Connect_me();
        $sql='INSERT INTO user(ID_user,Avatar,Nom,Prenom,Login,Password) values(:Statut,:Avatar,:Nom,:Prenom,:Login,:Password)';
        $requete=$bdd->prepare($sql);
        $requete->Execute(array('Statut'=>$Satut,'Avatar'=>$Avatar,'Nom'=>$Nom,'Prenom'=>$Prenom,'Login'=>$Login,'Password'=>$Password));
        return $requete;
    }
