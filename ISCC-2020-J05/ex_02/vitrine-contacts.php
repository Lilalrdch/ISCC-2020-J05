<!DOCTYPE html>
<html>
    <head>
        <title>Contact</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style/vitrine.css">
</head>

<body>
    <?php

    require('header.php')
    ?>


<h2>Contact</h2>
<fieldset>
    <fieldset>
        <label for="nom et prénom">Votre nom</label>
        <input size="20" maxlength="40" />
    </fieldset>
    <fieldset>
        <label for="email">Votre email :</label>
        <input size="20" maxlength="40" />
    </fieldset>
    <fieldset>
        <label for="message">Comment améliorer mon site?</label>
        <input size="20" maxlength="40" />
    </fieldset>
    <p>
        <input type="submit" value="Envoyer" />
        </p>
    </body>

    <?php

require('footer.php')
?>

</html>