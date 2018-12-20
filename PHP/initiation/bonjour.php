<?php 
echo 'Bonjour le monde !<hr>';
$a = 1;
$b = '1';
function somme(){
    global $a, $b;
    return $b = $a + $b;
}
echo somme();

function static_1(){
    // garde la valeur enregistrer après chaque appel
    static $var = 0;
    $var++;
    echo $var;
}
static_1(); // 1
static_1(); // 2
static_1(); // 3