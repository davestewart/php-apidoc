<?php

	// load classes
	require 'vendor/autoload.php';
	require 'utils/functions.php';

	// instantiate app
	\Slim\Slim::registerAutoloader();
	$app = new \Slim\Slim();

	// enable cross-domain requests
	cors();

	// routes
	require 'routes/home.php';
	require 'routes/users.php';
	require 'routes/posts.php';

	// 404
	$app->notFound(function () use ($app) {
		json('Page not found', null, 404);
	});

	// run the app
	$app->run();