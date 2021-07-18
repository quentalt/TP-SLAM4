<?php
/**
 * Created by PhpStorm.
 * User: Timothee
 * Date: 12/09/2017
 * Time: 09:56
 */

$nom_professeur = urlencode("Robert") ;
$prenom_professeur = urlencode("Timothée") ;

$lien_script_professeur = "EXPL1_avisProfesseur.php?nomProf=$nom_professeur&prenomProf=$prenom_professeur" ;

echo "<a href='".htmlspecialchars($lien_script_professeur,ENT_QUOTES)."'> Qui est le plus sévère des professeurs ? </a><BR>" ;


$nom_delegue = urlencode("Riahi") ;
$prenom_delegue = urlencode("Ethan") ;
$lien_script_delegue = "delegue.php?nomD=$nom_delegue&prenomD=$prenom_delegue" ;
echo "<a href='".htmlspecialchars($lien_script_delegue,ENT_QUOTES)."'> Qui est le delegue ? </a>" ;



?>
