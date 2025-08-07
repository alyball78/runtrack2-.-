<?php
$style = $_GET["style"];



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire liste déroulante</title>
    <link rel="stylesheet" href="<?php echo $style ?>">

</head>

<body>
    <img src="image.jpeg.jpg" class="img" alt="Image_formulaire">
    <form action="" method="get">
        <select name="style" id="style">
            <optgroup label="style">
                <option value="style1.css">style1</option>
                <option value="style2.css">style2</option>
                <option value="style3.css">style3</option>
            </optgroup>
        </select><br>
        <input type="submit" value="valider">

    </form>
</body>

</html>