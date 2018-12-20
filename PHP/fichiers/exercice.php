<?php

// ouvre le fichier
$monfichier = fopen('compteur.txt', 'r+');
$lecture_page = fgets($monfichier); // On lit se qui est écrit
$lecture_page++; // On augmente de 1
fseek($monfichier, 0); // On remet le curseur au début du fichier
fputs($monfichier, $lecture_page); // permet de réécrire
fclose($monfichier);
echo '<p>Cette page a été vue ' . $lecture_page . ' fois !</p>';

// Lis tout le contenu du fichier
$fichier = file('ListeLiens.txt');
$number = 1;
// Affiche ligne par ligne les liens
for ($i = 0; $i < count($fichier); $i++) {
    echo '<a href="' . $fichier[$i] . '" title="Lien">Lien' . $number++ . '</a><br>';
}

// Upload d'image
// On met les types autorisés dans un tableau (ici pour une image)
$type_image = array("image/gif", "image/jpeg", "image/pjpeg", "image/png", "image/x-png", "image/tiff");

// On extrait le type du fichier via l'extension FILE_INFO 
$finfo = finfo_open(FILEINFO_MIME_TYPE);
$mimetype = finfo_file($finfo, $_FILES["fichier"]["tmp_name"]);
finfo_close($finfo);


if (in_array($mimetype, $type_image))
{
    // droit lecture et ecriture
    chmod($_FILES["fichier"]["tmp_name"], 0755);
    // déplace et renomme le fichier
    move_uploaded_file($_FILES["fichier"]["tmp_name"], "images/photo.jpg");    

} 
else 
{
   // Le type n'est pas autorisé, donc ERREUR

   echo "Type de fichier non autorisé";    
   exit;
}    