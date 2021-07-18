<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
    <head>
        <title>Exercice avec POST - Aide au choix d'un prénom</title>
        <meta http-equiv="Content-Type" content="text/html;
    charset=utf-8" />
</head>
<body>

<?php

function affiche_prenoms($nombreLettres,$premiereLettre)
{

// Stockage des prénoms de $nombreLettres lettres commençant par $premiereLettre dans un tableau
$prenoms = file("prenoms.txt", FILE_IGNORE_NEW_LINES);
$choix = array();
for ($i = 0; $i < count($prenoms); $i++)
{
    if (strlen($prenoms[$i]) == $_POST['nbLettres'] && substr($prenoms[$i], 0, 1) == "$premiereLettre") array_push($choix, $prenoms[$i]);
}
// Affichage des prénoms de $nombreLettres lettres commençant par $premiereLettre
?>
<p class="titre3" align="center">Vous recherchez un prénom ?<br />
Et bien je vous propose ceux-ci, à vous de choisir :<br />
<?php
for ($i = 0; $i < count($choix); $i++)
{
    echo '<input type="button" value="'.$choix[$i].'" class="titre3bold" />';
}
}

// A COMPLETER POUR FINALISER


?>
</body>
</html>
