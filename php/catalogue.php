<?php



$livres = LivreQuery::create()
	->offset(0)
	->limit(10)
	->find()
	->toArray();

 
 $smarty->assign ("livres",$livres);

 
$smarty->display("catalogue.tpl");
?>
