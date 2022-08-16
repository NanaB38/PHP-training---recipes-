<!DOCTYPE html>
<html>
    <head>
       <title>Ceci est une page de test <?php /* Code PHP */ ?></title>
        <meta charset="utf-8" />
    </head>
    <body>
        <h1>Ma page web</h1>
        <p>Aujourd'hui nous sommes le <?php echo date('d/m/Y h:i:s'); ?>.</p>
        <?php

echo "J'ai 92 ans.";
?>
        <ul>
        <li style="color: #2596be;">Texte en bleu</li>
        <li style="color: red;">Texte en rouge</li>
        <li style="color: green;">Texte en vert</li>
        </ul>
         <ul>
        <li style="color: #2596be;">Texte en bleu</li>
        <li style="color: red;">Texte en rouge</li>
        <li style="color: green;">Texte en vert</li>
        </ul>
        <?php
     
        ?>
        <?php echo "Ceci est du texte"; ?>
</br>

<!-- <?php
phpinfo(); ?> -->

<?php
$recipe = 'Etape 1 : des flageolets ! Etape 2 : de la saucisse toulousaine';
$length = strlen($recipe);

echo 'La phrase ci-dessous comporte ' . $length . ' caracteres :' . PHP_EOL . $recipe; 
?> 

</br>

<?=
str_replace('c', 'C', 'le cassoulet, c\'est très bon')
?>

</br>

<?php
// Enregistrons les informations de date dans des variables

$day = date('d');
$month = date('m');
$year = date('Y');

$hour = date('H');
$minut = date('i');

// Maintenant on peut afficher ce qu'on a recueilli
echo 'Bonjour ! Nous sommes le ' . $day . '/' . $month . '/' . $year . ' et il est ' . $hour. ' h ' . $minut;
?>
    </body>
    
    
</html>