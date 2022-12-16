<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perso</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php if ($_POST['password'] != 'admin') { 
              header('Location: Accueil.php');
              exit();
            }
    ?>


    <h2 class="titre">Espace Personnel</h2>
    <p class="intro"><?php
    echo 'Bonjour ' . $_POST['nom'] . ' ' . $_POST['prenom'] . '<br>';
    ?></p>

    <table class="choix">
        <tr>
            <td class="td_choix"><a href="Info.php">Information</a></td>
            <td class="td_choix"><a href="mystere.php">?</a></td>
            <td class="td_choix"><a href="Accueil.php">Accueil</a></td>
        </tr>


    </table>

    <image src="poly.jpg" class="image" />
</body>
</html>