<?php
	$bdd = new PDO('mysql:host=localhost;dbname=FormulaireAjout','root','lpdip:17');
	// Controle quand on clique sur le bouton "OK"
		if(isset($_POST['valider']) && $_POST['saisie'] != "" ){
		$saisie=$_POST['saisie'];
		$bdd->exec('INSERT INTO Valeur VALUES(null,\''.$saisie.'\')');
		}
	$Val = $bdd->query('SELECT id, ValeurSaisi FROM Valeur');
?>
<!doctype html>
<html lang="fr">
<head>
	<title> Liste de valeur </title>
</head>
	<h1> Listes des valeurs : </h1>
<ul>
<?php
	foreach($Val as $ValeurLigne){

	echo '<li>'.$ValeurLigne['ValeurSaisi'].'</li>';
// Affiche toutes les valeurs saisis de la table Valeur
}
?>
</ul>

<h2> Formulaire de saisie </h2> 
<!--Creation du forumlaire -->
	<form name="Saisie" method="post" action="index.php">
	Entre la valeur a ajouter : <input type="text" name="saisie"/>
	<input type="submit" name="valider" value="OK"/>
</form>

</html>
