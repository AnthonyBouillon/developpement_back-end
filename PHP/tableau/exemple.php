<?php
// Tableau simple
$tableau[] = "Pomme";
// 
$tableau2 = array("Pomme", "Poire");

// Tableau à plusieurs dimensions
$tab1[] = array("Pomme", "Poire");
$tab1[] = array("salade", "Poire");
$tab1[] = array("tomate", "Poire");
//echo $tab1[1][0] . $tab1[1][1];


// Tableau associatif
$facture = array("Janvier"=>500,"Février"=>620, "Décembre"=>300); 
//echo $facture['Janvier'];
foreach ($facture as $key => $value) {
    echo $key . ' ' . $value . ' ';
   
}
// Ajoute un élément à la fin du tableau
array_push($facture, 500);
// Ajoute un élément au début du tableau
array_unshift($facture,"Lundi","Mardi","Mercredi"); 
// Ordre décroissant => toujours appelé avant la boucle
rsort($facture);
for ($index = 0; $index < count($facture); $index++) {
     echo $facture[$index];
}