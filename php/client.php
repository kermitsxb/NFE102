
<?php


	
	$erreur = false;
	if ($action == "validation") {
			$nom = $_POST ["nom"];
			$prenom = $_POST ["prenom"];
			$email = $_POST ["email"];

			// *******************************************
			// Tests Donn�es 
			// ....
			// *******************************************

			$erreur = true;
			
			// ...
	
			if ($erreur) $smarty->display("$page.tpl");
			else {
/*
				$client = new Client ();
				$client->setNom($nom);

			 ...
				
				$client->save ();
				
*/

			
			}
	} else $smarty->display("$page.tpl");
?>
