// get DOM elements

    const form =document.getElementById("form");
    const Login=document.getElementById("Login");
    const Nom  =document.getElementById("Nom");
    const Prenom =document.getElementById("Prenom");
    const Password=document.getElementById("Password");
    const Confirmation=document.getElementById("Confirmation");
    const Avatar=document.getElementById("Avatar");





// Functions spaces

function check(InputArray)
{
    InputArray.forEach(input => {
        if(input.value.trim()==='')
        {
            Errorline(input,`${input.id} is required`);
        }
        else{
                Successline(input);
          }
        });
}
function Errorline(input, message) {
    const master =input.parentElement; 
    master.className="form-register error";
    const span =master.querySelector('span');
    span.innerText=message;    
}
function Successline(input)
{
    const master =input.parentElement;
    master.className="form-register success";
}
// 
/*function getfield(input)
{
    return input.id.charAt(0).toUppercase()+input.id.slice(1);
}
}
*/
function Entrylenght(input,min,max) {
        if(input.value.length <min)
        {
            Errorline(input,`${input.id} entry must be at least ${min} characters for security `);
        }
        else if(input.value.length >max)
        {
            Errorline(input,`${input.id} entry must be at inferior at ${max} characters `);
        }
    
} 
//
function Match(input1,input2)
{
if(input1.value.trim()!==input2.value.trim())
{
    Errorline(input2,"didn't match with Password Entry");
}
}




//Events spaces
form.addEventListener('submit',(e)=>{
 
    check([Prenom,Nom,Login,Password,Confirmation]);
    // check Entry lenght
    Entrylenght(Login,5,10);
    Entrylenght(Password,8);
    // check if password is match
    Match(Password,Confirmation);
    ValidPassword(Password);

});
