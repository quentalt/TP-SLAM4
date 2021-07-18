<?php

define("nombre",'4');

echo nombre;

$Major = array(17,19,18,20);

$compteur = 1;


foreach ($Major as $value) {

    echo '<br>';

    echo "la note n° $compteur est de: $value";

    $compteur++;


}

echo '<br>';

$capitales = [['GB', 'Londres'], ['Allemagne', 'Berlin'], ['France', 'Paris'], ['Italie', 'Rome']];

foreach ($capitales as list ($a,$b)){
    echo '<br>';
    echo "le pays est $a la capitale : $b";

}


echo '<br>';

function celsusVersFahrenheit($celsus)
{
$Fahrenheit= 9/5*$celsus+32;

    return $Fahrenheit;
}

$celsus =31 ;
$result = celsusVersFahrenheit($celsus) ;
echo "la temperature en celsus est  :  $celsus C°, celle en Fahrenheit est : $result";




echo '<br>';

$i = 7;

for (i<0,i=0,i++) {
    return $i;

}


?>