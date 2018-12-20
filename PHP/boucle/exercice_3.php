
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <style>
            table, th, td{
                border: 2px solid black;
            }
        </style>
        <title>Document</title>
    </head>
    <body>
        <table>
            <thead>

            </thead>
            <tr>
                <th></th>            
                <?php
                // Affiche dans haut du tableau les numéros de 1 à 12
                for ($th = 0; $th <= 12; $th++) {
                    echo '<th>' . $th . '</th>';
                }
                ?>
            </tr>
                </thead>
            <tbody>
                <?php
                // Affiche dans la premier célule de chaque ligne du tableau les numéros de 1 à 12
                for ($th = 0; $th <= 12; $th++) {
                    echo '<tr><th>' . $th . '</th>';
                    // Affiche le resultat pour chaque colonne correspondant à chaque ligne du tableau
                    for ($td = 0; $td <= 12; $td++) {
                        echo '<td>' . $th * $td . '</td>';
                    }
                    echo '</tr>';
                }
                ?>
            </tbody>
        </table>
    </body>
</html>
