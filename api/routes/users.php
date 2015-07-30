<?php

	/**
	 * @apiDefine Status
	 * @apiSuccess {Number}		status			The HTTP status of the call
	 * @apiSuccess {String}		message			A human-friendly summary of the result of the call
	 */

	/**
	 * @apiDefine Success
	 * @apiSuccess {Number}		data.id			The user's id
	 * @apiSuccess {String}		data.firstName	The user's first name
	 * @apiSuccess {String}		data.lastName	The user's last name
	 */

	/**
	 * @api {get}				/users			Request all users
	 * @apiGroup user
	 * @apiName all
	 *
	 * @apiSuccess {Number}		status			The HTTP status of the call
	 * @apiSuccess {String}		message			A human-friendly summary of the result of the call
	 * @apiSuccess {Object[]}	data			An array of users
	 * @apiUse Success
	 */
	$app->get('/users', '\\controllers\\UserController:all');

	/**
	 * @api {get}				/user/:id		Request a single user
	 * @apiGroup user
	 * @apiName one
	 *
	 * @apiParam {Number}		id				The id of the requested user
	 *
	 * @apiSuccess {Number}		status			The HTTP status of the call
	 * @apiSuccess {String}		message			A human-friendly summary of the result of the call
	 * @apiSuccess {Object}		data			The user's data
	 * @apiUse Success
	 */
	$app->get('/user/:id', '\\controllers\\UserController:one');

	$app->post('/user', '\\controllers\\UserController:add');

	$app->put('/user/:id', '\\controllers\\UserController:update');

	$app->delete('/user/:id', '\\controllers\\UserController:delete');

