<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
    <head>
        <title>Exercice avec GET - Qui est le plus sévère des professeurs ?</title>
        <meta http-equiv="Content-Type" content="text/html;
    charset=utf-8" />
</head>
<body>



<?php


//$prenom_professeur = urlencode("Timothée") ;

echo "Le professeur le plus sévère est M: ".$_GET["nomProf"]."<br />";

echo "son prenom est".$_GET["prenomProf"];

?>
</body>
</html>


