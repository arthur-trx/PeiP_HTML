<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1 class="titre">Accueil</h1>
    <h3 class="intro">Mercide saisir les info ci-dessous: </h3>

    <div>
    <form action="PagePerso.php" method="post">
        <table class="form">
            <tr>
                <td><p>Nom : </p></td>
                <td><input type="text" name="nom" minlength="4" require></td>
            </tr>
            <tr>
                <td><p>Prenom : </p></td>
                <td><input type="text" name="prenom" minlength="4" require></td>
            </tr>
            <tr>
                <td><p>Mot de passe : </p></td>
                <td><input type="password" name="password" minlength="4" require></td>
            </tr>
        </table>

    <p><input type="submit" value="OK" class="button"></p> 
    </form>
    </div>

    <image src="poly.jpg" class="image" />
</body>
</html>