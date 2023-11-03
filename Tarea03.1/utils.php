<?php

displayImgInfo($_FILES);

function displayImgInfo (array $img): void{
    foreach ($img as $input => $infoArr) {
        foreach ($infoArr as $key => $value) {
            echo "$key: $value";
        }
    }
    echo "Hola";
}
?>