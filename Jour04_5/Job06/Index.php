<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nombres paire et impaire</title>
</head>

<body>
    <form action="" method="get">
        <label for="nombre">nombre</label>
        <input type="text" id="nombre" name="nombre"><br>
        <input type="submit" value="tester">

    </form>
</body>
<?php
if ($_GET["nombre"] % 2 == 0) {
    echo "nombre paire";
} else {
    echo "nombre impaire";
}


?>

</html>