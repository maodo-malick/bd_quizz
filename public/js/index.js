//Getting DOM elements
const Login= document.getElementById("Login");
const Password=document.getElementById("Password");
const Confirmation=document.getElementById("Confirmation");
const form=document.getElementById("form");




//Fonctions side
function checker(InputArray)
{
    InputArray.forEach(input => {
        if(input.value.trim()==='')
        {
            Errorcatcher(input,`${input.id} is required`);
        }
        else{
                Successindicator(input);
          }
        });
}
function Errorcatcher(input, message) {
    const master =input.parentElement; 
    master.className="form-connect error";
    const span =master.querySelector('span');
    span.innerText=message;    
}
function Successindicator(input)
{
    const master =input.parentElement;
    master.className="form-connect success";
}
 


//Events placing
form.addEventListener("submit",(e)=>{
   
    checker([Login,Password,Confirmation]);
  
});
