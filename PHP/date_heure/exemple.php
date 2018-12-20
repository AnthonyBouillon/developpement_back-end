<?php
// Date du jour
echo date('d/m/Y');

// Heure actuel
echo '<br>' . date('H\h:i:s');

// Formaté une date à la française
$oDate = new DateTime('2018-11-16 11:26:51');
echo $oDate->format(" d/m/Y" . " " . "H:\hi");