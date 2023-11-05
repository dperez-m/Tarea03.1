<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Tarea 03.1 de Contorno Servidor</h1>
    <form method="post" id="images" enctype="multipart/form-data">
    <div><label for="imgs">Adjunte una o varias imágenes, sólo de tipo JPG<input type="file" name="image[]" id="imgs" multiple accept="image/*"></label></div>
    <div><input type="submit" value="Enviar"></div>
    </form>

    <?php
    require_once "utils.php";

    if (isset($_FILES)){
        displayImgInfo($_FILES);
    }
    ?>
</body>
</html>