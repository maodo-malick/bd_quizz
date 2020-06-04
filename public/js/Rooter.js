const form =document.getElementById('form');
const connexion=document.getElementById('connexion');
const inscrire = document.getElementById('sinscrire');

inscrire.addEventListener('click',()=>{
    
    sendData('inscrire',connexion,false);
   
})

form.addEventListener('submit',()=>{

    sendData('Connexion',connexion,true);

})

//action  page que la fonction de doit ouvrir
//contenair c'est ccontainer d"ou la page resultant doit etre affocher 
//is_post si la requette sera envoyer avec un formulaire; 

function sendData(action,content,is_post)
{
    var search= new XMLHttpRequest();
    search.onreadystatechange=()=>
    {
        if((search.readyState==4) && search.status==200)
        {
            let data=search.responseText;
            if(data=="error")
            {
                  alert('Sorry an error is found');
            }
            else
            {
                content.innerHTML=data;
            }
        }
    } 

    var donnee="";
    if(is_post)
    {
        donnee=getFormData();
    }
    search.open('POST',`index.php?action=${action}`,true);
    search.send(donnee);
}

// la function qui va recupéré les données du formulaire

function getFormData()
{
    //connexion-form
    var form=document.getElementById('form');

    // FormData est une fonction JS predefini 
    // on lui passe le id d'un formulaire il recupere tout les données et le place dans une variable

    var donnee=new FormData(form);

   return donnee;
}