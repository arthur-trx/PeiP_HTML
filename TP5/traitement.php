<html>
    <head>
        <title>TP5 - réponse</title>
    </head>
    <body>
        <css : background-color: lightblue;>
        <form action="motdepasse.php" method="post">
        
        <?php
        $tab['nom']  = $_POST['nom'];
        $tab['prenom'] = $_POST['prenom'];
        $tab['mot_de_passe']  = $_POST['mot_de_passe'];
        $tab['age']  = $_POST['age'];
        $tab['date']  = $_POST['date'];
        $tab['commentaire'] = $_POST['commentaire'];
        $tab['email'] = $_POST['email'];
        echo 'bonjour, bienvenue  ' . $tab['nom'] .'  '. $tab['prenom'];
        echo '<br>';
        echo 'voulez vous chager votre MDP ?    ';
        echo '<input type="password" name="passe" value="'.$tab['mot_de_passe'].'" style="visibility: hidden;">';
        echo '<br> <input type="submit" value="oui">';
        ?>
        </form>

        
</body>
</html>
