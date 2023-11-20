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
    <div><label for="imgs">Adjunte una o varias imágenes, sólo de tipo JPG<input type="file" name="image[]" id="imgs" multiple accept="image/jpeg"></label></div>
    <div><input type="submit" value="Enviar"></div>
    </form>

    <?php
    require_once "utils.php";

    const IMG_SAVE_FOLDER = "data";
    
if (isset($_FILES["image"])){
    displayImgInfo("image");
    foreach ($_FILES["image"]["error"] as $key => $error){
        $name = basename($_FILES["image"]["name"][$key]);
        $tmp_name = $_FILES["image"]["tmp_name"][$key];
        if ($error == UPLOAD_ERR_OK && $_FILES["image"]["type"][$key] == "image/jpeg" && move_uploaded_file($tmp_name, IMG_SAVE_FOLDER . "/$name")) {
                echo "</br>Se ha guardado con éxito el fichero $name";
        } else{
            echo "</br>Se ha producido un error y no se ha podido guardar la imagen $name. </br>Error: " . $_FILES["image"]["error"][$key] . ". Tamaño archivo: " . $_FILES["image"]["size"][$key] / 1024 . "KB</br>";
        }
    }
}
    ?>
</body>
</html>
