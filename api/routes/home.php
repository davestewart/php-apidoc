<?php

	/**
	 * @api {get} / Test the app is working
	 * @apiGroup Home
	 * @apiName Index
	 *
	 * @apiSuccess {Number} status	The HTTP status code
	 * @apiSuccess {String} message	The default welcome message
	 * @apiSampleRequest	http://localhost:8000
	 */
	$app->get('/', '\\controllers\\HomeController:index');

