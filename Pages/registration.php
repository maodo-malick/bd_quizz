<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="../public/css/registration.css">
</head>
<body>
    <div class="page">
         <div class="entete">
             <div class="image">
                 <img src="../Images/quiz.jpeg" alt="">
             </div>
             <p> Le plaisir de jouer</p>
         </div>
         
        <div class="form">
            <form id="form" method="POST" class="forme">
                    <div class="haut">
                        <div class="text">
                        <p>S'inscrire pour jouer </p>
                        </div>
                        <div class="avatar" name="avatar">
                        </div>
                        <div class="fichier">
                            <button type="file" name="fichier" class="bton">Avatar</button>
                        </div>
                    </div>
                    <div class="form-register">
                    <label for="Prenom">Prenom</label>
                    <input type="text" name="Prenom" id="Prenom">
                    <div class="error"></div>
                    </div>
                    <div class="form-register">
                    <label for="Nom">Nom</label>
                    <input type="text" name="Nom" id="Nom">
                    <div class="error"></div>
                    </div>
                    <div class="form-register">
                    <label for="Login">Login</label>
                    <input type="text" name="Login" id="Login">
                    <div class="error"></div>
                    </div>
                    <div class="form-register">
                    <label for="Password">Password</label>
                    <input type="text" name="Password" id="Password">
                    <div class="error"></div>
                    </div>
                    <div class="form-register">
                    <label for="Confirmation">Confirmation</label>
                    <input type="text" name="Confirmation" id="Confirmation">
                    <div class="error"></div>
                    </div>
                    <div class="submit">
                        <input type="submit" name="register" value="Créer un Compte">
                    </div>
            </form>
        </div>            
    </div>
</body>
</html>