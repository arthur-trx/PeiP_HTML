<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>traitement</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2 class="titre">traitement</h2>
    <p class="paragraphe">
    <?php
    $_anciennete = date("Y")- $_POST['annee'];
    $_date_de_naisasance = date("Y")-$_POST['age'];
    echo 'Vous 	êtes étudiant, votre formation est ' . $_POST['formation'] . " et vous êtes à Polytech'Orléans depuis " . $_anciennete .' années <br>';
    echo 'Votre année de naissance est ' .  $_date_de_naisasance . '<br>'.'<br>'.'<br>';
    ?>
    </p>

    <a href="Accueil.php">Retour à la page d'accueil</a>
</body>
</html>