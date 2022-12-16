<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informations</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php if ($_POST['password'] != 'admin') { 
              header('Location: Accueil.php');
              exit();
        }
?>

    <h2 class="titre">Informations</h2>
    <p class="info"><?php
    echo 'Bonjour ' . $_POST['nom'] . ' ' . $_POST['prenom'] . '<br>';
    ?></p>

<p class="vert">Veuillez saisir les information suivantes : </p>


<div>
    <fieldset class="group">
    <form action="traitement.php" method="post">
        <table class="form">
            <tr>
                <td class="td_info"><p>Formation : </p></td>
                <td class="td_info"><input type="text" name="formation" minlength="4" require></td>
            </tr>
            <tr>
                <td class="td_info"><p>Année d'entrée a Polytech'Olréans : </p></td>
                <td class="td_info"><input type="text" name="annee" minlength="4" require></td>
            </tr>
            <tr>
                <td class="td_info"><p>Âge : </p></td>
                <td class="td_info"><input type="number" name="age" minlength="4" require></td>
            </tr>
        </table>

    <p><input type="submit" value="OK" class="button"></p> 
    </form>
    </fieldset>
    </div>

    <a href="Accueil.php">Retour à la page d'accueils</a>

</body>
</html>