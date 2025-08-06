<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulaire connexion</title>
</head>

<body>
    <form action="" method="post">

        <label for="identifiant">identifiant</label>
        <input type="text" id="identifiant" name="identifiant"><br>
        <label for="mot_de_passe">mot de passe</label>
        <input type="password" name="password" id="mot_de_passe"><br>
        <input type="submit" value="se connecter">
    </form>
    <?php
    $res = ($_POST["identifiant"] === "John") && ($_POST["password"] === "Rambo") ? true : false;
    var_dump($res);
    if ($res) {
        echo "C’est pas ma guerre";
    } else {
        echo "Votre pire cauchemar";
    }
    /* 
        if ($_POST["identifiant"] === "John" && $_POST["password"] === "Rambo") {
        echo "C’est pas ma guerre";
    } else {
        echo "Votre pire cauchemar";
    } */
    ?>
</body>

</html>