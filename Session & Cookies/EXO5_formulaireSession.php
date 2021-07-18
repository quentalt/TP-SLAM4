   <?php
session_start();
echo "Je recupere du formulaire quelques paramètres <BR>" ;
$nom =  $_POST['nomEleve'] ;
$prenom = $_POST['prenomEleve'] ;
$type = $_POST['typeEtudiant'] ;
echo "Le nom est: $nom <BR>" ;
echo "Le prenom est: $prenom <BR>" ;
echo "Le type etudiant est: $type <BR>" ;

// On va créer 3 variables dans le tableau global $_SESSION
// Ces noms de variables sont les mêmes que dans le programme final EXO5_sessionsForEver.php
/* $nomSchtroumpf =$_POST['nomSchtroumpf'];
$prenomSchtroumpf = $_POST['prenomSchtroumpf'];
$typeSchtroumpf = $_POST['typeSchtroumpf'];

   echo "Le nom Schtroumpf est: $nomSchtroumpf <BR>" ;
   echo "Le prenom Schtroumpfest: $prenomSchtroumpf <BR>" ;
   echo "Le type Schtroumpf est: $typeSchtroumpf <BR>" ; */

   $_SESSION['nomSchtroumpf'] = $nom;
   $_SESSION['prenomSchtroumpf'] = $prenom;
   $_SESSION['typeSchtroumpf'] = $type;

echo "<a href='EXO5_sessionsForEver.php'> Cliquez ici pour voir le pouvoir d'une session </a>";

?>
