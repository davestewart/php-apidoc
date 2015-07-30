<?php

	$app->get('/posts', '\\controllers\\PostController:all');

	/**
	 * @api {get}			/post/:id		Request Post information
	 * @apiGroup Post
	 * @apiName one
	 *
	 * @apiParam {Number}	id				The requested post's id
	 *
	 * @apiSuccess {Number} status			The HTTP status of the call
	 * @apiSuccess {String} message			A user-friendly message with the result of the call
	 * @apiSuccess {Object} data			Data about the user
	 * @apiSuccess {String} data.type		The type of data returned (in this case
	 * @apiSuccess {Object}	data.values		The values of the object
	 */
	$app->get('/post/:id', '\\controllers\\PostController:one');

	$app->post('/post', '\\controllers\\PostController:add');

	$app->put('/post/:id', '\\controllers\\PostController:update');

	$app->delete('/post/:id', '\\controllers\\PostController:delete');

