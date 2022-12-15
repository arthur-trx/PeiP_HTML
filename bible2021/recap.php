<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Polytech</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div>
        <table class="tab_titre">
            <tr>
                <td class="titre_image">
                    <image src="poly.jpg" 
                    width="300" height="100"
                    />
                </td>   
                <td class="td_titre">
                    <h1 class="titre">Polytech Orléans - Université d'Orléans</h1>
                </td>         
            </tr>
        </table>
    </div>
    <center><h2 class="recap"> Récapitulatif </h2></center>
    <?php
    echo '<b>Identité : </b>' .$_POST['gender'] .' ' . $_POST['nom'] .' ' . $_POST['prenom'].'<br>';
    echo '<b>Année inscription : </b>' .$_POST['inscription'] .'<br>';
    if ($_POST['inscription'] == '3A' || $_POST['inscription'] == '4A'|| $_POST['inscription'] == '5A')
    {echo '<b>Spécialité : </b>' .$_POST['spe'] .'<br>';}
    echo '<b>Date de debut de votre absence : </b>'.$_POST['date_debut'].'<br>';
    echo '<b>Date de fin de votre absence : </b>'.$_POST['date_fin'].'<br>';
    echo '<b>motif : </b>'.$_POST['motif'].'<br>';

    ?>
</body>
</html>
