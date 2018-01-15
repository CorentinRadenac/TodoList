
<?php
require 'mustache/src/Mustache/autoload.php';

	$bdd = new PDO('mysql:host=localhost;dbname=FormulaireAjout','root','lpdip:17');
	// Controle quand on clique sur le bouton "OK"
		if(isset($_POST['valider']) && $_POST['saisie'] != "" ){
		$saisie=$_POST['saisie'];
		$bdd->exec('INSERT INTO Valeur VALUES(null,\''.$saisie.'\')');
		}
	$Val = $bdd->query('SELECT id, ValeurSaisi FROM Valeur');


$m = new Mustache_Engine(array(
    'loader' => new Mustache_Loader_FilesystemLoader(dirname(__FILE__) . '/view'),
));
echo $m->render('liste', $Val);

?>
