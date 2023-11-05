<?php

//displayImgInfo($_FILES);

function displayImgInfo (string $filesKey, int $fileNum = 0): void{
    echo "Fichero " . $fileNum + 1 . "</br><ol>";
    foreach ($_FILES[$filesKey] as $infoKey => $infoValue) {
        echo "<li> $infoKey : $infoValue[$fileNum] </li>";
    }
    echo "</ol>";
    if (isset($infoValue[$fileNum + 1]))
        displayImgInfo($filesKey, $fileNum + 1);
}

?>