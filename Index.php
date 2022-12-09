<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EX2 LATIFA HAMZA</title>
    <style>
        body{
            
            padding-left: 20%; 
            padding-right: 20%;        
        }
        h1{
            text-align: center;
        }
    </style>
</head>
<body>
    <form action="CodePHP.php" method="POST" name="form" enctype="multipart/form-data">
            <h2>Formulaire d'inscription</h2>
            <fieldset>
                <legend>Coordooées adhérents </legend>  
            <table>
                <tr>
                    <td><label for="nom">Nom (*):</label></td>
                    <td><input type="text" id="nom" name="nom"></td>
                </tr>
                <tr>
                    <td><label for="">Prénom (*):</label></td>
                    <td><input type="text" id="prenom" name="prenom"></td>
                </tr>
                <tr>
                    <td><label for="">Date de naissance (*):</label></td>
                    <td><input type="date" id="date" name="date" placeholder="JJ/MM/AAAA"></td>
                </tr>
                <tr>
                    <td><label for="checkHomme">Homme:</label></td>
                    <td><input type="radio" name="sexe" id="checkHomme" value="Homme"></td>
                </tr>
                <tr>
                    <td><label for="checkfemme">Femme:</label></td>
                    <td><input type="radio" name="sexe" id="checkfemme" value="Femme"></td>
                </tr>
                <tr>
                    <td><label for="">Mail (*):</label></td>
                    <td><input type="email" id="mail" name="mail" placeholder="@exmple"></td>
                </tr>
            </table>
        </fieldset>

        <fieldset>
            <legend>Activité sportive </legend>  
            <select name="ball" id="ball">
                <option value="Foot" selected >Foot</option>
                <option value="Basketball">Basketball</option>
                <option value="tennis">tennis</option>
            </select> <br>
            <div>
            <input type="checkbox" name="ecole" id="checkEcole" value="Ecole" >
            <label for="checkEcole">Ecole</label>  <br>
            <input type="checkbox" name="loisir" id="checkLoisir" value="Loisir" >
            <label for="checkLoisir" >Loisir</label> 
               </div>
            <textarea name="questions" id="questions" cols="30" rows="3" placeholder="Des questions...?"></textarea><br>
        </fieldset>

        <fieldset>
            <legend>piéce d'identité </legend>  
            <input name="fichier" value="Parcourir..." type="file"  >
             <br><br>
             <input type="submit" id="envoyer" value="Envoier">
            <button id="supp" style="margin-left: 150px;" >supprimer</button><br>
        </fieldset>
    </form>
</body>
</html>