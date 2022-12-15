<html>
    <head>
        <title>TP5</title>
    </head>
    <body>

        <p>entrez votre ancien mot de passe  :
            <input type="password" name="old" minlength="4"  required/>
        </p>
        <p>entrez votre nouveaux mot de passe  :
            <input type="password" name="new1" minlength="4"  required/>
        </p>
        <p>entrez votre nouveaux mot de passe  :
            <input type="password" name="new2" minlength="4"  required/>
        </p>
        <?php
        if ($new1 == $new2 && $new1 == $_POST['passe'])
        {
            echo "ok";
        }
        ?>

        
        <p><input type="submit" value="OK"></p> </form>
</body>
</html>
