<?php namespace controllers; 

/**
 * Class UserController
 * @package controllers
 */
class UserController extends base\RestController
{

	public function __construct()
	{
		parent::__construct('user');
	}

}