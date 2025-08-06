<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau argument et valeur</title>
</head>

<body>
    <table border="1">
        <tr>
            <th>Arguments</th>
            <th>valeurs</th>

        </tr>
        <?php foreach ($_GET as $key => $value): ?>
            <tr>
                <td><?php echo $key; ?></td>
                <td><?php echo $value; ?></td>


            </tr>
        <?php endforeach; ?>


    </table>
    <form action="" method="get">

        <label for="prenom">prénom</label>
        <input type="text" id="prenom" name="prenom"><br>
        <label for="nom">nom</label>
        <input type="text" id="nom" name="nom"><br>
        <input type="submit" value="envoyer">
    </form>
</body>

</html>