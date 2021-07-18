<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Exemple d'un formulaire avec conservation des sessions</title>
</head>
<body>
<form action="EXO5_formulaireSession.php" method="post">
    <div>
        Entrez votre nom :
        <input type="text" name="nomEleve" value="" size="20" maxlength="20" />
        <BR>
       Entrez votre prenom :
        <input type="text" name="prenomEleve" value="" size="20" maxlength="20" />

        <input type="hidden" name="typeEtudiant" value="SLAM" /><br />
        <input type="submit" name="soumettre" value="OK" />
    </div>
</form>
</body>
</html>
