<?php

//displayImgInfo($_FILES);

function displayImgInfo (array $img): void{
    foreach ($img as $input => $infoArr) {
        $x = 0;
        echo "Fichero " . $x + 1 . "</br><ol>";
        foreach ($infoArr as $infoKey => $infoValue) {
           echo "<li> $infoKey : $infoValue[$x] </li>";
        }
        $x++;
        echo "</ol>Fichero " . $x + 1 . "</br><ol>";
        foreach ($infoArr as $infoKey => $infoValue) {
           echo "<li> $infoKey : $infoValue[$x] </li>";
        }
    }
}
?>