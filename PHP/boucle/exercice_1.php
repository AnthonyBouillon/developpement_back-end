<?php
// Affichage des nombres impairs
for($i = 0; $i < 150; $i++){
    $odd = 0;
    $odd += $i;
    if($odd % 2 != 0){
        echo $odd;
    }
}