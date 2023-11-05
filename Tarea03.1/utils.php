<?php

//displayImgInfo($_FILES);

function displayImgInfo (string $filesKey): void{
    $x = 0;
    echo "Fichero " . $x + 1 . "</br><ol>";
    foreach ($_FILES[$filesKey] as $infoKey => $infoValue) {
        echo "<li> $infoKey : $infoValue[$x] </li>";
    }
    if (is_array($_FILES[$filesKey][$infoKey])){
        $x++;
        echo "</ol>Fichero " . $x + 1 . "</br><ol>";
        foreach ($_FILES[$filesKey] as $infoKey => $infoValue) {
           echo "<li> $infoKey : $infoValue[$x] </li>";
        }
    }
}

?>