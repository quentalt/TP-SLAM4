<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Exemple d'un formulaire complet</title>
</head>
<body>
<form action="EXO2_analyseFormulaireComplet.php" method="post">
    <div>
        Nom :
        <input type="text" name="nomEleve" value="" size="20" maxlength="20" />
        <BR>
            
        <input type="email" name="emailEleve" value=""  />
        
        Mot de passe :
        <input type="password" name="motdepasseEleve" value=""
               size="20" maxlength="20" />
        <br />Sexe :
        <input type="radio" name="sexe" value="M" checked="checked"/>Masculin
        <input type="radio" name="sexe" value="F" />Féminin
        <br />Téléchargez une photo :
        <input type="file" name="photo" value="" size="50" />
        <br>
        Quel est votre navigateur préféré ?
        <BR>
        <input list="navigateur" name="navigateur">
        <datalist id="navigateur">
            <option value="Internet Explorer">
            <option value="Firefox">
            <option value="Chrome">
            <option value="Opera">
            <option value="Safari">
        </datalist>

        <br />Couleurs préférées :
        <input type="checkbox" name="couleurs[bleu]" />Bleu
        <input type="checkbox" name="couleurs[vert]" />Vert
        <input type="checkbox" name="couleurs[rouge]" />Rouge
        <input type="checkbox" name="couleurs[jaune]" />Jaune
        <br />Langue :
        <select name="langueParlee">
            <option value="A">Anglais</option>
            <option value="F" selected="selected" >Francais</option>
            <option value="E">Espagnol</option>
        </select>
        <br />Sports pratiqués :<br />
        <select name="sportsPratiques[]" multiple="multiple" size="8">
            <option value="F">Football</option>
            <option value="R">Rugby</option>
            <option value="N">Natation</option>
            <option value="V">Volley-Ball</option>
            <option value="B" selected="selected"> Basket Ball</option>
        </select>
        <br />Quelle poursuite d'études ? :<br />
        <textarea name="commentaire" rows="4" cols="50"></textarea>
        <br />
        <input type="hidden" name="invisible" value="etudiant" /><br />
        <input type="submit" name="soumettre" value="OK" />
        <input type="image" name="valider" src="valider.jpg" />
        <input type="reset" name="effacer" value="Effacer" />
        <input type="button" name="action" value="Ne fait rien" />
    </div>
</form>
</body>
</html>
