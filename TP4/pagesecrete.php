<html>
    <head>
        <title>Bonjour</title>
    </head>
    <body>
        <css : background-color: lightblue;>

        
        <?php
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $password = $_POST['mot_de_passe'];
         if ( $nom == "admin" && $password == "passwd")
         {
             echo $nom . ' ' . $prenom;
         }
         else
            {
                echo 'erreur de mot de password';
                echo 'il y a rien avoir ici ';
            }
         ?>
        </p>
</body>
</html>
