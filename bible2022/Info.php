<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Info</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2 class="titre">Informations</h2>
    <p class="vert">Veuillez saisir les information suivantes : </p>
    
    
    <div>
    <form action="traitement.php" method="post">
        <table class="form">
            <tr>
                <td><p>Formation : </p></td>
                <td><input type="text" name="formation" minlength="4" require></td>
            </tr>
            <tr>
                <td><p>Année d'étude a Polytech : </p></td>
                <td><input type="text" name="annee" minlength="4" require></td>
            </tr>
            <tr>
                <td><p>Age : </p></td>
                <td><input type="number" name="age" minlength="4" require></td>
            </tr>
        </table>

    <p><input type="submit" value="OK" class="button"></p> 
    </form>
    </div>

    <a href="Accueil.php">Retour</a>
</body>
</html>