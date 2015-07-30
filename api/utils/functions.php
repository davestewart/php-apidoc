<?php

	function json($message, $data = null, $status = 200)
	{
		// variables
		$object =  [
			'status'	=> $status,
			'message'	=> $message
		];
		if($data)
		{
			$object['data'] = $data;
		}

		// output
		header('Content-Type: application/json');
		die(json_encode($object));
	}

	/**
	 * @see http://stackoverflow.com/questions/8719276/cors-with-php-headers
	 *
	 * An example CORS-compliant method.  It will allow any GET, POST, or OPTIONS requests from any
	 * origin.
	 *
	 * In a production environment, you probably want to be more restrictive, but this gives you
	 * the general idea of what is involved.  For the nitty-gritty low-down, read:
	 *
	 * - https://developer.mozilla.org/en/HTTP_access_control
	 * - http://www.w3.org/TR/cors/
	 *
	 */
	function cors() {

		// Allow from any origin
		if (isset($_SERVER['HTTP_ORIGIN'])) {
			header("Access-Control-Allow-Origin: {$_SERVER['HTTP_ORIGIN']}");
			header('Access-Control-Allow-Credentials: true');
			header('Access-Control-Max-Age: 86400');    // cache for 1 day
		}

		// Access-Control headers are received during OPTIONS requests
		if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {

			if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_METHOD']))
				header("Access-Control-Allow-Methods: GET, POST, OPTIONS");

			if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']))
				header("Access-Control-Allow-Headers: {$_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']}");

			exit(0);
		}
	}