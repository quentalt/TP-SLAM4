<?php
session_start();

echo "Je sais qui vous êtes Mr ".$_SESSION['nomSchtroumpf']."<BR>";
echo "Rien ne m echappe ".$_SESSION['prenomSchtroumpf']."<BR>";
echo "A l'intérieur d'une session je peux même passer des champs cachés ".$_SESSION['typeSchtroumpf']."<BR>";

?>