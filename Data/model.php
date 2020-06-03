<?php 
 function getConnexion()
 {
     $objetPDO="";
     try
     {
       $objetPDO =new PDO( 'mysql:host=localhost;dbname=lvdb1;charset=utf8','','');
        $objetPDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        return $objetPDO;
     }
     catch(PDOException $e)
     {
         die('quelques chose d anormal');
     }
 }


function getUserConnexion($login, $password)
{
    $opdo=getConnexion();

    // table utilisateurs
    $sql='SELECT * FROM utilisateurs WHERE login =:login AND password =:password';
    //2emme maniere
   // $sql=('SELECT * FROM utilisateurs WHERE login =? AND password =?')
   $req=$opdo->prepare($sql);

   // ecriture des paramere
   $req->execute(array('login'=>$login, 'password'=>$password ));
   //2eme methode 
   //$req->execute($login,$password);

   
return $req;
}
