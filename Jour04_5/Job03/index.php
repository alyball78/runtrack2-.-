<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire poste</title>
</head>

<body>


    <form action="" method="post">
        <label for="nom">votre nom</label>
        <input type="text" id="nom" name="nom"><br>
        <label for="prenom">votre prénom</label>
        <input type="text" id="prenom" name="prenom"><br>
        <label for="e-mail">votre adresse mail</label>
        <input type="email" name="e-mail" id="e-mail"><br>
        <input type="submit" value="envoyer">

    </form>
</body>
<?php
echo "le nombre d'arguments contenu dans ce tableau est de" . count($_POST);
?>

</html>