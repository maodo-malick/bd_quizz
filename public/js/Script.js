const URL_ROOT="index.php?action";

$(function(){
     
    
     const $btn_deconnexion=$("#btn_deconnexion")
   //Traitement de la Connexion 
   $("#form").submit((event)=>{ 
            event.preventDefault();
            $form =$("#form");
            url = $form.attr("action" );
            //Faire ici la Validation du Formulaire

            $.post(url,  $form.serialize() ,
               function(data, Statut){
                     if(data.trim()!="error"){
                        window.location.replace(`${URL_ROOT}=${data}`)
                     }else{
                        $error_message.show();
                     }
               // 
              });     
    })
    //Page d'inscription du Joueur
    $("#inscription").on("click",function(){
          //Chargent de la vue Inscription dans le fichier layout.php
      const container=$("#center"); 
        container.load(`${URL_ROOT}=inscription`);
    })

    //Traitement de Déconnexion
    $btn_deconnexion.on("click",()=>{
      $.get(`${URL_ROOT}=deconnexion`, (data, status)=>{
               window.location.replace("index.php")
          });
    })


    //Traitement au niveau du Menu Admin
/*
    $(".nav-link").on("click",function(){
       //Récuperation du lien sur lequel l'admin à cliquer
           $lien_encour=$(this);
      //Récuperation de l'url sauvegarder dans l'attribut lien
           const url= $lien_encour.attr("lien");
      //Récuperation de la partie droite de la page layout_admin.php      
           const $container=$("#container-admin"); 
           //Vider le Condenu avant de Faire le Load
             $container.html("")
             $container.load(`${url}`);

})
*/
     

  
});