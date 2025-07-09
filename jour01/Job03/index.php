<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $booléenvar = true;
    $string = "Lyon";
    $intvar = 69;
    $floatvar = 9.0;

    ?>
    <h1>Notions sur les tableaux en HTML</h1><br>
    <table>
        <tr>
            <th>Type</th>
            <th>nom</th>
            <th>Valeur</th>
        </tr>

        <tr>
            <td>booléen</td>
            <td> $booléenvar</td>
            <td>true</td>

        </tr>
        <td>string</td>
        <td>$stringvar</td>
        <td>Lyon</td>
</tr>
        <td>int</td>
        <td>$intvar</td>
        <td>69</td>
</tr>
        <td>float</td>
        <td>$floatvar</td>
        <td>9.0</td>
        </tr>
    </table>
</body>

</html>