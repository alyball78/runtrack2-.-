<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carte de membre</title>
</head>

<body>
    <form action="#" method="get">
        <label for="name">Votre nom</label>
        <input type="text" id="name" name="name"><br>
        <label for="prenom">votre prénom</label>
        <input type="text" id="prenom" name="prenom"><br>
        <label for="adresse-postale">Votre adresse postale</label>
        <input type="text" id="adresse-postale" name="adresse-postale"><br>
        <label for="telephone">votre téléphone</label>
        <input type="text" id="telephone" name="telephone"><br>
        <label for="e-mail">votre adresse Mail</label>
        <input type="email" id="e-mail" name="e-mail"><br>
        <input type="submit" value="envoyer votre demande d'adhésion">
    </form>
    <?php
echo "Le tableau contient " . count($_GET);
    ?>
</body>

</html>