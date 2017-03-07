<?php

	require 'vendor/autoload.php';
	require_once  'generated-conf/config.php';

	$app = new \Slim\App([
    'settings' => [
        'displayErrorDetails' => true
    ]
]);
	
	
	$app->get('/client/{idclient}', 'getClient' );
	
	function getClient ($request,$response,$args) {
		
	
		return json_encode("");
	}
	
	$app->post('/client', 'addClient' );
	
	function addClient ($request,$response,$args) {
		$body = $request->getParsedBody();
		$nom = $body['nom'];
		
		
		return json_encode("");

	}
	
	$app->run();
?>