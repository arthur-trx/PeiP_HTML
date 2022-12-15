<html>
    <head>
        <title>TP5</title>
    </head>
    <body>
        <form action="traitement.php" method="post" >
        <p>Votre nom :
        <input type="text" name="nom" minlength="4" required />
        </p>
        <p>Votre prenom :
            <input type="text" name="prenom" minlength="4" required/>
        </p>
        <p>Votre mot de passe :
            <input type="password" name="mot_de_passe" minlength="4"  required/>
        </p>
        <p> Votre age :
            <input type="number" name="age" />
        </p>
        <p>Votre date de naissances :
            <input type="date" name="date" value="2000-01-01" max="2022-01-01" />
        </p>
        <p>Ajouter des commantaire :
            <input type="text" name="commentaire" />
        </p>
        <p>Votre email :
            <input type="email" name="email" minlength="4" required/>
        </p>
        
        <p><input type="submit" value="OK"></p> 
    </form>
</body>
</html>
